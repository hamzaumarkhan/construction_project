 <?php
session_start();
include('../assets/include/db.php');

if($_SESSION['title']!=$_POST['title']) {
$title=$_POST['title'];
}
else {
    $title=$_SESSION['title'];
}

if($_SESSION['description']!=$_POST['description']) {
$description=$_POST['description'];
}
else {
    $description=$_SESSION['description'];
}




$sql="UPDATE product_details SET title='$title', description='$description' WHERE  id='$_POST[updateserviceid]'";
$run=mysqli_query($conn,$sql);
if($run){
    echo 'Done';
    header('location:../product_details?action=done');
}else{
    echo 'Error';
}

    
          ?>
