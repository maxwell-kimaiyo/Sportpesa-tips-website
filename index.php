 <?php
    include_once('php/connections.php');
    $sql = "SELECT * FROM `freetips` WHERE code = 'f001' LIMIT 10;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
   
         
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" href="images/Soccer-icon.png" type="image/png">
        <title>Sportpesa Tips</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/index.css" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/icomoon.css">
   
    </head>
<style type="text/css">
a:link {
    text-decoration: none;
}
a:visited {
    text-decoration: none;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
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
                <a href="index.php" class="logo" id="top">Sp<img src="images/sportpesa1024.png" width="50" height="50"/>rtpesa Tips</a>
                <nav class="right">
                    <a href="login.php"><button class=" btn-banner btn-sm  button2  animated swing duration- animation-delay-6 "><i class="fa fa-user"></i> LOGIN</button></a>
                </nav>
            </header>
        </div>
    </div>
<script>
function bigImg(x) {
    x.style.background = "whitesmoke";
    x.style.color = "29384f!important";
    }

function normalImg(x) {
    x.style.color:"whitesmoke";
}
</script>
        <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="free/tip.php">FREE TIPS</a></li>
                    <li><a href="premium/premium.php">PREMIUM TIPS</a></li>
                    <li><a href="free/tip.php">JACKPOT TIPS</a></li>
                    <li><a href="results/result1.php">RESULTS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                </ul>
                <ul class="actions vertical ">
                    <li><a href="login.php"><button class="button-fit  btn-banner btn-sm button1"><i class="fa fa-user"></i> LOGIN</button></a></li>
                </ul>
            </nav>

        <!-- Banner -->
            <section id="banner">
                <div class="content">
                    <h1 class="animated fadeInDownBig animation-delay-0 animated-slow mb-8">FREE FOOTBALL PREDICTION WEBSITE</h1>
                    <p class="animated bounceInLeft animation-delay-9"><i> Sportpesa-Prediction is an online service that provides free football tips and predictions for football fans in Kenya.<br> Don't Miss Our Sportpesa Tips & Mega Jackpot Predictions</i></p>
                    <ul class="actions"><ul class="list-unstyled carousel-list"></ul>
                        <li><a href="free/tip.php" class="button scrolly animated rotateIn animation-delay-16 " style="text-decoration: none;"><i class="fa fa-home"></i>Today's Free Tips</a></li>
                        <li> <a href="premium/premium.php" class="button scrolly animated fadeInUpBig animation-delay-16 " style="text-decoration: none;"><i class="fa fa-home"></i>Premium Tips</a></li>
                        <li> <a href="jackpot.php"class="button scrolly animated rotateIn animation-delay-16" style="text-decoration: none;"><i class="fa fa-home"></i>Jackpot Tips</a></li>
                         </ul> 
                </div>
            </section>

        <!-- One -->

         
                                                           
            
        <!-- Two -->

<?php
include_once('php/connections.php');
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
</section>
    <div class="page-wrape home__gridiron">
        <div class="container-fluid">
            <div class="row">
      <div class="col-sm-9 col-sm-offset-2">
         <div class="panel">
                <div class="panel-heading">
                     <center>
                                <h1 class="form-title m-t0" style="color:  #191c1f"> Registration select a plan to continue</h1></center>
                        </div>
                           <div class="panel-body">
                        <table class="table tablestacked subsctbl table-bordere" style="margin-bottom: 5px !important; max-width: 100%;background-color: #F4F6F6; border-color: #ffffff; font-size: 14px;">
                            <thead >
                            <tr>

                                <th style="width: 40%;background-color: #29384f!important;color: whitesmoke">Duration</th>
                                <th style="width: 35%;background-color: #29384f!important;color: whitesmoke">Kenya</th>
                               <th style="width: 30%;background-color: #29384f!important;color: whitesmoke">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="color: #307AD1">1 Days Access + All Jackpots</td>
                                <td> <img alt="MPesa" style="width: 50px;" src="images/mpesa-logo.png"><br>
                                <span style="text-decoration: line-through;">
                                <b>WAS KSH 100</b></span>
                                <br>
                                <b>NOW KSH 50</b>
                                 </td> 
                                <td><a href="plans/plan.php" class="btn ">Register</a></td>

                                </tr>
                                 <tr>
                                    <td style="color: #307AD1">One Week Access + All Jackpots</td>
                                    <td> <img alt="MPesa" style="width: 50px;" src="images/mpesa-logo.png">
                                    <br>
                                    <span style="text-decoration: line-through;">
                                    <b>WAS KSH 350</b>
                                    </span>
                                    <br>
                                    <b>NOW KSH 250</b>
                                    </td> 
                                    <td><a href="plans/plan1.php" class="btn ">Register</a></td>
                                </tr>
                                <tr>
                                    <td style="color: #307AD1">Two Week Access + All Jackpots</td>
                                    <td> <img alt="MPesa" style="width: 50px;" src="images/mpesa-logo.png">
                                    <br>
                                    <span style="text-decoration: line-through;">
                                    <b>WAS KSH 600</b>
                                    </span>
                                    <br>
                                    <b>NOW KSH 500</b>
                                    </td>
                                    <td><a href="plans/plan2.php" class="btn">Register</a></td>
                                </tr>
                                  <tr>
                                    <td style="color: #307AD1">One Month Access + All Jackpots</td>
                                    <td> <img alt="MPesa" style="width: 50px;" src="images/mpesa-logo.png">
                                    <br>
                                    <span style="text-decoration: line-through;">
                                    <b>WAS KSH 1,000</b>
                                    </span>
                                    <br>
                                    <b>NOW KSH 800</b>
                                    </td>
                                    <td><a href="plans/plan3.php" class="btn ">Register</a></td>
                                </tr>
                            
                            </tbody>
                        </table>
                                                                                                                                                                                                                        

                        <div class="panel-footer">
                            <center><p>Already Registered? <a href="login.php" style="color: #307AD1">Login Here</a></p></center>

                        </div>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>
</div>
<div id="fh5co-countdown" class="bcsred" style="padding: 10px 0;background-color: #002b80!important;margin-top: 50px;"><br>
    <div class="row">
        
        <div class="col-md-4 m-t-10 text-center hidden-xs">
            <div class="col-sm-12">
                <h3 class=" m-b-5" style="color: #fff">Join Sportpesa Tips today for the best soccer tips and analysis!</h3>
                  <a href="register.html" class="button btn-default bcblue fcyellow btn-rounded" style="  border: 1px solid #FFF;">Sign Up Now</a>
            </div>
        </div>
        
        <div class="col-md-4 m-t-10 text-center  b-r-5">
            <div class="col-sm-12 bcwhite b-r-5 "style="background: #fff;" >
                <h3 class="fcblue m-b-10 m-t-5"><b>Join our Telegram channel!</b></h3>
                  <a target="_blank" rel="noopener" href="#" class=""><img alt="Telegram" src="images/telegram.png" style="height: 50px;"></a>
            </div>
        </div>

        <div class=" col-md-4 m-t-10 text-center">
            <div class="col-sm-12">
                <div class="col-sm-4 col-xs-4 p-20">
                    <a href="#" class="m-t-10" target="_blank">
                        <img alt="S-Tips Android app - Google Play" src="images/google-play-badge.png" style="width: 100%;">
                    </a>
                </div>
                <div class="col-sm-8 col-xs-8">
                    <h3 style="line-height: 0.8; margin-top: 15px;color: #fff">Free tips &amp; more? <br>
                        <small><i class="text-center fcred" style="color: #fff">Grab our Android app for free tips &amp; more!</i></small>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Three -->
            <section id="three" class="container wrapper ">
                <div class="inner ">
                    <h2 class="text-center" style="color: #307AD1">Want more free tips?</h2>
                    <figure class="text-center">
                        <blockquote>
                          Download our  Android app from the Google Play Store<a href="https://play.google.com/store/apps/details?id=com.afrisoft.s_tips" target="_blank">
                            
                           <img src="images/google-play-badge.png" width="120 " height="70">
                       </a> </blockquote>
                    </figure>
                </div>

                <div class="inner flex flex-3 ">

                    <div>
                        <div class="image fit">
                            <img src="images/mobile2.png" alt="" />
                        </div>


                    </div>
                    <div>                       <div class="image fit">
                            <img src="images/mobile3.png" alt="" />
                        </div>
                       
                    </div>.
                    <div>
                        <div class="image fit">
                            <img src="images/mobile4.png" alt="" />
                        </div>
                      </div>
                </div>
            </section>

<div id="qbootstrap-testimonial" class="qbootstrap-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
                    <h2><span>Benefits of Joining Us</h2>
                    <i>Instant access to daily wining tips, Mid week Sportpesa Jackpot and Sportpesa Mega Jackpot</i>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                       <h4>Daily Tips</h4>
                        <blockquote>
                            <p>1000 plus well analysed and accurate odds per month</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                        <h4>Premium Bet Slip</h4>
                        <blockquote>
                            <p>For Premium Members, We provide bet slips with 2+ sure odds per slip</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                       <h4>Jackports</h4>
                        <blockquote>
                            <p>We provide both Jackpots, mid week and Mega Jackpot</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <br><br><br>
    </div>
        <!-- Footer -->
        <footer>
         <div class="container" style="color: white">
                <div class="row">
                    <div class="col-md-4 three_clo">
                      <h4>Contact Information</h4>
                        <p class="con" style="color: white"><span  style="color: #307AD1"><i class="fas fa-map-marker"></i></span> Nairobi, Kenya</p>
                        <p style="color: white"><span  style="color: #307AD1"><i class="fas fa-phone "></i></span> Call Us: <span class="number"> (+254)795393894</span></p>
                        <p style="color: white"><span  style="color: #307AD1"><i class="fas fa-envelope"></i></span> Email Us:<span class="number"><a href="maxwellkimayo70@gmail.com " class="info" style="text-decoration: none;color: white; font-size: 14px">  info@sportstips.com</a></span></p>
                        <p style="color: white"><strong style="color:#fff ">Working Hours:</strong> 8:00AM - 6:00PM EAT </p>
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
                    &copy; 2019 Sportpesa Predictions.<br>Website Developed By:<a href="#"> <strong style="color:  #307AD1"> e-Sotech Developers</strong></a>
                </div></center>
        </footer>
       <div class="gototop js-top active">
        <a href="#top" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
 <!-- Scripts -->
            <script src="assets/js/bootstrap.bundle.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/bootstrap.js"></script>
            <script src="assets/js/all.js"></script>
            <script src="assets/js/popper.js"></script>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="assets/js/owl.carousel.min.js"></script>
            <script src="assets/js/flexslider-min.js"></script>
        <!--End Scripts -->
    </body>
</html>