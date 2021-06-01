 <?php
            session_start();

    
      include('../assets/include/db.php');

$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
 if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     $dbpath='images/'.basename($_FILES["image"]["name"]);
$sql="INSERT INTO blogs (image) VALUES ('$dbpath')";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'done';
}
else {
    echo 'error';
}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }




          ?>
