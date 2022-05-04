<!DOCTYPE html>
<html>
    <head>
        <title> Admin - User Forms </title>
        <link rel = "icon" href = "Pictures/logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="admin-style.css">
        <?php include 'required.php' ?>
    </head>
<body>
    <div class="container">
        <div id="head-line">
            <img id="logo" src="Pictures/logo.png">
        <div id="aics">
            <span>Asian Institute of Computer Studies</span>
        </div>
    </div>
    <div class="header">
        <img class="header-bar" src="Pictures/header footer.png">
        <!--<div class="">User ID = <?php //echo $_SESSION['userid'] ?></div>-->
    </div>
    <div class="table-container">
    


  
    <center>
    <h3 style = color:#fab830;font-size:xxx-large;>User Forms</h3>
    <table>
      <thead>
            <tr style = color:#fab830;>
                <th>LRN</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Schedule</th>
                <th>Strand</th>
                <th>Mode</th>
                <th>Sex</th>
                <th>Cellphone Number</th>
           </tr>
      </thead>

      <tbody> 
                                  
 <?php 

$db = mysqli_connect('localhost','root','','register');

$sql = "SELECT * FROM form";
$result = $db->query($sql);

if (!$result){
  die("Error !" . $db->error);
}

while($row = $result->fetch_assoc()):?>
   <tr>       
        <td style = color:#fbf2df;><?php echo $row["lrn"]?></td>
        <td style = color:#fbf2df;><?php echo $row["firstname"]?></td>
        <td style = color:#fbf2df;><?php echo $row["middlename"]?></td> 
        <td style = color:#fbf2df;><?php echo $row["lastname"]?></td>
        <td style = color:#fbf2df;><?php echo $row["schedule"]?></td>
        <td style = color:#fbf2df;><?php echo $row["strand"]?></td>
        <td style = color:#fbf2df;><?php echo $row["mode"]?></td>
        <td style = color:#fbf2df;><?php echo $row["sex"]?></td>
        <td style = color:#fbf2df;><?php echo $row["cpnumber"]?></td>
        <td> 
           <a href="user-forms.php?id=<?php echo $row["id"]?>" class="btn btn-danger" style = color:#fab830;><button style=background-color:#fab830; onclick="return confirm('Are you sure you want to delete this item')">DELETE</button></a>
        </td>
        <td><button id="<?php echo $row["id"] ?>" class="btprofile" style=background-color:#fab830;>PROFILE</button></td>
    </tr>
<?php endwhile;?>

<?php
if(isset($_GET['id'])){

  $id = $_GET['id'];


  $delete = mysqli_query($db,"DELETE FROM form WHERE id ='$id'");
  header('Location: user-forms.php');
}
?>

   </tbody>
   </table>
   </center>

<div id="userprofileModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <p>Content will show here</p>
      </div>
    </div>
  </div>
</div>

<script>    
$(document).ready(function(){
    
    $('.btprofile').click(function(){

        user_id = $(this).attr('id');

            $.ajax({
                url: "userprofile.php",
                method:'POST',
                data:{user_id:user_id},
                success: function(result){
                
                $(".modal-body").html(result);
                
                }
            });

            $('#userprofileModal').modal("show");
    });

    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
    $('#userprofileModal').modal("hide");;
}
});
</script>
  
</div>
    <img id="footer" src="Pictures/header footer.png">
    <div id="inquiries">
        <span><p>For inquiries and concerns email us at <b>aics_montalban@aics.edu.ph</b></p></span>
    </div>
    </div>
</body>
</html>