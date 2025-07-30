<html>
<head>
<title>Dashboard</title>
<style>
body
{
  background : white;
}
table
{
margin-top:0px;
	background : white;
}

.update, .delete{
background-color : green;
color:white;
border:0;
outline:none;
border_radius:50px;
font-weight:bold;
cursor:pointer;
}
.delete
{
background-color : red;
}
.add
{
background-color : #4682B4;
color:white;
cursor:pointer;
}
</style>
</head>
<body>
<?php
include("connectionDB.php");
include("header.php");
$query = "select * from courses " ;
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
?>

<br><br><br><br>
<h2 align="center"><mark>All Courses</mark></h2>
<form action="add_course.php" method="POST">
<input type="submit" name="submit" value="Add Course" class="add">
</form>
<?php
if($total!=0)
{?>
<center><table border = "3" cellspacing =  "7" width = "100%" >
<tr>
<th width="5%">Course ID</th>
<th width="15%">Course Title</th>
<th width="35%">Course Description</th>
<th width="5%">Course Duration</th>
<th width="20%">Course Eligibility</th>
<th width="10%">Course Fees</th>
<th width="5%">Operations</th>

</tr>
<?php

while($result = mysqli_fetch_assoc($data))
{
    echo "<tr>
    <td>".$result['course_id']."</td>
    <td>".$result['course_title']."</td>
    <td>".$result['course_desc']."</td>
    <td>".$result['course_duration']."</td>
    <td>".$result['course_eligibility']."</td>
    <td>".$result['course_fees']."</td>
	<td>
	
    <a href='delete_course.php?cid=" . $result['course_id'] . "'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a>     
	</td>
 </tr>";
// <a href='update_course.php?cid=" . $result['course_id'] . "'><input type='submit' value='Update' class='update'></a>
}
}
else
{ 
  echo "<script>alert('No record found...')</script>" ;
}

?>
<script>
function checkdelete()
{
	return confirm('Are you sure to Delete this data');
}
</script>
</body>
</html>