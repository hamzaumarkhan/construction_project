 <?php
session_start();
include('../assets/include/db.php');

if($_SESSION['updateservicetitle']!=$_POST['updateservicetitle']) {
$title=$_POST['updateservicetitle'];
}
else {
    $title=$_SESSION['updateservicetitle'];
}

if($_SESSION['updateservicesubtitle']!=$_POST['updateservicesubtitle']) {
$subtitle=$_POST['updateservicesubtitle'];
}
else {
    $subtitle=$_SESSION['updateservicesubtitle'];
}

if($_SESSION['updateservicedescription']!=$_POST['updateservicedescription']) {
$description=$_POST['updateservicedescription'];
}
else {
    $description=$_SESSION['updateservicedescription'];
}


$sql="UPDATE category SET title='$title' WHERE  id='$_POST[updateserviceid]'";
$run=mysqli_query($conn,$sql);
if($run){
    echo 'Error';
    header('location:../category.php?action=done');
}else{
    echo 'Error';
}

    
          ?>
