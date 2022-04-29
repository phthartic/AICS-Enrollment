<?php 

session_start();

$db = mysqli_connect('localhost','root','','register');



if(isset($_POST['submit'])){

    $userid = $_SESSION["userid"];

    
    $schedule = $_POST['schedule'];
    $strand = $_POST['strand'];
    $mode = $_POST['mode'];
    $sex = $_POST['sex'];
    $status = $_POST['status'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lrn = $_POST['lrn'];
    $birthdate = $_POST['birthdate'];
    $cpnumber = $_POST['cpnumber'];
    $birthplace = $_POST['birthplace'];
    $nationality = $_POST['nationality'];
    $fbname = $_POST['fbname'];
    $religion = $_POST['religion'];
    $guardian = $_POST['guardian'];
    $numberguardian = $_POST['numberguardian'];
    $mother = $_POST['mother'];
    $father = $_POST['father'];
    $endelem = $_POST['endelem'];
    $refer = $_POST['refer'];
    $endjhs = $_POST['endjhs'];
    $section = $_POST['section'];
    $jhsschool = $_POST['jhsschool'];

    $insertng = "INSERT INTO form(regacc_fk,schedule,strand,mode,sex,`status`,lastname,firstname,middlename,lrn,birthdate,cpnumber,
    birthplace,nationality,fbname,religion,guardian,numberguardian,mother,father,endelem,refer,endjhs,section,jhsschool) 
    value('$userid','$schedule','$strand','$mode','$sex','$status','$lastname','$firstname','$middlename','$lrn','$birthdate','$cpnumber','$birthplace',
    '$nationality','$fbname','$religion','$guardian','$numberguardian','$mother','$father','$endelem','$refer','$endjhs','$section','$jhsschool')";

$result =  mysqli_query($db,$insertng);



/**
$_SESSION['lastname'] = $row1['lastname'];
$_SESSION['firstname'] = $row1['firstname'];
$_SESSION['middlename'] = $row1['middlename'];
$_SESSION['lrn'] = $row1['lrn'];
$_SESSION['sex'] = $row1['sex'];
$_SESSION['birthdate'] = $row1['birthdate'];
$_SESSION['birthplace'] = $row1['birthplace'];
$_SESSION['nationality'] = $row1['nationality'];
$_SESSION['cpnumber'] = $row1['cpnumber'];
$_SESSION['fbname'] = $row1['fbname'];
**/


header('location:enter-app.html');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> AICS - Application Form </title>
        <link rel = "icon" href = "Pictures/logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="af-style.css">
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
    </div>
    <div class="app-form">
    <form action="" method="post">
    <div class="app-form-first-column">
        <div id="schedule" required>  
            <label for="schedule">Preferred Schedule</label> <br> 
            <input type="radio" id="schedule" name="schedule" value="AM">AM Schedule (6AM-12NN)<br>
            <input type="radio" id="schedule" name="schedule" value="PM">PM Schedule (1PM-7PM)<br/>  
        </div> <br>
        <div id="strand" required>
            <label for="strand">Preferred Strand</label> <br> 
            <input type="radio" id="strand" name="strand" value="ABM">ABM (Accountancy, Business, and Management)<br>
            <input type="radio" id="strand" name="strand" value="HUMSS">HUMSS (Humanities, and Social Sciences)<br>
            <input type="radio" id="strand" name="strand" value="GAS">GAS (General Academic Strand) (6AM-12NN)<br>
            <input type="radio" id="strand" name="strand" value="ICT">ICT (Information, and Communication Technology)<br>
            <input type="radio" id="strand" name="strand" value="IA">IA (Industrial Arts)<br/>    
        </div> <br>
        <div id="mode" required>  
            <label for="mode">Mode of Learning (in case<br>there's still no Face-To-Face)</label> <br> 
            <input type="radio" id="mode" name="mode" value="Modular">Modular (Free 64GB OTG Flash Drive)<br>
            <input type="radio" id="mode" name="mode" value="Online">Online (Free Microsoft Teams Account)<br/>  
        </div> <br>
        <div id="sex-status" required>  
            <label for="sex">Sex</label> <br> 
            <input type="radio" id="sex" name="sex" value="Male">Male<br>
            <input type="radio" id="sex" name="sex" value="Female">Female<br/>
            <br>
            <label for="status">Status</label> <br> 
            <input type="radio" id="status" name="status" value="Single">Single<br>
            <input type="radio" id="status" name="status" value="Married">Married<br/>   
        </div> <br>
    </div>
    <div class="app-form-second-column">
        <div id="last-name" required>
            <label for="last-name">Last Name</label><br>
            <input type="text" name="lastname" placeholder="Type Here"> 
        </div><br>
        <div id="first-name" required>
            <label for="first-name">First Name</label><br>
            <input type="text" name="firstname" placeholder="Type Here"> 
        </div><br>
        <div id="middle-name">
            <label for="middle-name" >Middle Name</label><br>
            <input type="text" name="middlename" placeholder="Type Here"> 
        </div><br>
        <div id="lrn" required>
            <label for="lrn" >LRN:</label><br>
            <input type="text" name="lrn" placeholder="Type Here"> 
        </div><br>
        <div id="birthdate" required>
            <label for="birthdate" >Date of Birth</label><br>
            <input type="text" name="birthdate" placeholder="dd/mm/yy"> 
        </div><br>
        <div id="cp-number" required>
            <label for="cp-number" >Cellphone Number</label><br>
            <input type="text" name="cpnumber" placeholder="Type Here"> 
        </div><br>
        <div id="birthplace" required>
            <label for="birthplace" >Place of Birth</label><br>
            <input type="text" name="birthplace" placeholder="Type Here"> 
        </div><br>
    </div>
    <div class="app-form-third-column">
        <div id="nationality" required>
            <label for="nationality" >Nationality</label><br>
            <input type="text" name="nationality" placeholder="Type Here"> 
        </div><br>
        <div id="fb-name" required>
            <label for="fb-name" >FB Name or Messenger</label><br>
            <input type="text" name="fbname" placeholder="Type Here"> 
        </div><br>
        <div id="religion" required>
            <label for="religion">Religion</label> <br> 
            <input type="radio" id="religion" name="religion" value="Catholic">Catholic<br>
            <input type="radio" id="relgion" name="religion" value="INC">Iglesia ni Cristo (INC)<br>
            <input type="radio" id="religion" name="religion" value="Born Again">Born Again Christian<br>
            <input type="radio" id="religion" name="religion" value="Islam">Islam<br>
            <input type="radio" id="religion" name="religion" value="Seventh Day Adventist">Seventh Day Adventist<br/>    
        </div>
        <input type="type" placeholder="Other"><br>
        <br>
        <div id="guardian" required>
            <label for="guardian" >Name of Guardian</label><br>
            <input type="text" name="guardian" placeholder="Type Here"> 
        </div><br>
        <div id="number-guardian" required>
            <label for="number-guardian" >Contact Number of<br>Guardian</label><br>
            <input type="text" name="numberguardian" placeholder="Type Here"> 
        </div><br>
    </div>
    <div class="app-form-fourth-column">
        <div id="mother" required>
            <label for="mother" >Mother's Full<br>Maiden Name</label><br>
            <input type="text" name="mother" placeholder="Type Here"> 
        </div><br>
        <div id="father" required>
            <label for="father" >Father's Name</label><br>
            <input type="text" name="father" placeholder="Type Here"> 
        </div><br>
        <div id="elem" required>
            <label for="elem" >Elementary School</label><br>
            <input type="text" name="elem" placeholder="Type Here"> 
        </div><br>
        <div id="end-elem" required>
            <label for="end-elem" >Taon kung kailan ka<br>nagtapos ng elementary</label><br>
            <input type="text" name="endelem" placeholder="Type Here"> 
        </div><br>
        <div id="refer">
            <label for="refer" >Referred By</label><br>
            <input type="text" name="refer" placeholder="Type Here"> 
        </div><br>
        <div id="end-jhs" required>
            <label for="end-jhs" >Taon kung kailan ka nagtapos<br>ng Junior High School</label><br>
            <input type="text" name="endjhs" placeholder="Type Here"> 
        </div><br>
    </div>
    <div class="app-form-fifth-column">
        <div id="section" required>
            <label for="section" >G10-Section</label><br>
            <input type="text" name="section" placeholder="Type Here"> 
        </div><br>
        <div id="jhs-school" required>
            <label for="jhs-school">Junior High School</label> <br> 
            <input type="radio" id="jhs-school" name="jhsschool" value="KVNHS">KVNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="SINHS">SINHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="SV8B">SV8B NHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="SV8C">SV8C NHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="TNHS">TNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="MHNHS">MHNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="SJNHS">SJNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="GLGMNHS">GLGMNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="WNHS">WNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="BNHS">BNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="MNHS">MNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="Others">Other School<br>
        </div><br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </div>
</form>
</div>
    <img id="footer" src="Pictures/header footer.png">
    <div id="inquiries">
        <span><p>For inquiries and concerns email us at <b>aics_montalban@aics.edu.ph</b></p></span>
    </div>
    </div>
</body>
</html>