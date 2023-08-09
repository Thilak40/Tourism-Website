<!DOCTYPE html>
<?php
$con=mysqli_connect('localhost','root',"",'miniproj');
$name=$_COOKIE['user'];
$kw=$_POST['kw'];
$q="select*from agentpackage where state like '%$kw%';";
$res=mysqli_query($con,$q);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="../s/udbrd.css" type="text/css">
    <title>Reserve your tour now!</title>
</head>

<body>
    <div class="main-container">
        <div class="header">
            <div class="title"><i class="fas fa-plane-departure icon-logo"></i> Anna Tours</div>
            <div class="nav-bar-1">
                <ul>
                    <li title="Home">Home</li>
                    <li title="Packages" class="packages-list">Packages</li>
                    <li title="About">About</li>
                    <li title="Contact">Contact</li>
                </ul>
            </div>
            <div class="login"><i class="fas fa-user-circle pr-logo"></i>Hi <?php echo $_COOKIE['user']?></div>
            <div class="lout-opt">
                <ul>
                    <li><i class="far fa-sign-out"></i> <a href="../index.html">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="home-contents">

            <!-- Search -->

            <!-- <form>
                <input type="search" name="key">
                <button type="submit">Search</button>
            </form> -->


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

                    <div class="feature-details">
                        <h4 class="stat"><?php echo $detail['state'];?></h4>
                        <p><?php echo $detail['places'];?></p>
                            <div>
                                <span><i class="fas fa-map-marker-alt des"></i><?php echo $detail['state'];?></span>
                                <span><i class="fas fa-sun des"></i><?php echo $detail['days'];?> Days</span>
                                <span><i class="fas fa-moon des"></i><?php echo $detail['nights'];?> Nights</span><br>

                                <span id="food" style="display: <?php echo $a?>;"><i class="fas fa-check des"></i>Food</span>
                                <span id="hotel" style="display: <?php echo $b?>;"><i class="fas fa-check des"></i>Hotel</span>
                                <h4 id="agent">Agent: <?php echo $detail['agentname'] ?></h4>
                                <form action="land.php" method="post">
                                    <input type="text" style="display: none;" name="package" value=<?php echo $detail['id']?>>
                                <button type="submit" id="land">View</button>
                                </form>
                            </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>

    </div>
    


    <script>

        document.querySelector('.login').onmouseover = () => {
            document.querySelector('.lout-opt').style.visibility = "visible";
        }
        document.querySelector('.lout-opt').onmouseover = () => {
            document.querySelector('.lout-opt').style.visibility = "visible";
        }
        document.querySelector('.lout-opt').onmouseout = () => {
            document.querySelector('.lout-opt').style.visibility = "hidden";
        }
    </script>
    <script>
        window.onload = () =>{
            let a=document.getElementsByClassName("stat");

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
</body>

</html>