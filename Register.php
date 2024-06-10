<?php
include("connection.php");
if(isset($_POST["Verify"])){
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $Password=$_POST["password"];
    $Confirm=$_POST["confirm"];
    $sql="INSERT INTO `register`(`Name`, `Email`, `Password`, `Confirm`) VALUES ('$Name','$Email','$Password','$Confirm')";
    $result=$conn->query($sql);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Registration</title>
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="logos"><img src="amazon-removebg-preview.png" alt=""></div>
<form method="POST">
    <div class="Account">
        <h1 style="margin-top: 5px; font-weight: 400; color:#111111;">Create account</h1>
        <label style=" font-size:0.9rem;color:#111111; font-weight: 700px;">Your Name</label>
        <input class="input" type="text" required autofocus placeholder="First and Last name" name="name">
        <label style=" font-size:0.9rem;color:#111111;">Mobile number or Email</label>
        <input class="input" type="email" required name="email">
        <label style=" font-size:0.9rem;color:#111111;">Password</label>
        <input class="input" type="Password" required placeholder="At least 6 characters" name="password">
        <label style=" font-size:0.9rem;color:#111111;">Re-enter Password</label>
        <input class="input" type="Password" required name="confirm">
        <input class="button" type="submit" name="Verify">
        <div class="text">By creating an account, you agree to Amazon's 
            <a href="Conditions of Use">Conditions of Use</a> and <a href="Privacy Notice">Privacy Notice</a>.</div>  
        <div class="hr"><hr></div> 
        <div class="buying">Buying for work?</div>
        <div class="shop"><a href="Shop on Amazon Business">Create a free business account</a></div>   
        <div class="hr1"><hr></div> 
        <div class="text">Already have an account?
            <div class="help"><a href="Sign In.html">Sign in</a>
                <i style="font-size:0.7rem; color:#0066c0;" class="fa-solid fa-caret-right"></i></div>
        </div>   
    </div> 
</form>
    <div class="hr2"><hr></div>
    <div class="footer">
        <a href=" Conditions of Use"> Conditions of Use</a>
        <a style="margin-left:10px;" href="  Privacy Notice "> Privacy Notice</a>
        <a style="margin-left:15px;" href="Help ">Help</a>
    </div>
    <div class="foot">© 1996-2024, Amazon.com, Inc. or its affiliates</div>
   
    
</body>
</html>