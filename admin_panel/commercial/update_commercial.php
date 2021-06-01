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

if($_SESSION['name']!=$_POST['name']) {
    $name=$_POST['name'];
    }
    else {
        $subtitle=$_SESSION['name'];
    }

if($_SESSION['description']!=$_POST['description']) {
$description=$_POST['description'];
}
else {
    $description=$_SESSION['description'];
}


$sql="UPDATE commercial SET title='$title', subtitle='$subtitle', name='$name', description='$description' WHERE  id='$_POST[updateserviceid]'";
$run=mysqli_query($conn,$sql);
if($run){
    echo 'Done';
    header('location:../features.php?action=done');
}else{
    echo 'Error';
}

    
          ?>
