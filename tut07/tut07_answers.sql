-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 

-- 1. Procedure to calculate the average salary of employees in a given department.
DELIMITER //

CREATE PROCEDURE CalculateAvgSalaryInDepartment (IN department_id INT)
BEGIN
    SELECT AVG(salary) AS average_salary
    FROM employees
    WHERE department_id = department_id;
END//

DELIMITER ;

-- 2. Procedure to update the salary of an employee by a specified percentage.
DELIMITER //

CREATE PROCEDURE UpdateEmployeeSalary (IN emp_id INT, IN salary_increase DECIMAL)
BEGIN
    UPDATE employees
    SET salary = salary * (1 + salary_increase / 100)
    WHERE emp_id = emp_id;
END//

DELIMITER ;

-- 3. Procedure to list all employees in a given department.
DELIMITER //

CREATE PROCEDURE ListEmployeesInDepartment (IN department_id INT)
BEGIN
    SELECT *
    FROM employees
    WHERE department_id = department_id;
END//

DELIMITER ;

-- 4. Procedure to calculate the total budget allocated to a specific project.
DELIMITER //

CREATE PROCEDURE CalculateProjectBudget (IN project_id INT)
BEGIN
    SELECT budget
    FROM projects
    WHERE project_id = project_id;
END//

DELIMITER ;

-- 5. Procedure to find the employee with the highest salary in a given department.
DELIMITER //

CREATE PROCEDURE FindEmployeeWithHighestSalary (IN department_id INT)
BEGIN
    SELECT *
    FROM employees
    WHERE department_id = department_id
    ORDER BY salary DESC
    LIMIT 1;
END//

DELIMITER ;

-- 6. Procedure to list all projects that are due to end within a specified number of days.
DELIMITER //

CREATE PROCEDURE ListProjectsDueToFinishWithinDays (IN days INT)
BEGIN
    SELECT *
    FROM projects
    WHERE DATEDIFF(end_date, CURDATE()) <= days;
END//

DELIMITER ;

-- 7. Procedure to calculate the total salary expenditure for a given department.
DELIMITER //

CREATE PROCEDURE CalculateTotalSalaryExpenditure (IN department_id INT)
BEGIN
    SELECT SUM(salary) AS total_salary_expenditure
    FROM employees
    WHERE department_id = department_id;
END//

DELIMITER ;

-- 8. Procedure to generate a report listing all employees along with their department and salary details.
DELIMITER //

CREATE PROCEDURE GenerateEmployeeReport ()
BEGIN
    SELECT e.*, d.department_name, d.location
    FROM employees e
    JOIN departments d ON e.department_id = d.department_id;
END//

DELIMITER ;

-- 9. Procedure to find the project with the highest budget.
DELIMITER //

CREATE PROCEDURE FindProjectWithHighestBudget ()
BEGIN
    SELECT *
    FROM projects
    ORDER BY budget DESC
    LIMIT 1;
END//

DELIMITER ;

-- 10. Procedure to calculate the average salary of employees across all departments.
DELIMITER //

CREATE PROCEDURE CalculateOverallAvgSalary ()
BEGIN
    SELECT AVG(salary) AS average_salary
    FROM employees;
END//

DELIMITER ;

-- 11. Procedure to assign a new manager to a department and update the manager_id in the departments table.
DELIMITER //

CREATE PROCEDURE AssignNewManager (IN new_manager_id INT, IN department_id INT)
BEGIN
    UPDATE departments
    SET manager_id = new_manager_id
    WHERE department_id = department_id;
END//

DELIMITER ;

-- 12. Procedure to calculate the remaining budget for a specific project.
DELIMITER //

CREATE PROCEDURE CalculateRemainingBudget (IN project_id INT)
BEGIN
    SELECT budget - (SELECT SUM(salary) FROM employees) AS remaining_budget
    FROM projects
    WHERE project_id = project_id;
END//

DELIMITER ;

-- 13. Procedure to generate a report of employees who joined the company in a specific year.
DELIMITER //

CREATE PROCEDURE GenerateEmployeeJoinYearReport (IN join_year INT)
BEGIN
    SELECT *
    FROM employees
    WHERE YEAR(join_date) = join_year;
END//

DELIMITER ;

-- 14. Procedure to update the end date of a project based on its start date and duration.
DELIMITER //

CREATE PROCEDURE UpdateProjectEndDate (IN project_id INT, IN duration INT)
BEGIN
    UPDATE projects
    SET end_date = DATE_ADD(start_date, INTERVAL duration DAY)
    WHERE project_id = project_id;
END//

DELIMITER ;

-- 15. Procedure to calculate the total number of employees in each department.
DELIMITER //

CREATE PROCEDURE CalculateTotalEmployeesInDepartment ()
BEGIN
    SELECT d.department_name, COUNT(e.emp_id) AS total_employees
    FROM departments d
    LEFT JOIN employees e ON d.department_id = e.department_id
    GROUP BY d.department_id;
END//

DELIMITER ;
