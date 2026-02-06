<?php
/*
182. Duplicate Emails

premium lock icon
Companies
SQL Schema
Pandas Schema
Table: Person

+-------------+---------+
| Column Name | Type    |
+-------------+---------+
| id          | int     |
| email       | varchar |
+-------------+---------+
id is the primary key (column with unique values) for this table.
Each row of this table contains an email. The emails will not contain uppercase letters.
 

Write a solution to report all the duplicate emails. Note that it's guaranteed that the email field is not NULL.

Return the result table in any order.

The result format is in the following example.
*/

$query = "SELECT email FROM Person GROUP BY email HAVING COUNT(email) > 1;";

/* 
SOLUTION 2
WITH total as (select email, count(*) as cnt from Person GROUP BY email having cnt > 1)

select email as Email from total;
/*