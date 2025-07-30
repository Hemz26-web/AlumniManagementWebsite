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

.delete{
background-color : red;
align:center;
color:white;
border:0;
outline:none;
border_radius:50px;
font-weight:bold;
cursor:pointer;
}


</style>
</head>
<body>
<?php
include("connectionDB.php");
include("header.php");
$query = "select * from feedback " ;
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{?>
<br><br><br><br>
<h2 align="center"><mark>All Feedbacks</mark></h2>
<center><table border = "3" cellspacing =  "7" width = "100%" >
<tr>
<th width="10%">Feedback ID</th>
<th width="20%">Email</th>
<th width="10%">User Name</th>
<th width="50%">Message</th>
<th width="15%">Operations</th>
</tr>
<?php

while($result = mysqli_fetch_assoc($data))
{
    echo "<tr>
    <td>".$result['feedback_id']."</td>
	<td>".$result['email']."</td>
    <td>".$result['user_name']."</td>
    <td>".$result['feedback']."</td>
	 <td>
        <a href='deletefeedback.php?fid=" . $result['feedback_id'] . "'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a>
                    </td>
	</tr>";    
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