-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 

-- 1. Query to display the first name and last name of all students
SELECT first_name, last_name FROM students;

-- 2. Query to list all course names along with their credit hours
SELECT course_name, credit_hours FROM courses;

-- 3. Query to display the first name, last name, and email of all instructors
SELECT first_name, last_name, email FROM instructors;

-- 4. Query to show the course names and grades of all students
SELECT c.course_name, e.grade
FROM enrollments e
JOIN courses c ON e.course_id = c.course_id;

-- 5. Query to list the first name, last name, and city of all students
SELECT first_name, last_name, city FROM students;

-- 6. Query to display the course names and instructor names for all courses
SELECT c.course_name, CONCAT(i.first_name, ' ', i.last_name) AS instructor_name
FROM courses c
JOIN instructors i ON c.instructor_id = i.instructor_id;

-- 7. Query to show the first name, last name, and age of all students
SELECT first_name, last_name, age FROM students;

-- 8. Query to list the course names and enrollment dates of all students
SELECT c.course_name, e.enrollment_date
FROM enrollments e
JOIN courses c ON e.course_id = c.course_id;

-- 9. Query to display the instructor names and email addresses for all instructors
SELECT first_name, last_name, email FROM instructors;

-- 10. Query to show the course names and credit hours for all courses
SELECT course_name, credit_hours FROM courses;

-- 11. Query to list the first name, last name, and email of the instructor for 'Mathematics' course
SELECT i.first_name, i.last_name, i.email
FROM instructors i
JOIN courses c ON i.instructor_id = c.instructor_id
WHERE c.course_name = 'Mathematics';

-- 12. Query to display the course names and grades for all students with a grade of 'A'
SELECT c.course_name, e.grade
FROM enrollments e
JOIN courses c ON e.course_id = c.course_id
WHERE e.grade = 'A';

-- 13. Query to show the first name, last name, and state of students enrolled in 'Computer Science' course
SELECT s.first_name, s.last_name, s.state
FROM students s
JOIN enrollments e ON s.student_id = e.student_id
JOIN courses c ON e.course_id = c.course_id
WHERE c.course_name = 'Computer Science';

-- 14. Query to list the course names and enrollment dates for all students with a grade of 'B+'
SELECT c.course_name, e.enrollment_date
FROM enrollments e
JOIN courses c ON e.course_id = c.course_id
WHERE e.grade = 'B+';

-- 15. Query to display the instructor names and email addresses for instructors teaching courses with more than 3 credit hours
SELECT i.first_name, i.last_name, i.email
FROM instructors i
JOIN courses c ON i.instructor_id = c.instructor_id
WHERE c.credit_hours > 3;
