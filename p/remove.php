<?php
$a=$_POST['agentname'];
$con=mysqli_connect('localhost','root',"",'miniproj');
$q="delete from agentpackage where id='$a';";
mysqli_query($con,$q);
?>
<script>
    window.location.href="dashboard.php";
</script>