<?php include 'connection.php' ?>
<?php
$id = $_REQUEST['delete_id'];
$query = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($connect, $query);
if($result){
    header('location:user_manage.php');
}
?>