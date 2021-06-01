 <?php
            session_start();

    
      include('../assets/include/db.php');

$sql="INSERT INTO product_details (title, description) VALUES ('$_POST[title]','$_POST[description]')";
$run=mysqli_query($conn,$sql);
     $sid='';
     $sql="SELECT id from product_details WHERE title='$_POST[title]', description='$_POST[description]'";
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
