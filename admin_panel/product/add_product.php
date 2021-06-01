 <?php
            session_start();

    
      include('../assets/include/db.php');

$sql="INSERT INTO product (title, subtitle) VALUES ('$_POST[title]','$_POST[subtitle]')";
$run=mysqli_query($conn,$sql);
     $sid='';
     $sql="SELECT id from product WHERE title='$_POST[title]', subtitle='$_POST[subtitle]'";
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
