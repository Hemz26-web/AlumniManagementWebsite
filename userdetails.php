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

</style>
</head>
<body>
<?php
include("connectionDB.php");
include("header.php");
$query = "select * from registration " ;
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{?>
<br><br><br><br>
<h2 align="center"><mark>All Users</mark></h2>
<center><table border = "3" cellspacing =  "7" width = "100%" >
<tr>
<th width="3%">ID</th>
<th width="10%">Image</th>
<th width="8%">User Name</th>
<th width="8%">First Name</th>
<th width="8%">Last Name</th>
<th width="6%">DOB</th>
<th width="5%">City</th>
<th width="5%">State</th>
<th width="5%">Country</th>
<th width="10%">Email ID</th>
<th width="8%">Phone No.</th>
<th width="10%">Operations</th>
</tr>
<?php

while($result = mysqli_fetch_assoc($data))
{ $folder=$result['img'];
    echo "<tr>
    <td>".$result['id']."</td>
	<td><img src=".$folder."height='50px' width='50px'></td>
    <td>".$result['userName']."</td>
    <td>".$result['firstName']."</td>
    <td>".$result['lastName']."</td>
    <td>".$result['dob']."</td>
    <td>".$result['city']."</td>
    <td>".$result['state']."</td>
    <td>".$result['country']."</td>
    <td>".$result['email']."</td>
    <td>".$result['phno']."</td>
	 <td>
        <a href='update.php?uid=" . $result['id'] . "'><input type='submit' value='Update' class='update'></a>
        <a href='delete.php?uid=" . $result['id'] . "'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a>
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