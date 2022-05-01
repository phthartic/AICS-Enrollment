<!DOCTYPE html>
<html>
    <head>
        <title> Admin - Users </title>
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
    <h3 style = color:#fab830;font-size:xxx-large;>Users</h3>
    <table>
      <thead>
            <tr style = color:#fab830;>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
           </tr>
      </thead>

      <tbody> 
                                  
 <?php 

$db = mysqli_connect('localhost','root','','register');

$sql = "SELECT * FROM regacc";
$result = $db->query($sql);


if (!$result){
  die("Error !" . $db->error);
}

while($row = $result->fetch_assoc()){
  echo"<tr>
                  <td style = color:#fbf2df;>" . $row["id"] ."</td>
                  <td style = color:#fbf2df;>" . $row["email"] ."</td>
                  <td style = color:#fbf2df;>" . $row["password"] . "</td>
                  <td style = color:#fbf2df;>" . $row["role"] . "</td>
                <td> 
                   <a href='users.php?id=" . $row["id"] ." ' class='btn btn-danger' style = color:#fab830;><button style=background-color:#fab830;>DELETE</button></a>
                </td>
        </tr>";
}

if(isset($_GET['id'])){

  $id = $_GET['id'];

  $delete = mysqli_query($db,"DELETE  FROM regacc WHERE id ='$id'");
  header('Location: users.php');
}


$select = "SELECT * FROM regacc";
$run = mysqli_query($db,$select);
?>

             </tbody>
   </table>
   </center>

  
</div>
    <img id="footer" src="Pictures/header footer.png">
    <div id="inquiries">
        <span><p>For inquiries and concerns email us at <b>aics_montalban@aics.edu.ph</b></p></span>
    </div>
    </div>
</body>
</html>