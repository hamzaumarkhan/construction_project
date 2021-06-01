 <?php
            session_start();

    
      include('../assets/include/db.php');

$sql="INSERT INTO residential (title, subtitle, description, image) VALUES ('$_POST[title]','$_POST[subtitle]','$_POST[description]','$_POST[image]')";
$run=mysqli_query($conn,$sql);
     $sid='';
     $sql="SELECT id from residential WHERE title='$_POST[title]', subtitle='$_POST[subtitle]', description='$_POST[description]', image='$_POST[image]'";
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
