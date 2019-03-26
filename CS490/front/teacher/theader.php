
<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher View</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two equal columns that floats next to each other */
.column {
  float: right;
  padding: 10px;
}

/* Left and right column */
.column.left {
  width: 50%;
}

/* Middle column */
.column.right {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome Professor</h1>
</div>

<div class="topnav">
  <a href="https://web.njit.edu/~vpp29/CS490/front/teacher/teacher.php">Home</a>
  <a href="https://web.njit.edu/~vpp29/CS490/front/teacher/create.php">Create Questions</a>
  <a href="https://web.njit.edu/~vpp29/CS490/front/question/getQuestions.php">Create Test</a>
  <a href="https://web.njit.edu/~vpp29/CS490/front/teacher/studentGrades.php">Student Grades</a>
</div>
