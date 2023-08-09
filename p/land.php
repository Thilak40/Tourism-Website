<!DOCTYPE html>
<?php
$con = mysqli_connect('localhost', 'root', "", 'miniproj');
$name = $_COOKIE['user'];
$id = $_POST['package'];
$q = "select*from agentpackage where id='$id';";
$res = mysqli_query($con, $q);
$detail = mysqli_fetch_assoc($res);
$a = $detail['foodava'];
$b = $detail['hotelava'];
if ($a == 'no') {
    $a = 'none';
} else {
    $a = 'block';
}
if ($b == 'no') {
    $b = 'none';
} else {
    $b = 'block';
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../s/land.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Reserve the Tour Now</title>
</head>

<body>
    <div class="contents">
        <div class="header">
            <div class="title"><i class="fas fa-plane-departure icon-logo"></i> Anna Tours</div>
            <div class="nav-bar-1">
                <ul>
                    <a href="../index.html">
                        <li title="Home">Home</li>
                    </a>
                    <!-- <li title="Packages" class="packages-list">Packages&nbsp; <i style="vertical-align: middle;"
                            class="fas fa-angle-down"></i></li> -->
                            <a href="about.html" target="_blank">
                    <li title="About">About</li></a>

                    <a href="contact.html" target="_blank">
                    <li title="Contact">Contact</li></a>
                </ul>
            </div>
            <!-- <div class="login"><a href="p/regis.html"><i class="fas fa-user-circle pr-logo"></i>Login</a></div> -->
        </div>

        <div class="landing-meny">
            <div class="top">
                <img src="" class="img thumbnail">
                <p class="state-title" class="stat"><?php echo $detail['state']; ?></p>
            </div>

            <div class="bottom">
                <p class="des-t">Description</p>
                <p class="description"> <?php echo $detail['places']; ?> </p>
                <p class="des-2">
                    <span class="stat"><i class="fas fa-map-marker-alt des"></i><?php echo $detail['state']; ?></span>
                    <span><i class="fas fa-sun des"></i><?php echo $detail['days']; ?> Days</span>
                    <span><i class="fas fa-moon des"></i><?php echo $detail['nights']; ?> Nights</span><br>

                    <span id="food" style="display: <?php echo $a ?>;"><i class="fas fa-check des"></i>Food</span>
                    <span id="hotel" style="display: <?php echo $b ?>;"><i class="fas fa-check des"></i>Hotel</span><br>
                <h4 id="agent">Agent:&nbsp;&nbsp;<?php echo $detail['agentname']; ?> Tourism</h4>
                <span class="price" id="pvalue" style="display: none;"><?php echo $detail['price']; ?></span>
                </p>
                <button id="rzp-button1" class="sbtn">Pay ₹ <?php echo $detail['price']; ?> and book package</button>
                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <script>
                    var options = {
                        "key": "rzp_test_1Y8K9LxLrlH36i",
                        "amount": <?php echo $detail['price']*100; ?>,
                        "currency": "INR",
                        "name": "Anna Tours",
                        "description": "Tour Packages",
                        "image": "https://www.kindpng.com/picc/m/537-5375857_travel-and-tour-logo-hd-png-download.png",
                        "handler": function(response) {
                            window.location.href="success.html";
                        },
                        "notes": {
                            "address": "Razorpay Corporate Office"
                        },
                        "theme": {
                            "color": "#00ffff80"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.on('payment.failed', function(response) {
                        window.location.href="fail.html";
                    });
                    document.getElementById('rzp-button1').onclick = function(e) {
                        rzp1.open();
                        e.preventDefault();
                    }
                </script>
            </div>
        </div>
    </div>
    <script>
        window.onload = () => {
            let a = document.getElementsByClassName("stat");

            for (i = 0; i < a.length; i++) {
                if (a[i].innerText == "Tamil Nadu") {

                    document.getElementsByClassName("img")[i].src = "../i/tn.jpg";
                }
                if (a[i].innerText == "Andhra Pradesh") {

                    document.getElementsByClassName("img")[i].src = "../i/ap.png";
                }
                if (a[i].innerText == "Arunachal Pradesh") {

                    document.getElementsByClassName("img")[i].src = "../i/AP Dirang.png";
                }
                if (a[i].innerText == "Assam") {

                    document.getElementsByClassName("img")[i].src = "../i/as.jpg";
                }
                if (a[i].innerText == "Bihar") {

                    document.getElementsByClassName("img")[i].src = "../i/bi.jpg";
                }
                if (a[i].innerText == "Chhattisgarh") {

                    document.getElementsByClassName("img")[i].src = "../i/cg.jpg";
                }
                if (a[i].innerText == "Goa") {

                    document.getElementsByClassName("img")[i].src = "../i/goa.png";
                }
                if (a[i].innerText == "Gujarat") {

                    document.getElementsByClassName("img")[i].src = "../i/gj1.jpg";
                }
                if (a[i].innerText == "Haryana") {

                    document.getElementsByClassName("img")[i].src = "../i/hr1.jpg";
                }
                if (a[i].innerText == "Himachal Pradesh") {

                    document.getElementsByClassName("img")[i].src = "../i/hp.jpg";
                }
                if (a[i].innerText == "Jammu and Kashmir") {

                    document.getElementsByClassName("img")[i].src = "../i/jk1.jpg";
                }
                if (a[i].innerText == "Jharkhand") {

                    document.getElementsByClassName("img")[i].src = "../i/jr.jpg";
                }
                if (a[i].innerText == "Karnataka") {

                    document.getElementsByClassName("img")[i].src = "../i/ka.jpg";
                }
                if (a[i].innerText == "Kerala") {

                    document.getElementsByClassName("img")[i].src = "../i/ke.jpg";
                }
                if (a[i].innerText == "Madhya Pradesh") {

                    document.getElementsByClassName("img")[i].src = "../i/mp.jpg";
                }
                if (a[i].innerText == "Maharashtra") {

                    document.getElementsByClassName("img")[i].src = "../i/mh1.jpg";
                }
                if (a[i].innerText == "Manipur") {

                    document.getElementsByClassName("img")[i].src = "../i/mani.jpg";
                }
                if (a[i].innerText == "Meghalaya") {

                    document.getElementsByClassName("img")[i].src = "../i/me.jpg";
                }
                if (a[i].innerText == "Mizoram") {

                    document.getElementsByClassName("img")[i].src = "../i/mz1.jpg";
                }
                if (a[i].innerText == "Nagaland") {

                    document.getElementsByClassName("img")[i].src = "../i/nl.jpg";
                }
                if (a[i].innerText == "Odisha") {

                    document.getElementsByClassName("img")[i].src = "../i/od1.jpg";
                }
                if (a[i].innerText == "Punjab") {

                    document.getElementsByClassName("img")[i].src = "../i/pb1.jpg";
                }
                if (a[i].innerText == "Rajasthan") {

                    document.getElementsByClassName("img")[i].src = "../i/rj.jpg";
                }
                if (a[i].innerText == "Sikkim") {

                    document.getElementsByClassName("img")[i].src = "../i/si1.jpg";
                }
                if (a[i].innerText == "Telangana") {

                    document.getElementsByClassName("img")[i].src = "../i/hy.jpg";
                }
                if (a[i].innerText == "Tripura") {

                    document.getElementsByClassName("img")[i].src = "../i/trip.jpg";
                }
                if (a[i].innerText == "Uttar Pradesh") {

                    document.getElementsByClassName("img")[i].src = "../i/up.jpg";
                }
                if (a[i].innerText == "Uttarakhand") {

                    document.getElementsByClassName("img")[i].src = "../i/uttar.jpg";
                }
                if (a[i].innerText == "West Bengal") {

                    document.getElementsByClassName("img")[i].src = "../i/wb.jpg";
                }
            }
        }
    </script>
</body>

</html>