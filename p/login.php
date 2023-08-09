<?php
$username=$_POST['username'];
$password=$_POST['password'];
$logintype=$_POST['login-type'];
$q="select*from userregistration where username='$username' and password='$password';";
$q2="select*from agentregistration where username='$username' and pass='$password';";
$con=mysqli_connect('localhost','root',"",'miniproj');
$result='';
if($logintype=='userregistration'){
    $result=mysqli_query($con,$q);
    setcookie('user',$username);
    if(mysqli_num_rows($result)==0){ 
        ?>
        <script>window.location.href="regis.html";</script>
        <?php
    }
    ?>
    <script>window.location.href="user-dashboard.php";</script>
    <?php
}
if($logintype=='agentregistration'){
    $result=mysqli_query($con,$q2);
    setcookie('user',$username);
    if(mysqli_num_rows($result)==0){ 
        ?>
        <script>window.location.href="regis.html";</script>
        <?php
    }
    ?>
    <script>window.location.href="dashboard.php";</script>
    <?php
}
$details=mysqli_fetch_assoc($result);
if(sizeof($details)==0){
    echo 'Login credential is wrong';
}
else{
$a=$details['name'];
echo $a;
}
?>