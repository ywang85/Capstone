<html>
  <head>
    <title>Homework Submission System</title>
    <script src="add_delete.js"></script>
  </head>
  <body>
  <?php
    //echo $_GET['id'];
    $course_id = $_GET['id'];
    //echo $course_id;
    include ('conn.php');
    $mysql_query = mysql_query("select * from courses where id='$course_id'");
    $course = mysql_fetch_array($mysql_query);
    echo "<div style='text-align:left;'><font color='#003DA5'>Term: ";
    echo $course['semester'];
    echo " ";
    //echo "<\div>";
    echo $course['course_year'];
    echo "<br>";
    echo "Course Number: ";
    echo $course['name'];
    echo "<br>";
    echo "Section: ";
    echo $course['section'];
    echo "<br>";
    echo "Course Name: ";
    echo $course['description'];
    echo "</div>";
    echo "<br>";
    echo "<hr>";
    echo "Homework: </font>";
    $mysql_query2 = mysql_query("select * from homework where course_id='$course_id'");
    echo "<table border='1'>
    <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Deadline</th>
    <th>Points</th>
    <th>Attached files</th>
    </tr>";
    while ($homework = mysql_fetch_array($mysql_query2))
    {
      echo "<tr>";
      echo "<td>" . $homework['title'] . "</td>";
      echo "<td>" . $homework['description'] . "</td>";
      echo "<td>" . $homework['deadline'] . "</td>";
      echo "<td>" . $homework['total_points'] . "</td>";
      echo "<td>" . $homework['attached_files'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<hr>";
    
  ?>
   <hr>
   <h4>Homework:</h4>
   <dl>
     <ul>
     <p>
       <table id="homework" border="1" cellpadding="6" cellspacing="2">
         <thead>
           <dd><tr>
               <th width = "100"><b>Number </b></th>
	       <th width = "100"><b>Title</b></th>
	       <th width = "100"><b>Dealine</b></th>
	       <th width = "150"><b>Point value</b></th>
	       <th width = "100"><b>Score</b></th>
	       <th width = "100"><b>Solution</b></th>
	   </tr></dd>
       </table>
       <br>
       <button onclick="CreateRow()">Update homework</button>
       <button onclick="DeleteRow()">Delete row</button>
     </p>
     </ul>
   </dl>
   <hr>
   <h4>Student: </h4>
   <dl>
     <ul>
     <p>
       <table border="1" cellpadding="6" cellspacing="2">
         <thead>
           <dd><tr>
               <th width = "100"><b>Banner ID </b></th>
	       <th width = "100"><b>First Name</b></th>
	       <th width = "100"><b>Last Name</b></th>
	       <th width = "150"><b>Student Score</b></th>
	       <th width = "150"><b>Full Score</b></th>
	       <th width = "150"><b>Grade</b></th>
	   </tr></dd>
	   </table>
     </p>
     </ul>
   </dl>
   <a href="./studentGrade.html">student grade</a>
   <br>
   <?php 
   $course_id = $_GET['id'];
   echo "<a href=\"addHomework.php?id=$course_id\">add homework</a>"; 
   ?>

   </body>
</html>
