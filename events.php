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
$query = "select * from event " ;
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
?>

<br><br><br><br>
<h2 align="center"><mark>All Events</mark></h2>
<form action="add_event.php" method="POST">
<input type="submit" name="submit" value="Add Event" class="add">
</form>
<?php
if($total!=0)
{?>
<center><table border = "3" cellspacing =  "7" width = "100%" >
<tr>
<th width="5%">Event ID</th>
<th width="15%">Event Title</th>
<th width="10%">Event Date </th>
<th width="10%">Event Time </th>
<th width="20%">Event Location</th>
<th width="50%">Event Description</th>
<th width="10%">Operations</th>
</tr>
<?php

while($result = mysqli_fetch_assoc($data))
{
    echo "<tr>
    <td>".$result['event_id']."</td>
    <td>".$result['event_name']."</td>
    <td>".$result['event_date'] ."</td>
    <td>".$result['event_time']."</td>
    <td>".$result ['event_location']."</td>
	  <td>".$result['event_desc']."</td>
	 <td>
        <a href='delete_event.php?eid=" . $result['event_id'] . "'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a>
                    </td>
	</tr>";    
}
}
else
{ 
  echo "No record found..." ;
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