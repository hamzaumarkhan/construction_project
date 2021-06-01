 <?php
            session_start();

    
      include('../assets/include/db.php');
$sql="DELETE FROM security WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
    if($run) {
        echo 'Done';
            }else{
                echo 'Error';
            }
          ?>
