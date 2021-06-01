 <?php
session_start();
include('../assets/include/db.php');

if($_SESSION['title']!=$_POST['title']) {
$title=$_POST['title'];
}
else {
    $title=$_SESSION['title'];
}

if($_SESSION['subtitle']!=$_POST['subtitle']) {
$subtitle=$_POST['subtitle'];
}
else {
    $subtitle=$_SESSION['subtitle'];
}




$sql="UPDATE product SET title='$title', subtitle='$subtitle' WHERE  id='$_POST[updateserviceid]'";
$run=mysqli_query($conn,$sql);
if($run){
    echo 'Done';
    header('location:../product.php?action=done');
}else{
    echo 'Error';
}

    
          ?>
