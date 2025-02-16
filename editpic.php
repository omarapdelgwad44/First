<?php
if(isset($_GET['id']))
{
	include "connect.php";
	$pic_id=$_GET['id'];
	$sql="SELECT * FROM files WHERE id='$pic_id'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
echo "
<img src='DATA/".$row['filename']."' width='300' height='300'><br><br><br>
<form action='updatepic.php' method='POST' enctype='multipart/form-data'>
<input type='hidden' name='id' value='".$row['id']."'>
<input type='file' name='pic'>
<input type='submit' name='editpic' value='Update'>
</form>
";
}
	?>