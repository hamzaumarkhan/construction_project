 <?php
            session_start();

    
      include('../assets/include/db.php');

$sql="INSERT INTO category (title) VALUES ('$_POST[title]')";
$run=mysqli_query($conn,$sql);
     $sid='';
     $sql="SELECT id from category WHERE title='$_POST[title]'";
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
