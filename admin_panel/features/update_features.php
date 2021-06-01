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
    
    $sql="UPDATE features SET title='$title',subtitle='$subtitle' WHERE  id='$_POST[updateserviceid]'";
    $run=mysqli_query($conn,$sql);
    header('location:../features.php?action=done');
        
              
    
if($run){
    echo 'Done';
    header('location:../features.php?action=done');
}else{
    echo 'Error';
}

    
          ?>
