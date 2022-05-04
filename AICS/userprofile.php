<?php
if(isset($_POST["user_id"]))  
{
    $output = '';

    @include 'config.php';
    $query = "SELECT * FROM form WHERE id = '".$_POST["user_id"]."'";  
    $result = mysqli_query($db, $query);  

    $output .= '  
    <p style = color:white;>';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  
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
              ';  
    }  
    $output .= "</p>";  
    echo $output;  

}