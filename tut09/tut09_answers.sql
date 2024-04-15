-- table names :- player, match, batsman_scored, team, Ball_By_Ball, wicket_taken, player_match, extra_runs
-- Queries
-- 1. List the names of all left-handed batsmen from England. Order the results alphabetically.
SELECT player_name FROM player
WHERE batting_hand = 'Left-hand bat' AND country_name = 'England'
ORDER BY player_name;


-- 2. List the names and age (in years, should be integer) as on 2018-12-02 of all bowlers with skill “Legbreak googly” who are 28 or more in age. Order the result in decreasing order of their ages. Resolve ties alphabetically.
SELECT 
    player_name,
    TIMESTAMPDIFF(YEAR, dob, '2018-12-02') AS age
FROM 
    player
WHERE 
    bowling_skill = 'Legbreak googly'
    AND TIMESTAMPDIFF(YEAR, dob, '2018-12-02') >= 28
ORDER BY 
    age DESC,
    player_name;


-- 3. List the match ids and toss winning team IDs where the toss winner of a match decided to bat first. Order result in increasing order of match ids.
SELECT match_id, toss_winner
FROM match
WHERE toss_decision = 'bat'
ORDER BY match_id;

-- 4. In the match with match id 335987, list the over ids and runs scored where at most 7 runs were scored. Order the over ids in decreasing order of runs scored. Resolve ties by listing the over ids in increasing order.
SELECT over_id, runs_scored
FROM batsman_scored
WHERE match_id = 335987 AND runs_scored <= 7
ORDER BY runs_scored DESC, over_id;

-- 5. List the names of those batsmen who were bowled at least once in alphabetical order of their names.
SELECT DISTINCT player.player_name
FROM player
JOIN Batsman_Out ON player.player_id = Batsman_Out.player_out
WHERE Batsman_Out.kind_out = 'Bowled'
ORDER BY player.player_name;



-- 6. List all the match ids along with the names of team participating (team 1, team 2), name of the winning team, and win margin where the win margin is at least 60 runs, in increasing order of win margin. Resolve ties by listing the match ids in increasing order.
SELECT match.match_id, 
       Team1.name AS team_1, 
       Team2.name AS team_2, 
       WinningTeam.name AS winning_team_name, 
       match.win_margin
FROM match
JOIN team AS Team1 ON match.team_1 = Team1.team_id
JOIN team AS Team2 ON match.team_2 = Team2.team_id
JOIN team AS WinningTeam ON match.match_winner = WinningTeam.team_id
WHERE match.win_margin >= 60
ORDER BY match.win_margin, match.match_id;


-- 7. List the names of all left-handed batsmen below 30 years of age as on 2018-12-02 (12th Feb, 2018) alphabetically.
SELECT player_name 
FROM player 
WHERE batting_hand = 'Left_Hand bat' 
AND dob >= '1988-12-02'
ORDER BY player_name;

-- 8. List the match wise total for the entire series. The output should be match id, total runs. Return the results in increasing order of match ids.
SELECT match_id, SUM(runs_scored) AS total_runs
FROM batsman_scored
GROUP BY match_id
ORDER BY match_id;

-- 9. For each match id, list the maximum runs scored in any over and the bowler bowling in that over. If there is more than one over having maximum runs, return all of them and order them in increasing order of over id. Order results in increasing order of match ids.
SELECT 
    r.match_id,
    MAX(r.runs_scored) AS maximum_runs,
    p.player_name
FROM 
    batsman_scored r
JOIN 
    Ball_By_Ball b ON r.match_id = b.match_id AND r.over_id = b.over_id
JOIN 
    player p ON b.bowler = p.player_id
GROUP BY 
    r.match_id
ORDER BY 
    r.match_id ASC;


-- 10. List the names of batsmen and the number of times they have been “run out” in decreasing order of being “run out”. Resolve ties alphabetically.
SELECT player.player_name, COUNT(wicket_taken.kind_out) AS number
FROM wicket_taken
JOIN player ON wicket_taken.player_out = player.player_id
WHERE wicket_taken.kind_out = 'run out'
GROUP BY wicket_taken.player_out
ORDER BY number DESC, player.player_name;

-- 11. List the number of times any batsman has got out for any out type. Return results in decreasing order of the numbers. Resolve ties alphabetically (on the out type name).
SELECT kind_out AS out_type, COUNT(kind_out) AS number
FROM wicket_taken
GROUP BY kind_out
ORDER BY number DESC, kind_out;

-- 12. List the team name and the number of times any player from the team has received man of the match award. Order results alphabetically on the name of the team.
SELECT team.name, COUNT(match.man_of_the_match) AS number
FROM match
JOIN team ON match.man_of_the_match = team.team_id
GROUP BY team.name
ORDER BY team.name;

-- 13. Find the venue where the maximum number of wides have been given. In case of ties, return the one that comes before in alphabetical ordering. Output should contain only 1 row.
SELECT venue
FROM (SELECT venue, ROW_NUMBER() OVER (ORDER BY COUNT(*) DESC, venue) AS row_num
      FROM extra_runs
      WHERE extra_type = 'wides'
      GROUP BY venue) AS sub
WHERE row_num = 1;


-- 14. Find the venue(s) where the team bowling first has won the match. If there are more than 1 venues, list all of them in order of the number of wins (by the bowling team). Resolve ties alphabetically.
SELECT venue
FROM (
    SELECT venue, COUNT(*) AS wins_count
    FROM match
    WHERE toss_decision = 'field' AND toss_winner = team_bowling AND match_winner = team_bowling
    GROUP BY venue
    ORDER BY wins_count DESC, venue
) AS venue_wins;


-- 15. Find the bowler who has the best average overall. Bowling average is calculated using the following formula: bowling average = Number of runs given / Number of wickets taken. Calculate the average upto 3 decimal places and return the bowler with the lowest average runs per wicket. In case of tie, return the results in alphabetical order.
SELECT 
    p.player_name
FROM 
    player p
JOIN 
    (
        SELECT 
            b.bowler AS player_id,
            SUM(b.runs_given) AS total_runs_given,
            COUNT(po.player_out) AS total_wickets_taken
        FROM 
            ball_by_ball b
        LEFT JOIN 
            wicket_taken po ON b.match_id = po.match_id
                         AND b.over_id = po.over_id
                         AND b.ball_id = po.ball_id
                         AND b.innings_no = po.innings_no
        WHERE 
            po.kind_out IS NOT NULL
        GROUP BY 
            b.bowler
    ) AS bowling_stats ON p.player_id = bowling_stats.player_id
ORDER BY 
    (bowling_stats.total_runs_given / NULLIF(bowling_stats.total_wickets_taken, 0)),
    p.player_name
LIMIT 1;



-- 16. List the player and the corresponding team where the player played as “CaptainKeeper” and won the match. Order results alphabetically on the player’s name.
SELECT player.player_name, team.name
FROM player
JOIN player_match ON player.player_id = player_match.player_id
JOIN team ON player_match.team_id = team.team_id
JOIN match ON player_match.match_id = match.match_id
WHERE player_match.role = 'CaptainKeeper' AND match.match_winner = player_match.team_id
ORDER BY player.player_name;

-- 17. List the names of all player and their runs scored (who have scored at least 50 runs in any match). Order result in decreasing order of runs scored. Resolve ties alphabetically.
SELECT player.player_name, SUM(batsman_scored.runs_scored) AS runs_scored
FROM player
JOIN Ball_By_Ball ON player.player_id = Ball_By_Ball.striker OR player.player_id = Ball_By_Ball.non_striker
JOIN batsman_scored ON Ball_By_Ball.match_id = batsman_scored.match_id AND Ball_By_Ball.innings_no = batsman_scored.innings_no AND Ball_By_Ball.over_id = batsman_scored.over_id AND Ball_By_Ball.ball_id = batsman_scored.ball_id
GROUP BY player.player_name
HAVING SUM(batsman_scored.runs_scored) >= 50
ORDER BY runs_scored DESC, player.player_name;

-- 18. List the player names who scored a century but their team lost the match. Order results alphabetically.
SELECT player.player_name
FROM player
JOIN Ball_By_Ball ON player.player_id = Ball_By_Ball.striker OR player.player_id = Ball_By_Ball.non_striker
JOIN batsman_scored ON Ball_By_Ball.match_id = batsman_scored.match_id AND Ball_By_Ball.innings_no = batsman_scored.innings_no AND Ball_By_Ball.over_id = batsman_scored.over_id AND Ball_By_Ball.ball_id = batsman_scored.ball_id
JOIN match ON Ball_By_Ball.match_id = match.match_id
WHERE batsman_scored.runs_scored >= 100 AND match.match_winner != Ball_By_Ball.team_batting
ORDER BY player.player_name;

-- 19. List match ids and venues where KKR has lost the game. Order result in increasing order of match ids.
SELECT match.match_id, match.venue
FROM match
JOIN team AS T1 ON match.team_1 = T1.team_id
JOIN team AS T2 ON match.team_2 = T2.team_id
WHERE (T1.name = 'KKR' OR T2.name = 'KKR') AND match.match_winner != (SELECT team_id FROM team WHERE name = 'KKR')
ORDER BY match.match_id;

-- 20. List the names of top 10 player who have the best batting average in season 5. Batting average can be calculated according to the following formula: Number of runs scored by player / Number of match player has batted in. The output should contain exactly 10 rows. Report results upto 3 decimal places. Resolve ties alphabetically.
SELECT player.player_name
FROM player
JOIN Ball_By_Ball ON player.player_id = Ball_By_Ball.striker OR player.player_id = Ball_By_Ball.non_striker
JOIN match ON Ball_By_Ball.match_id = match.match_id
WHERE match.season_id = 5
GROUP BY player.player_name
ORDER BY SUM(Ball_By_Ball.runs_scored) / COUNT(DISTINCT match.match_id) DESC, player.player_name
LIMIT 10;

