<?php 

$db = mysqli_connect('localhost','root','','register');



if(isset($_POST['submit'])){
    
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
    $fbguardian = $_POST['fbguardian'];
    $mother = $_POST['mother'];
    $father = $_POST['father'];
    $endelem = $_POST['endelem'];
    $refer = $_POST['refer'];
    $endjhs = $_POST['endjhs'];
    $section = $_POST['section'];
    $jhsschool = $_POST['jhsschool'];

    $insertng = "INSERT INTO form(schedule,strand,mode,sex,status,lastname,firstname,middlename,lrn,birthdate,cpnumber,
    birthplace,nationality,fbname,religion,guardian,fbguardian,mother,father,endelem,refer,endjhs,section,jhsschool) 
    value('$schedule','$strand','$mode','$sex','$status','$lastname','$firstname','$middlename','$lrn','$birthdate','$cpnumber','$birthplace',
    '$nationality','$fbname','$religion','$guardian','$fbguardian','$mother','$father','$endelem','$refer','$endjhs','$section','$jhsschool')";

$result =  mysqli_query($db,$insertng);
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
    
            <label for="schedule">Preferred Schedule</label> <br> 
            <input type="radio" id="schedule" name="schedule" value="am">AM Schedule (6AM-12NN)<br>
            <input type="radio" id="schedule" name="schedule" value="pm">PM Schedule (1PM-7PM)<br/>  
<br>
  
            <label for="strand">Preferred Strand</label> <br> 
            <input type="radio" id="strand" name="strand" value="abm">ABM (Accountancy, Business, and Management)<br>
            <input type="radio" id="strand" name="strand" value="humss">HUMSS (Humanities, and Social Sciences)<br>
            <input type="radio" id="strand" name="strand" value="gas">GAS (General Academic Strand) (6AM-12NN)<br>
            <input type="radio" id="strand" name="strand" value="ict">ICT (Information, and Communication Technology)<br>
            <input type="radio" id="strand" name="strand" value="ia">IA (Industrial Arts)<br/>    
    <br>

            <label for="mode">Mode of Learning (in case<br>there's still no Face-To-Face)</label> <br> 
            <input type="radio" id="mode" name="mode" value="modular">Modular (Free 64GB OTG Flash Drive)<br>
            <input type="radio" id="mode" name="mode" value="online">Online (Free Microsoft Teams Account)<br/>  
  <br>
 
            <label for="sex">Sex</label> <br> 
            <input type="radio" id="sex" name="sex" value="male">Male<br>
            <input type="radio" id="sex" name="sex" value="female">Female<br/>
            <br>
            <label for="status">Status</label> <br> 
            <input type="radio" id="status" name="status" value="single">Single<br>
            <input type="radio" id="status" name="status" value="married">Married<br/>   
 <br>
    </div>
    <div class="app-form-second-column">
    
            <label for="last-name" name="lastname">Last Name</label><br>
            <input type="type" placeholder="Type Here"> 
<br>
    
            <label for="first-name" name="firstname">First Name</label><br>
            <input type="type" placeholder="Type Here"> 
    <br>
  
            <label for="middle-name" name="middlename">Middle Name</label><br>
            <input type="type" placeholder="Type Here"> 
   <br>
      
            <label for="lrn" name="lrn">LRN:</label><br>
            <input type="type" placeholder="Type Here"> 
        <br>
       
            <label for="birthdate" name="birthdate">Date of Birth</label><br>
            <input type="type" placeholder="dd/mm/yy"> 
     <br>
     
            <label for="cp-number" name="cpnumber">Cellphone Number</label><br>
            <input type="type" placeholder="Type Here"> 
        <br>

            <label for="birthplace" name="birthplace">Place of Birth</label><br>
            <input type="type" placeholder="Type Here"> 
 <br>
    </div>
    <div class="app-form-third-column">
      
            <label for="nationality" name="nationality">Nationality</label><br>
            <input type="type" placeholder="Type Here"> 
    <br>
     
            <label for="fb-name" name="fbname">FB Name or Messenger</label><br>
            <input type="type" placeholder="Type Here"> 
    <br>
        
            <label for="religion">Religion</label> <br> 
            <input type="radio" id="religion" name="religion" value="catholic">Catholic<br>
            <input type="radio" id="relgion" name="religion" value="inc">Iglesia ni Cristo (INC)<br>
            <input type="radio" id="religion" name="religion" value="born-again">Born Again Christian<br>
            <input type="radio" id="religion" name="religion" value="islam">Islam<br>
            <input type="radio" id="religion" name="religion" value="seventh-day">Seventh Day Adventist<br/>    
     
        <input type="type" placeholder="Other"><br>
        <br>
        
            <label for="guardian" name="guardian">Name of Guardian</label><br>
            <input type="type" placeholder="Type Here"> 
      <br>
     
            <label for="number-guardian" name="numberguardian">Contact Number of<br>Guardian</label><br>
            <input type="type" placeholder="Type Here"> 
      <br>
    </div>
    <div class="app-form-fourth-column">
    
            <label for="mother" name="mother">Mother's Full<br>Maiden Name</label><br>
            <input type="type" placeholder="Type Here"> 
       <br>
     
            <label for="father" name="father">Father's Name</label><br>
            <input type="type" placeholder="Type Here"> 
        <br>
     
            <label for="elem" name="elem">Elementary School</label><br>
            <input type="type" placeholder="Type Here"> 
        <br>
       
            <label for="end-elem" name="endelem">Taon kung kailan ka<br>nagtapos ng elementary</label><br>
            <input type="type" placeholder="Type Here"> 
    <br>
      
            <label for="refer" name="refer">Referred By</label><br>
            <input type="type" placeholder="Type Here"> 
       <br>
        
            <label for="end-jhs" name="endjhs">Taon kung kailan ka nagtapos<br>ng Junior High School</label><br>
            <input type="type" placeholder="Type Here"> 
     <br>
    </div>
    <div class="app-form-fifth-column">
      
            <label for="section" name="section">G10-Section</label><br>
            <input type="type" placeholder="Type Here"> 
   <br>
       
            <label for="jhs-school">Junior High School</label> <br> 
            <input type="radio" id="jhs-school" name="jhsschool" value="kvnhs">KVNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="sinhs">SINHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="sv8b">SV8B NHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="sv8c">SV8C NHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="tnhs">TNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="mhnhs">MHNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="sjnhs">SJNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="glgmnhs">GLGMNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="wnhs">WNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="bnhs">BNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="mnhs">MNHS<br>
            <input type="radio" id="jhs-school" name="jhsschool" value="others">Other School<br>
       <br>
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