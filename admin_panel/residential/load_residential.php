 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class="">
   <table class="table bg-white table-hover table-bordered text-center "  >
      <thead class=" bg-light-primary text-primary">
         <tr class=" " scope="row" >
    
            <th>  Id </th>
            <th>  Image </th>
            <th>  Title </th>
            <th>  Subtitle </th>
            <th>  Description </th>
            <th >  Action </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">';

$sql="SELECT * FROM residential";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class=" p-0" >
            <td class="  " >  '.$row['id'].' </td>
            <td class="  " >  '.$row['title'].' </td>
            <td class="  " >  '.$row['subtitle'].' </td>
            <td class="  " >  '.$row['image'].' </td>
            <td class="  " >  '.$row['description'].' </td>
            <td class=" " ><a onclick="del_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon mr-1 border" title="Delete"><i class="fas fa-trash fa-1x"></i>	</a>
            <a onclick="edit_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon  border" title="Delete"><i class="fas fa-edit  fa-1x"></i>	</a>
             </td>
          </tr>
         
    ';
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
