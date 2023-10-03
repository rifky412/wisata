<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Beranda</title>
</head>
<body>
    <section id="home">
    <div class="wrapper-nav">
        <h1 class="navbar-brands">Wonderful Tour</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#destinations">Destinations</a>
            <div class="animation start-home"></div>
        </nav>
    </div>
    <div class="w3-content w3-section" style="max-width:100%">
        <img class="mySlides" src="img/borobudur.png" width="100%" height="80%">
        <img class="mySlides" src="img/balekambang.png" width="100%" height="80%">
        <img class="mySlides" src="img/rinjani.png" width="100%" height="80%">
    </div>
    <script>
    var myIndex = 0;
    carousel();
    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);
    }
    </script>
    </section>
    <br><br>
    <section id="about">
    <h1>About</h1>
    <p style="padding-left:10%; padding-right:10%; padding-top:2%; padding-bottom:5%">
Wonderful Tour<br><br>
Indonesia is a country that has a lot of cultural and tourism diversity
has its own characteristics that can attract local and foreign tourists
visiting Indonesia and tourism is one of the sectors that contributes.<br>
The largest source of foreign exchange earnings in Indonesia.<br><br>
Performance of the tourism sector as a producer, A country's foreign exchange is determined by its ability to attract foreign tourists
Indonesia.<br>
Therefore, the number of foreign tourist visits is very influential
on the amount of foreign exchange obtained from the tourism sector.<br>
However, in 2002 until In 2008, Indonesia experienced a decline in foreign tourist arrivals, this is the case
due to the many disasters occurring in Indonesia.<br>
The peak is when it happens the first bombing in the city of Bali in 2002, then followed by the tsunami disaster in Aceh
in 2004 and the Avian Flu outbreak in 2005 as well as bombings in the city
Bali for the second time in 2008.<br>
From the many events that occurred In 2008, the Indonesian government was truly able to do this
prove by participating in building the tourism industry.<br><br>
Namely creating a marketing strategy
which created a brand for Indonesian tourism with the brand "visit Indonesia year"
with the government's seriousness in rebuilding the tourism industry in Indonesia
through the "Visit Indonesia Year" strategy it can be said to be successful because it is able to increase
foreign tourist visits.
    </section>
    <section id="contact">
    <h1>Contact</h1>
    <br><br>
    <box>
        <div style="text-align:center" class="wrapper">
        <div class="flex"><img src="img/email.jpg" style="width: 50px;height: 50px;"><button style="background-color: black; height:60px"><a href="mailto:wonderfultour@gmail.com" style="font-size: large; color: white;">wonderfultour <br> @gmail.com</a></button></div>
        <div class="flex"><img src="img/whatsapp.jpg" style="width: 50px;height: 50px;"><button style="background-color: green;"><a href="https://wa.me/083837905442" style="font-size: large; color: white;">083837905442</a></button></div>
        <div class="flex"><img src="img/facebook.jpg" style="width: 50px;height: 50px;"><button style="background-color: blue;"><a href="https://facebook.com/wonderful.tour" style="font-size: large; color: white;">Wonderful Tour</a></button></div>
        <div class="flex"><img src="img/instagram.jpg" style="width: 50px;height: 50px;"><button style="background-color: red;"><a href="https://instagram.com/wonderful_tour" style="font-size: large; color: white;">Wonderful Tour</a></button></div>
        </div>
    </box>
    </section>
    <div style="padding-bottom: 150px;"></div>
    <section id="destinations">
    <h1>Destinations</h1>
    <br><br>
    <div style="margin-left:10%">Rekomendasi terpopuler : <a href="balekambang.html">Balekambang Beach</a> , <a href="rinjani.html">Rinjani Mountain</a> , <a href="bromo.html">Bromo Mountain</a></div>
    <br>
    <div style="display:flex">
    <div style="padding-right:100px"></div>
    <img src="img/borobudur2.png" width="40%" height="auto" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
    <div style="padding-right:100px"></div>
    <img src="img/prambanan.png" width="40%" height="auto" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
    </div>
    <br>
    <div style="display:flex">
    <div style="width:55%; padding-left:100px"><a href="borobudur.html">Borobudur Temple</a></div>
    <div><a href="prambanan.html">Prambanan Temple</a></div>
    </div>
    <div style="display:flex">
    <div style="width:55%; padding-left:100px">Rp50.000</div>
    <div>Rp50.000</div>
    </div>
    <div style="padding-bottom: 50px;"></div>
    <div style="display:flex">
    <div style="padding-right:100px"></div>
    <img src="img/balekambang2.png" width="40%" height="auto" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
    <div style="padding-right:100px"></div>
    <img src="img/tigawarna.png" width="40%" height="auto" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
    </div>
    <br>
    <div style="display:flex">
    <div style="width:55%; padding-left:100px"><a href="balekambang.html">Balekambang Beach</a></div>
    <div><a href="tigawarna.html">Tiga Warna Beach</a></div>
    </div>
    <div style="display:flex">
    <div style="width:55%; padding-left:100px">Rp10.000</div>
    <div>Rp10.000</div>
    </div>
    <div style="padding-bottom: 50px;"></div>
    <div style="display:flex">
    <div style="padding-right:100px"></div>
    <img src="img/rinjani2.png" width="40%" height="auto" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
    <div style="padding-right:100px"></div>
    <img src="img/bromo.png" width="40%" height="auto" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
    </div>
    <br>
    <div style="display:flex">
    <div style="width:55%; padding-left:100px"><a href="rinjani.html">Rinjani Mountain</a></div>
    <div><a href="bromo.html">Bromo Mountain</a></div>
    </div>
    <div style="display:flex">
    <div style="width:55%; padding-left:100px">Rp5.000</div>
    <div>Rp30.000</div>
    </div><br>
    </section>
</body>
</html>