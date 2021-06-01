 <?php
session_start();
include('../assets/include/db.php');

$title='';

$sql="SELECT * FROM category WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
 $id=$row['id'];
 $title=$row['title'];
}
echo '<form class="form fv-plugins-bootstrap fv-plugins-framework" id="updateserviceform" novalidate="novalidate" action="category_details/update_category.php" method="post" enctype="multipart/form-data">
								<!--begin::Title-->
								
								<div class="form-group ">
									<label class="font-weight-bolder text-dark">  Title</label>
									<input class="form-control h-auto py-4 rounded-lg d-none" type="text" id="updateserviceid" name="updateserviceid"  value="'.$_SESSION['updateserviceid']=$id.'">
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="updateservicetitle" name="updateservicetitle"  value="'.$_SESSION['updateservicetitle']=$title.'">
								<div class="fv-plugins-message-container"></div>
                                </div>
								<div class="pb-lg-0 pb-5 col-12">
									<button  id="update_service" type="submit" class="btn btn-primary col-12 font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" >Update</button>
								
								</div>
							<div></div></form>';

    
          ?>
