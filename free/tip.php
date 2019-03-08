
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="icon" href="../images/Soccer-icon.png" type="image/png">
		<title>Sportpesa Tips</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/taps.css" />
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/fontawesome/css/all.css">
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/icomoon.css">
	</head>
        <style type="text/css">
        #header{
                background-image: linear-gradient(-35deg, #344758 0%, #29384f 42%, #1B283c 78%, #307AD1 120%);

}
         @media screen and (max-width: 1680px) {
          
           #header .logo{
                font-size: 3.0em;
            letter-spacing: 2px;
            }
        }
   @media screen and (max-width: 1280px) {
 
           #header .logo{
                font-size: 2.5em;
            letter-spacing: 2px;
            }
        }
        @media screen and (max-width: 980px) {

           #header .logo{
            font-size: 1.3em;
            letter-spacing: 0.8px;
            text-align: left; 
            }   
        
.myTableSmall {
    font-size: 10px!important;
}

            
        }
        @media screen and (max-width: 736px) {
          }
            #header.logo{
                font-size: 0.5em;
            letter-spacing: 0.8px;
            }
   
        }
@media screen and (max-width: 480px) {
         
           #header .logo{
                font-size: 0.5em;
            letter-spacing: 0.5px;
            }

       
        }
.table, table {
    max-width: 100%!important;
    width: 100%!important;
}
.fa-bars{
    width: 40; 
    hight:40px; 
}
body{
    background-color: #f5f5f5!important;
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
}
    </style>
	<body>

		<!-- Header -->

        <div class="container-fluid">
            <div class="row">
			<header id="header">
				<nav class="left">
					  <a href="#menu"><i class="fa fa-bars " ></i></a>
                </ul>
				</nav>
				<a href="../index.php" class="logo">Sp<img src="../images/sportpesa1024.png" width="50" height="50"/>rtpesa Tips</a>
				<nav class="right">
					<a href="../login.php"><button class="btn btn-banner btn-sm  button2  animated swing duration- animation-delay-6 "><i class="fa fa-user"></i> LOGIN</button></a>
				</nav>
			</header></div></div>
		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../index.php">HOME</a></li>
                    <li><a href="../free/tip.php">FREE TIPS</a></li>
					<li><a href="../login.php">PREMIUM TIPS</a></li>
                    <li><a href="../jackpot.php">JACKPOT TIPS</a></li>
					<li><a href="../results/result1.php">RESULTS</a></li>
                    <li><a href="../contact.php">CONTACT US</a></li>
                    <li><a href="../about.php">ABOUT US</a></li>
				</ul>
				<ul class="actions vertical ">
					<li><a href="../login.php"><button class="button-fit btn btn-banner btn-sm button1"><i class="fa fa-user"></i> LOGIN</button></a>
				</ul>
			</nav>
     <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center" style="background-color: #fff; padding: 0px;">
                <div class="well" style="border-radius: 0px; background-color: rgba(1,1,1,.1); margin-bottom: 0px; height: 100%; width: 100%; color: #307AD1; border: none;">
                    <h4 class="headerTitle" style="color: #307AD1 font-size:18px">Today Free Tips<br><small style="text-decoration: none;font-size: 18px;color: #29384f"><a href="../index.php">HOME</a> <i class="fa fa-chevron-circle-right"></i> Sportpesa Tips</small><br></h4>

                </div>
            </div>
        </div>
    </div>
</section>  
		<!-- One -->
<?php
include_once('../php/connections.php');
$sql = "SELECT * FROM `freetips` WHERE code = 'f1' LIMIT 10;";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
?>
         <section id="section">
            <div class="container" >
            <div class="row">
                 <div class="col-sm-12 col-sm-offset-0 mt-50" >
                   <center>
                    <blockquote style= "color: #307AD1">TODAY FREE TIPS</blockquote>
                </center>
                </div>
                 <div class="col-md-12 col-sm-offset-0 mt10 nopaddingsmall " style="background-color: whitesmoke;">
                     <table class=" table tablestacked table-hover  table-condensed" style="background-color: #F4F6F6; border-color: #ffffff;table-layout: auto; font-size: 12px;" width="100%" class="table table-striped myTableSmall">
                            <thead style="text-align: center!important; color: whitesmoke; background-color: #29384f!important;">
                                        <tr>
                                           <td style="width: 8%;">Time</td>
                                            <td style="width: 8%;">League</td>
                                            <td style="width: 64%;">Match</td>
                                            <td style="width: 9%;">Tip</td>
                                            <td style="width: 11%;">Result</td>
                                        </tr>
                                        </thead>
                           <tbody class="table-hover" style="text-align: center!important; font-size: 13px; color: #00060c; background-color: #eaeef2!important; "> 
                     <?php 
                        if ($resultcheck > 0) {
                            while ($row=mysqli_fetch_assoc($result))
                                 {
                                      ?>
                    <tr style="height: 21px;">
                        <td style="color:#00060c;background: #fff  "><?php echo $row['kickoff'];   ?></td>
                        <td style="font-family: 'Noto Sans JP', sans-serif;"><?php echo $row['league'];   ?></td>
                          <td style="background-color: #ffffff;"><span><?php echo $row['team1'];   ?> <span ><strong style="color: #307AD1;">VS</strong></span> <?php echo $row['team2'];   ?></span></td>
                        <td ><?php echo $row['tip'];   ?></td>
                        <td style="background: #fff"><span><strong style="color: #307AD1"><?php echo $row['result'];   ?></strong></span></td>
                    </tr>
                <?php }} ?>
                </tbody>
                </table>
                
                </div>
            </div>
        </div>

       
             
</div>
    </section>
    <center><div class="pagination" >  
                        <ul class="pagination">
                            <li class="disabled"><a href="#" rel="prev">&laquo;</a></li>
                            <li class="active"><a href="tip.php"> <span>1</span></a></li>
                            <li><a href="tip03.php">2</a></li>
                            <li><a href="tip04.php">3</a></li>
                           <li><a href="tip03.php" rel="next">&raquo;</a></li>
                       </ul>

               </div></center>
		<!-- Two -->
<div>
<br>
<br>


</div>


		<!-- Footer -->
			<footer>
  <div class="container">
                <div class="row">
                    <div class="col-md-4 three_clo">
                      <h4>Contact Information</h4>
                        <p class="con"><i class="fas fa-map-marker"></i> Nairobi, Kenya</p>
                        <p><i class="fas fa-phone "></i> Call Us: <span class="number"> (+254)795393894</span></p>
                        <p><i class="fas fa-envelope "></i> Email Us:<span class="number"><a href="#" class="info" style="text-decoration: none;color: white; font-size: 14px"> info@sportstips.com</a></span></p>
                        <p><strong style="color:#fff ">Working Hours:</strong> 8:00AM - 6:00PM EAT </p>
                    </div>
                    <div class="col-md-4 mid-row">
                        <h4>Follow Us</h4>
                        <p>Feel free to get in touch if you have any questions or suggestions.</p>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 contact">
                         <p style="color: rgba(255,255,255,0.5); font-style: italic;"><span class="system-status"><small><i>Please note that, you can not bet or play on this website. It only offers betting tips and predictions on football matches. We advise you to respect the laws on Betting in your country. SportPesa Betting Tips is neither affiliated with any of the bookies including Sportpesa, Betin, Betway, Justbet, MCheza and Elitebet nor sponsored by any of them</i></small></span></p>
                        
                    </div>
                </div>
                
            </div>
                 <center> <div class="copyright">
                    &copy; 2019 Sportpesa Tips.<br>Website Developed By:<a href="#"> <strong style="color:  #307AD1"> e-Sotech Developers</strong></a>
                </div></center>
        </footer>
<div class="gototop js-top active">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    <style>
            @media (max-width: 978px) {
                .nopaddingsmall {
                    padding: 0px!important;
                }
                .myTableSmall{
                    font-size: 12px!important;
                }
                .newEmbed{
                    height: 380px!important;
                }
                /*.adsAnchor .list-groupUp {*/
                /*margin-top: -20px;*/
                /*}*/
                /*.list-groupUpNone{margin-bottom: 12px;}*/
            }
            .newEmbed{
                width: 100%; padding-top: 20px;
            }
            .list-groupUpNone{margin-bottom: 2px;}
            .blink_text {
                animation: blink 1s infinite;
            }
            @keyframes  blink{
                0% {opacity: 1.0;}
                50% {opacity: 0.0;}
                100% {opacity: 1.0;}
            }
        </style>
		<!-- Scripts -->
			<script src="../assets/js/bootstrap.bundle.min.js"></script>
			<script src="../assets/js/bootstrap.min.js"></script>
			<script src="../assets/js/bootstrap.js"></script>
			<script src="../assets/js/all.js"></script>
            <script src="../assets/js/popper.js"></script>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script src="../assets/js/owl.carousel.min.js"></script>
			<script src="../assets/js/flexslider-min.js"></script>
			
	</body>
</html>