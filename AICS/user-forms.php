<!DOCTYPE html>
<html>
    <head>
        <title> Admin - User Forms </title>
        <link rel = "icon" href = "Pictures/logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="admin-style.css">
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
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>LRN</th>
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

while($row = $result->fetch_assoc()){
  echo'<tr>
                  <td style = color:#fbf2df;>' . $row["firstname"] . '</td>
                  <td style = color:#fbf2df;>' . $row["middlename"] . '</td> 
                  <td style = color:#fbf2df;>' . $row["lastname"] . '</td>
                  <td style = color:#fbf2df;>' . $row["lrn"] . '</td>
                  <td style = color:#fbf2df;>' . $row["schedule"] .'</td>
                  <td style = color:#fbf2df;>' . $row["strand"] . '</td>
                  <td style = color:#fbf2df;>' . $row["mode"] . '</td>
                  <td style = color:#fbf2df;>' . $row["sex"] . '</td>
                  <td style = color:#fbf2df;>' . $row["cpnumber"] . '</td>
                <td> 
                   <a href="user-forms.php?id=' . $row["id"] .'" class="btn btn-danger" style = color:#fab830;><button style=background-color:#fab830;>DELETE</button></a>
                </td>
<td><button style = background-color:#fab830; id="myBtn">PROFILE</button>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
          <p style = color:white;>
              Schedule: <span style = color:#fab830;> '.$row["sex"].'</span><br>
              Strand: <span style = color:#fab830;> '.$row["strand"].'</span><br>
              Mode: <span style = color:#fab830;> '.$row["mode"].'</span><br>
              Sex: <span style = color:#fab830;> '.$row["sex"].'</span><br>
              Status: <span style = color:#fab830;> '.$row["status"].'</span><br>
              Last Name: <span style = color:#fab830;> '.$row["lastname"].'</span><br>
              First Name: <span style = color:#fab830;> '.$row["firstname"].'</span><br>
              Middle Name: <span style = color:#fab830;> '.$row["middlename"].'</span><br>
              LRN: <span style = color:#fab830;> '.$row["lrn"].'</span><br>
              Birthdate: <span style = color:#fab830;> '.$row["birthdate"].'</span><br>
              Cellphone Number: <span style = color:#fab830;> '.$row["cpnumber"].'</span><br>
              Place of Birth: <span style = color:#fab830;> '.$row["birthplace"].'</span><br>
              Nationality: <span style = color:#fab830;> '.$row["nationality"].'</span><br>
              Religion: <span style = color:#fab830;> '.$row["religion"].'</span><br>
              Guardian: <span style = color:#fab830;> '.$row["guardian"].'</span><br>
              Number of Guardian: <span style = color:#fab830;> '.$row["numberguardian"].'</span><br>
              Mother: <span style = color:#fab830;> '.$row["mother"].'</span><br>
              Father: <span style = color:#fab830;> '.$row["father"].'</span><br>
              End Elementary: <span style = color:#fab830;> '.$row["endelem"].'</span><br>
              Refer: <span style = color:#fab830;> '.$row["refer"].'</span><br>
              End JHS: <span style = color:#fab830;> '.$row["endjhs"].'</span><br>
              Section: <span style = color:#fab830;> '.$row["section"].'</span><br>
              Junior High School: <span style = color:#fab830;> '.$row["jhsschool"].'</span>
           </p>
       </div>
     </div>
   </td>
        </tr>';
}


if(isset($_GET['id'])){

  $id = $_GET['id'];


  $delete = mysqli_query($db,"DELETE FROM form WHERE id ='$id'");
  header('Location: user-forms.php');
}


$select = "SELECT * FROM form";
$run = mysqli_query($db,$select);
?>

             </tbody>
   </table>
   </center>
   <script>
   // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  
</div>
    <img id="footer" src="Pictures/header footer.png">
    <div id="inquiries">
        <span><p>For inquiries and concerns email us at <b>aics_montalban@aics.edu.ph</b></p></span>
    </div>
    </div>
</body>
</html>