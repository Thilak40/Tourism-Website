<!DOCTYPE html>
<?php
$con=mysqli_connect('localhost','root',"",'miniproj');
$name=$_COOKIE['user'];
$q="select*from agentpackage where agentname='$name';";
$res=mysqli_query($con,$q);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="../s/dbrd.css" type="text/css">
    <script src="../s/dboard.js" defer></script>
    <title>Reserve your tour now!</title>
</head>

<body>
    <div class="main-container">
        <div class="header">
            <div class="title"><i class="fas fa-plane-departure icon-logo"></i> Anna Tours</div>
            <div class="nav-bar-1">
                <ul>
                    <li title="Packages" class="packages-list">Packages&nbsp; <i style="vertical-align: middle;"
                            class="fas fa-angle-down"></i></li>
                    <a href="about.html" target="_blank">
                    <li title="About">About</li></a>

                    <a href="contact.html" target="_blank">
                    <li title="Contact">Contact</li></a>
                </ul>
            </div>
            <div class="login"><i class="fas fa-user-circle pr-logo"></i>Hi <?php echo $_COOKIE['user']?></div>
            <div class="lout-opt">
                <ul>
                    <form>
                    <li><i class="far fa-sign-out"></i> <a href="../index.html">Logout</a></li>
                    </form>
                </ul>
            </div>
        </div>
        <!-- <div class="packages-sub-menu">
            <ul>
                <li><a href="p/natio.html">National</a></li>
                <li><a href="p/interna.html">International</a></li>
            </ul>
        </div> -->
        <div class="home-contents">
            <!-- Cards -->

            <div class="cards">
<?php
while($detail=mysqli_fetch_assoc($res)){
    $a=$detail['foodava'];
    $b=$detail['hotelava'];
    if($a=='no'){
        $a='none';
    }
    else{
        $a='block';
    }
    if($b=='no'){
        $b='none';
    }
    else{
        $b='block';
    }
?>
                <div class="feature-box">
                    <div class="feature-img">
                        <img src="" class="img">
                    </div>
                    <div class="price">
                        <p><span style="font-family: sans-serif;">₹ </span><span><?php echo $detail['price'];?></span></p>
                    </div>
                    <div class="pc-edit">
                        <!-- <button title="edit"><i class="fas fa-edit"></i></button> -->
                        <form action="remove.php" method="post">
                            <input type="text" style="display: none;" name="agentname" value=<?php echo $detail['id']?>>
                            <button type="submit" title="remove"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                    <div class="feature-details">
                        <h4 class="st"><?php echo $detail['state'];?></h4>
                        <p><?php echo $detail['places'];?></p>
                        <div>
                            <span><i class="fas fa-map-marker-alt des"></i><?php echo $detail['state'];?></span>
                            <span><i class="fas fa-sun des"></i><?php echo $detail['days'];?> Days</span>
                            <span><i class="fas fa-moon des"></i><?php echo $detail['nights'];?> Nights</span><br>
                            
<!-- <script>
    window.onload = () => {
        a=document.getElementById("fo").value;
        b=document.getElementById("ho").value;
        if(a=='no'){
            document.getElementById("food").style.display="none";
        }
        if(b=='no'){
            document.getElementById("hotel").style.display="none";
        }

    }
</script> -->
                            <span id="food" style="display: <?php echo $a?>;"><i class="fas fa-check des"></i>Food</span>
                            <span id="hotel" style="display: <?php echo $b?>;"><i class="fas fa-check des"></i>Hotel</span>
                        </div>
                    </div>
                </div>
<?php }?>

                <div class="card">
                    <em>Create Package</em><br><br>
                    <p>Need to Guide tourists, Create a tour package and get contracts</p><br>
                    <center><button class="org-js">CREATE PACKAGE</button></center>
                </div>
            </div>

        </div>

        <!-- Cards -->
    </div>

    <!-- Side-Menu 1-->

    <div class="side-menu organize">
        <div class="close-side-menu-1 close-side-menu"><i class="fas fa-times"></i></div>
        <p style="font-size: 30px;font-weight: 600;color: #fff;">Create a Package</p><br><br>
        <form action="packages.php" method="post"><!--- India states -->
<select id="country-state" name="state">
    <option value="">-Select State-</option>
    <!-- <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option> -->
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <!-- <option value="Chandigarh">Chandigarh</option> -->
    <option value="Chhattisgarh">Chhattisgarh</option>
    <!-- <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option> -->
    <!-- <option value="Daman and Diu">Daman and Diu</option> -->
    <!-- <option value="Delhi">Delhi</option> -->
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnatak">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <!-- <option value="Ladakh">Ladakh</option> -->
    <!-- <option value="Lakshadweep">Lakshadweep</option> -->
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <!-- <option value="Puducherry">Puducherry</option> -->
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
</select><br><br>
            <input type="number" class="mf-input-box" placeholder="Days" id="male" name="days">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" class="mf-input-box" placeholder="Nights" name="nights"><br></br>
            <input type="text" placeholder="Places" name="places"><br><br>
            <input type="number" placeholder="Package Price in Rupees" name="price"><br><br>
            <input type="checkbox" id="cb1" name="foodava">&nbsp;&nbsp;&nbsp;<label for="cb1">Food Available</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="cb2" name="hotelava">&nbsp;&nbsp;&nbsp;<label for="cb2">Hotel Available</label><br>
            <button type="submit" class="o-btn-sub">Create Package Now</button>
        </form>
    </div>

    <script>
        document.querySelector('.packages-list').onmouseover = () => {
            document.querySelector('.packages-sub-menu').style.display = "block";
        }
        document.querySelector('.packages-sub-menu').onmouseover = () => {
            document.querySelector('.packages-sub-menu').style.display = "block";
        }
        document.querySelector('.packages-sub-menu').onmouseout = () => {
            document.querySelector('.packages-sub-menu').style.display = "none";
        }
    </script>
    <script>
        window.onload = () =>{
            let a=document.getElementsByClassName("st");

            for(i=0;i<a.length;i++){
                if(a[i].innerText=="Tamil Nadu"){
                  
                    document.getElementsByClassName("img")[i].src="../i/tn.jpg";
                }
                if(a[i].innerText=="Andhra Pradesh"){
                  
                  document.getElementsByClassName("img")[i].src="../i/ap.png";
              }
              if(a[i].innerText=="Arunachal Pradesh"){
                  
                  document.getElementsByClassName("img")[i].src="../i/AP Dirang.png";
              }
              if(a[i].innerText=="Assam"){
                  
                  document.getElementsByClassName("img")[i].src="../i/as.jpg";
              }
              if(a[i].innerText=="Bihar"){
                  
                  document.getElementsByClassName("img")[i].src="../i/bi.jpg";
              }
              if(a[i].innerText=="Chhattisgarh"){
                  
                  document.getElementsByClassName("img")[i].src="../i/cg.jpg";
              }
              if(a[i].innerText=="Goa"){
                  
                  document.getElementsByClassName("img")[i].src="../i/goa.png";
              }
              if(a[i].innerText=="Gujarat"){
                  
                  document.getElementsByClassName("img")[i].src="../i/gj1.jpg";
              }
              if(a[i].innerText=="Haryana"){
                  
                  document.getElementsByClassName("img")[i].src="../i/hr1.jpg";
              }
              if(a[i].innerText=="Himachal Pradesh"){
                  
                  document.getElementsByClassName("img")[i].src="../i/hp.jpg";
              }
              if(a[i].innerText=="Jammu and Kashmir"){
                  
                  document.getElementsByClassName("img")[i].src="../i/jk1.jpg";
              }
              if(a[i].innerText=="Jharkhand"){
                  
                  document.getElementsByClassName("img")[i].src="../i/jr.jpg";
              }
              if(a[i].innerText=="Karnataka"){
                  
                  document.getElementsByClassName("img")[i].src="../i/ka.jpg";
              }
              if(a[i].innerText=="Kerala"){
                  
                  document.getElementsByClassName("img")[i].src="../i/ke.jpg";
              }
              if(a[i].innerText=="Madhya Pradesh"){
                  
                  document.getElementsByClassName("img")[i].src="../i/mp.jpg";
              }
              if(a[i].innerText=="Maharashtra"){
                  
                  document.getElementsByClassName("img")[i].src="../i/mh1.jpg";
              }
              if(a[i].innerText=="Manipur"){
                  
                  document.getElementsByClassName("img")[i].src="../i/mani.jpg";
              }
              if(a[i].innerText=="Meghalaya"){
                  
                  document.getElementsByClassName("img")[i].src="../i/me.jpg";
              }
              if(a[i].innerText=="Mizoram"){
                  
                  document.getElementsByClassName("img")[i].src="../i/mz1.jpg";
              }
              if(a[i].innerText=="Nagaland"){
                  
                  document.getElementsByClassName("img")[i].src="../i/nl.jpg";
              }
              if(a[i].innerText=="Odisha"){
                  
                  document.getElementsByClassName("img")[i].src="../i/od1.jpg";
              }
              if(a[i].innerText=="Punjab"){
                  
                  document.getElementsByClassName("img")[i].src="../i/pb1.jpg";
              }
              if(a[i].innerText=="Rajasthan"){
                  
                  document.getElementsByClassName("img")[i].src="../i/rj.jpg";
              }
              if(a[i].innerText=="Sikkim"){
                  
                  document.getElementsByClassName("img")[i].src="../i/si1.jpg";
              }
              if(a[i].innerText=="Telangana"){
                  
                  document.getElementsByClassName("img")[i].src="../i/hy.jpg";
              }
              if(a[i].innerText=="Tripura"){
                  
                  document.getElementsByClassName("img")[i].src="../i/trip.jpg";
              }
              if(a[i].innerText=="Uttar Pradesh"){
                  
                  document.getElementsByClassName("img")[i].src="../i/up.jpg";
              }
              if(a[i].innerText=="Uttarakhand"){
                  
                  document.getElementsByClassName("img")[i].src="../i/uttar.jpg";
              }
              if(a[i].innerText=="West Bengal"){
                  
                  document.getElementsByClassName("img")[i].src="../i/wb.jpg";
              }
            }

        }
    </script>
    </div>
</body>

</html>