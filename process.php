<?php
session_start();
include('dbconnect.php');

if(isset($_GET['delete']))
{
  $id=$_GET['delete'];
  $sql="delete from plants11 where p_id='$id'";
  $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));

  $_SESSION['message1']="Record has been deleted!!";
  $_SESSION['msg_type']="danger";
  header('Location:plant.php');
}

 ?>
