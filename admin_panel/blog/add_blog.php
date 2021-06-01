 <?php
            session_start();

    
      include('../assets/include/db.php');

$sql="INSERT INTO blogs (title, subtitle, description, image, comment, datetime ) VALUES ('$_POST[title]','$_POST[subtitle]','$_POST[description]','$_POST[image]', '$_POST[comment]', '$_POST[datetime]')";
$run=mysqli_query($conn,$sql);
     $sid='';
     $sql="SELECT id from blog WHERE title='$_POST[title]', subtitle='$_POST[subtitle]', description='$_POST[description]', image='$_POST[image]', comment='$_POST[comment]', datetime='$_POST[datetime]'";
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
