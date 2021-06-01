 <?php
            session_start();

    
      include('../assets/include/db.php');

$sql="INSERT INTO features_details (title, description, image) VALUES ('$_POST[title]','$_POST[description]','$_POST[image]')";
$run=mysqli_query($conn,$sql);
     $sid='';
     $sql="SELECT id from features_details WHERE title='$_POST[title]', description='$_POST[description]', description='$_POST[description]'";
     $run_=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($run)) {
      $sid= $row['id'];
   
     }
     
if($run) {
    echo 'done';
}
else {
    echo 'error';
}
  




          ?>
