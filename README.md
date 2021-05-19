# Company-website-example

#### This is an example of a website built with PHP, CSS, JS and MYSQL database.

##### The images can not be shared and they were replaced with some colors.

#### PHP
- connects to the database and insert into feedbacks and cvs tables the values from the forms

#### Javascript
- loads the menu's items into the body content of the index.php page

#### MySql
- creates the tables with the next scripts:
1. create database company_website;
2. use company_website;
3. create table feedbacks(first_name varchar(255), last_name varchar(255), message varchar(255));
4. create table cvs(first_name varchar(255), last_time varchar(255), link_cv varchar(255));

For testing this application, you must:
1. create a host with a utilitary as Wamp and put the files on the www directory and create a virtual host named as you wish
2. run the script from above on MySql console or create directly the database with the tables in phpMyAdmin console from Wamp
3. enter into the virtual host created in Wamp
4. check the forms if the data was inserted into the tables with the scripts:
- select * from cvs;
- select * from feedbacks;

