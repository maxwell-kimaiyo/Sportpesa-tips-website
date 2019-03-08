
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" href="../images/Soccer-icon.png" type="image/png">
        <title>Sportpesa Tips</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../assets/css/main.css" />
         <link rel="stylesheet" href="css/style.css" />
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
}a:link {
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    background-color: transparent;
    text-decoration: none;
}
a:active {
    background-color: transparent;
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
                <a href="../index.php" class="logo">Sp<img src="../images/sportpesa1024.png" width="50" height="50"/>rtpesa Tips</a>
                <nav class="right">
                    <a href="../login.php"><button class="btn btn-banner btn-sm  button2  animated swing duration- animation-delay-6 "><i class="fa fa-user"></i> LOGIN</button></a>
                </nav>
            </header>
        </div>
    </div>
        <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="../free/tip.php">FREE TIPS</a></li>
                    <li><a href="premium.php">PREMIUM TIPS</a></li>
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
                    <h4 class="headerTitle" style="color: #307AD1 font-size:18px">Premium Tips<br><small style="text-decoration: none;font-size: 18px;color: #29384f"><a href="../index.php">Home</a> <i class="fa fa-chevron-circle-right"></i> Sportpesa Tips</small><br></h4>

                </div>
            </div>
        </div>
    </div>
</section> 
 <section>
        <div class="container-fluid" style="background-color: whitesmoke; text-align: justify;">
            <div class="row">
                <div class="col-sm-12">
    <ins class="adsbygoogle"
         style="display:block; text-align:center;"
         data-ad-layout="in-article"
         data-ad-format="fluid"
         data-ad-client="ca-pub-4413795624364737"
         data-ad-slot="6609703591">
    </ins>

</div>                <div class="col-sm-8 col-sm-offset-2 mt30">
                </div>
                <div class="col-sm-10 col-sm-offset-1 nopaddingsmall">
                    <div class="tabs">
     
                        <input type="radio" id="tab1" name="tab-control">
                        <input type="radio" id="tab2" name="tab-control" checked>
                        <input type="radio" id="tab3" name="tab-control">

                        <ul>
                            <li title="Yesterday">
                                <label for="tab1" role="button">
                                   <span>MULTIBET 1</span>
                                </label>
                            </li>
                            <li title="Today">
                                <label for="tab2" role="button">
                                    <span>MULTIBET 2</span>
                                </label>
                            </li>
                            <li title="Tomorrow">
                                <label for="tab3" role="button">
                                    <span>MULTIBET 3</span>
                                </label>
                            </li>
                        </ul>
            <div class="content nopaddingsmall">

  <?php
    include_once('../php/connections.php');
    $sql1 = "SELECT * FROM `premiumtips` WHERE code = 'm1';";
    $result1 = mysqli_query($conn,$sql1);
    $resultcheck1 = mysqli_num_rows($result1)
?>
                <section>
                    <table style="background-color:#f9f9f9; border-color: #ffffff; font-size: 14px;" width="100%" class="table table-striped myTableSmall">
                                <thead style="text-align: center!important; color: whitesmoke; background-color: #29384f !important;">
                                        <tr>
                                            <td style="width: 8%;">Time</td>
                                            <td style="width: 8%;">League</td>
                                            <td style="width: 64%;">Match</td>
                                            <td style="width: 9%;">Tip</td>
                                            <td style="width: 11%;">Result</td>
                                        </tr>
                                        </thead>
                                <tbody style="text-align: center!important;">
                                  <?php
                                   if ($resultcheck1 > 0) {
                                         while ($row=mysqli_fetch_assoc($result1))
                                         {
                                             ?>
                                            <tr style="height: 21px;">
                                                <td style="background-color: #ffffff;"><span><?php echo $row['kickoff'];   ?></span></td>
                                                <td><span><?php echo $row['league'];   ?></span></td>
                                                <td style="background-color: #ffffff;"><span><?php echo $row['team1'];   ?> <span ><strong style="color: #307AD1;">VS</strong></span> <?php echo $row['team2'];   ?></span></td>
                                                <td><span><?php echo $row['tip'];   ?></span>
                                                </td>
                                                <td style="background-color: #ffffff;"><?php echo $row['results'];   ?></td>
                                            </tr>
                                            <?php }} ?>
                                        </tbody>
                                    </table>
                                </section>
<?php
include_once('../php/connections.php');
$sql2 = "SELECT * FROM `premiumtips` WHERE code = 'm2';";
$result2 = mysqli_query($conn,$sql2);
$resultcheck2 = mysqli_num_rows($result2)
?>
                    <section>
                        <table style="background-color: #f9f9f9; border-color: #ffffff; font-size: 14px;" width="100%" class="table table-striped myTableSmall">
                                        <thead style="text-align: center!important; color: whitesmoke; background-color: #29384f !important;">
                                        
                                        <tr>
                                            <td style="width: 8%;">Time</td>
                                            <td style="width: 8%;">League</td>
                                            <td style="width: 64%;">Match</td>
                                            <td style="width: 9%;">Tip</td>
                                            <td style="width: 11%;">Result</td>
                                        </tr>
                                        </thead>
                                        <tbody style="text-align: center!important;">
                                                 <?php
                                   
                                                 if ($resultcheck2 > 0) {
                                                     while ($row1=mysqli_fetch_assoc($result2))
                                                    {
                                                    ?>
                                             <tr style="height: 21px;">
                                                <td style="background-color: #ffffff;"><span><?php echo $row1['kickoff'];   ?></span></td>
                                                <td><span><?php echo $row1['league'];   ?></span></td>
                                                <td style="background-color: #ffffff;"><span><?php echo $row1['team1'];   ?> <span ><strong style="color: #307AD1;">VS</strong></span> <?php echo $row1['team2'];   ?></span></td>
                                                <td><span><?php echo $row1['tip'];   ?></span></td>
                                                <td style="background-color: #ffffff;"><?php echo $row1['results'];   ?></td>
                                            </tr>
                                               <?php }} ?>
                                       </tbody>
                                    </table>
                                </section>
<?php
include_once('../php/connections.php');
$sql3 = "SELECT * FROM `premiumtips` WHERE code = 'm3' ;";
$result3 = mysqli_query($conn,$sql3);
$resultcheck3 = mysqli_num_rows($result3)
?>
                            <section>
                                <table style="background-color: #f9f9f9; border-color: #ffffff; font-size: 14px;" width="100%" class="table table-striped myTableSmall">
                                        <thead style="text-align: center!important; color: whitesmoke; background-color: #29384f !important;">
                                        
                                        <tr>
                                            <td style="width: 8%;">Time</td>
                                            <td style="width: 8%;">League</td>
                                            <td style="width: 64%;">Match</td>
                                            <td style="width: 9%;">Tip</td>
                                            <td style="width: 11%;">Result</td>
                                        </tr>
                                        </thead>
                                        <tbody style="text-align: center!important;">
                                                 <?php
                                   
                                                 if ($resultcheck3 > 0) {
                                                     while ($row2=mysqli_fetch_assoc($result3))
                                                    {
                                                    ?>
                                             <tr style="height: 21px;">
                                                <td style="background-color: #ffffff;"><span><?php echo $row2['kickoff'];   ?></span></td>
                                                <td><span><?php echo $row2['league'];   ?></span></td>
                                                <td style="background-color: #ffffff;"><span><?php echo $row2['team1'];   ?> <span ><strong style="color: #307AD1;">VS</strong></span> <?php echo $row2['team2'];   ?></span></td>
                                                <td><span><?php echo $row2['tip'];   ?></span></td>
                                                <td style="background-color: #ffffff;"><?php echo $row2['results'];   ?></td>
                                            </tr>
                                               <?php }} ?>
                                       </tbody>
                                    </table>
                                                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Banner -->
    

<div>
    <br>
    <br>
    <br>
</div>
        <!-- Footer -->
        <footer>
         <div class="container" style="color: white">
                <div class="row">
                    <div class="col-md-4 three_clo">
                      <h4>Contact Information</h4>
                        <p class="con" style="color: white"><span  style="color: #307AD1"><i class="fas fa-map-marker"></i></span> Nairobi, Kenya</p>
                        <p style="color: white"><span  style="color: #307AD1"><i class="fas fa-phone "></i></span> Call Us: <span class="number"> (+254)795393894</span></p>
                        <p style="color: white"><span  style="color: #307AD1"><i class="fas fa-envelope"></i></span> Email Us:<span class="number"><a href="# " class="info" style="text-decoration: none;color: white; font-size: 14px">  info@sportstips.com</a></span></p>
                        <p style="color: white"><span style="color:#fff ">Working Hours:</span> 8:00AM - 6:00PM EAT </p>
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
            <div class="gototop js-top">
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

            <!--database coonecions-->

            
    </body>
</html>