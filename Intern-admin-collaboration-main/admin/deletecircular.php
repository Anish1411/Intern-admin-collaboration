<?php
include('conn.php');
if(isset($_GET['id']))
{
    mysqli_error($con);	

$id=$_GET['id'];


mysqli_error($con);	


$sql=mysqli_query($con,"delete from `curricular`  where `id`='".$id."'") or die (mysqli_error($con));
mysqli_error($con);

	if($sql)
	{echo "Data deleted";}
    else
  {echo "error in deletion";}
  header('location:viewcurricular.php');
mysqli_close($con);

}
	
?>





