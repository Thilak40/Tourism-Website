<?php 
$name=$_POST['name'];
$username=$_POST['username'];
$mail=$_POST['mail'];
$ph_no=$_POST['phno'];
$password=$_POST['pass'];
$gender=$_POST['gender'];
$login_type=$_POST['login-type'];

$con=mysqli_connect('localhost','root',"",'miniproj');

// 
if($login_type=="user-login"){  
    $sql="select * from userregistration where email='$mail'";
    $res=mysqli_num_rows(mysqli_query($con,$sql));
    if($res>0){
        ?>
        <script>
            window.location.href="newreg.html";
        </script>
    <?php
    }
    else{
        $q="INSERT INTO userregistration (name,username,email,phoneno,password,gender) VALUES ('$name','$username','$mail','$ph_no','$password','$gender');";
        mysqli_query($con,$q);
        ?>
        <script>
            window.location.href="regis.html";
        </script>
    <?php
    }
}
else if($login_type=="agent-login"){
    
    $q1="INSERT INTO agentregistration (name,username,mail,phno,pass,gender) VALUES ('$name','$username','$mail','$ph_no','$password','$gender');";
    mysqli_query($con,$q1);
}
?>
<script>
    window.location.href="regis.html";
</script>