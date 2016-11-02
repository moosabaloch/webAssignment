## PHP Basic CRUD Application ##


----------


**Pages**
 1. Home Page (Landing Page)
 2. Inbox Viewer
 3. Single Message View
 
 


----------


**Functionality**
<br>*Page 1 Homepage:*
User can view the whole top to bottom landing page at bottom there is form by which user can submit any type of application to admin or to localhost.
<br>*Page 2 Inbox Viewer:*
	This is the page for admin to view all messages submitted by users and admin can delete any particular message and also admin can view any message by clicking on green message icon.
	<br>*Page 3 Single Message View*
	In this page admin can only view particular message.


----------
**How CRUD**
<br>C = Form Submission.
<br>R = Reading all messages.
<br>U = If any message is viewed then status will be updated
<br>D = Delete of any message by admin


----------

**Instructions**
Import project to your respective host then open database in my case (PhpMyAdmin) copy the queries from [FILE](https://raw.githubusercontent.com/moosabaloch/WebProjectPHP/master/database%20%26%20table.txt) and run as shown below.
<br>1: To create database:

    CREATE DATABASE moosa

2: After creating database successfully run query for create table:

  <code>CREATE TABLE IF NOT EXISTS `inbox` (
  `msgid` int(11) NOT NULL,
  `uName` varchar(60) NOT NULL,
  `uEmail` varchar(30) NOT NULL,
  `uMessage` text NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE = innodb;</code>

Now you can run the app successfully.
