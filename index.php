
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/ico/favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

        <title>Sai Seva Trust</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">

        <!-- color schema -->
        <link href="css/color-4.css" rel="stylesheet" id="layoutstyle">

        <!-- google font for title -->
        <link href="css/google-font.css" rel="stylesheet" id="googlefont">

        <!-- fontawesome -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/3DGridEffect/css/component.css" rel="stylesheet" />
        <script src="lib/3DGridEffect/js/modernizr.custom.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="themes_panel.css">
    </head>

    <body>

        <div class="mask">
            <div id="intro-loader">
            </div>
        </div>

        <div id="slides">
            <div class="slides-container">
                <img src="images/slider/slider1.jpg" alt="slider1">
                <img src="images/slider/slider2.jpg" alt="slider2">
                <img src="images/slider/slider3.jpg" alt="slider3">
                <img src="images/slider/slider4.jpg" alt="slider4">
                <img src="images/slider/slider5.jpg" alt="slider5">
            </div>
        </div>

        <!-- intro -->
        <div id="top" class="top">
            <div class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center animate_left">
                            <div class="logo" style="margin-top: 10%;"><img src="images/logo.jpg" alt="logo"></div>

                        </div>
                        <div class="col-md-9 slider_title">
                            <div class="row">
                                <div class="col-md-12 heading animate_top"><a href="#sv-oh">Swamy Vivekananda<span> Orphanage Home</span></a></div>
                                <div class="col-md-12 heading animate_top"><a href="#ss-ds">Rama Krishna Paramahamsa<span> Old Age Home</span></a></div>
                                <div class="col-md-12 heading animate_top"><a href="#rkp-oah">Sai Spandana<span> Digi School E/M</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fixed navbar -->
        <div id="nav-wrapper" >
            <div id="nav" class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand subtitle" href="#">SAI SEVA TRUST</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#top">Home</a></li>
                            <li><a href="#about-us">About Us</a></li>
                            <li><a href="#events">Events</a></li>
                            <li><a href="#donors">Donors</a></li>
<!--                            <li><a href="#stories">Our Success</a></li>	-->
                            <li><a href="#help">Help</a></li>
                            <li><a href="#gallery">Life at Sai Seva Trust</a></li>
                            <li><a href="#contact">Contact us</a></li>
                            <li class="scl"><a href="https://www.facebook.com/ssstrust"><i class="fa fa-facebook"></i></a></li>
                            <li class="scl"><a href="https://plus.google.com/108687370223114193514/posts"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>


        <div id="about-us" class="container">
            <div class="row">
                <div class="col-md-10 welcome_txt text-center animate_bottom">
                    <div class="row">
                    <div class="col-md-12 text-center heading dark animate_top">
                        ABOUT <span class="fff">US</span>
                    </div>
                    </div>
                    <?php echo "My first PHP script!"; ?>
                    <p>Sai Seva Trust was started in 2002 by a group of 12 like minded people with a goal to provide home to children who are living in dire poverty and comfortable living to people in their old age . </p>
                    <p>Main objectives of the trust are </p>
                    <ul>
                        <li>Extend helping hand to orphans and create confidence among them to live elegantly and morally.</li>
                        <li>Impart education to children to make them potential and meaningful civilians.</li>
                        <li>Look after the elderly people with love, affection, reverence and comforts.</li>
                    </ul>
                    <p>Units established to serve the objectives</p>
                    <ul>
                        <li>Swamy Vivekananda Orphanage Home</li>
                        <li>Rama Krishna Paramahamsa Old Age Home</li>
                        <li>Sai Spandana Digi School E/M</li>
                    </ul>
                    <p>Currently, we have <span>94</span> orphan children, <span>30</span> old age inmates and <span>146</span> students in the school.</p>

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        
        <?php 
          require 'generic.php';
          $dt = getDonorsAndEvents();
        ?>
        <div id="events" class="container text-center">
            <div class="row">
                <div class="col-md-12 welcome_txt text-center animate_bottom">
                  <div class="row">
                      <div class="col-md-12 text-center heading dark animate_top" style="opacity: 1; top: 0px;">
                        EVEN <span class="fff">TS</span>
                      </div>
                      <div id="wrapper">
                          <div id="columns">
                              <?php foreach ($dt['events'] as $evt) { ?>
                                <div class="pin">
                                  <img src="images/uploads/<?= $evt["Img"]?>" />
                                  <p><?= $evt["Desc"]?></p>
                                </div>
                              <?php } ?>
                          </div>
                      </div>
                  </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        </div>    

        
        <div id="donors" class="container">
            <div class="row">
                <div class="col-md-12 welcome_txt text-center animate_bottom">
                    <div class="row">
                        <div class="col-md-12 text-center heading dark animate_top" style="opacity: 1; top: 0px;">
                            DONO <span class="fff">RS</span>
                        </div>
                        <div id="wrapper">
                          <div id="columns">
                              <?php foreach ($dt['donors'] as $dnr) { ?>
                                <div class="pin">
                                    <img src="images/uploads/<?= $dnr["Img"] ?>" />
                                    <p><?= $dnr['Desc'] ?></p>
                                    <p>Email: <?= $dnr["Email"] ?></p>
                                </div>
                              <?php } ?>
                          </div>
                      </div>
                    </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <!--this empty div is important dont remove it.-->
        <div id="units"></div>
        <div class="education" id="education">

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12 heading dark animate_top">Establishments under <span>Sai Seva Trust</span></div>
                </div>

                <div class="row">
                    <div class="col-md-4 b21" id="sv-oh">
                        <i class="fa fa-home"></i>
                        <h3 class="animate_top">Swamy Vivekananda Orphanage Home</h3>
                        <p class="animate_bottom">The orphanage home helps children to live elegantly and morally.</p>
                        <ul>
                            <li class="animate_bottom">Provide food & shelter.  </li>
                            <li class="animate_bottom">Provide medical facilities.</li>
                            <li class="animate_bottom">Accommodate children with homely atmosphere.</li>
                        </ul>
                    </div>
                    <div class="col-md-4 b22" id="ss-ds">
                        <i class="fa fa-book"></i>
                        <h3 class="animate_top">Sai Spandana Digi School E/M</h3>
                        <p class="animate_bottom">The School provides education to make them potential and meaningful civilians.</p>
                        <ul>
                            <li class="animate_bottom white-font">Provide corporate and traditional education.</li>
                            <li class="animate_bottom white-font">Provides social and vocational courses.</li>
                            <li class="animate_bottom white-font">Care for upliftment of differently abled.</li>
                        </ul>
                    </div>
                    <div class="col-md-4 b23" id="rkp-oah">
                        <i class="fa fa-home"></i>
                        <h3 class="animate_top">Rama Krishna Paramahamsa Old Age Home</h3>
                        <p class="animate_bottom">The old age home provide peace living conditions in their later age.</p>
                        <ul>
                            <li class="animate_bottom">Provide hygienic food & rooms with attach bathrooms.  </li>
                            <li class="animate_bottom">Free nurse/midwife services & free doctor consultation.</li>
                            <li class="animate_bottom">Yoga and meditation center facility.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <!-- How can you help -->
        <div class="how_can_you_help_bg parallax" id="help">
            <div class="how_can_you_help">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading animate_top">How can you<span class="brd"> help?</span></div>
                    </div>


                    <ul class="nav nav-tabs responsive second text-center" id="myTab">
                        <li class="active"><a href="#tab1">Donate</a></li>
                        <li><a href="#tab2">Become a volunteer</a></li>
<!--                        <li><a href="#tab3">Take responsibility of one student</a></li>				  -->
                    </ul>

                    <div class="tab-content responsive">

                        <div class="tab-pane active in fade" id="tab1">
                            <div class="row">
                                <div class="col-md-6 animate_left">
                                    <img id="dnt-img" src="images/donate.jpg" alt="img" />
                                </div>
                                <div class="col-md-6 left_con animate_right">
                                    <h3><i class="fa fa-money"></i> Donate for a child</h3>
                                    <h3><i class="fa fa-money"></i> Donate for an event</h3>
                                    <h3><i class="fa fa-money"></i> Donate for new developments</h3>
                                    <h3><i class="fa fa-money"></i> Donate for any other maintenance</h3>
                                    <div class="col-md-12 col-sm-offset-1">
                                        <h3> Bank Details: </h3>
                                        <h4> Sai Anadha Seva Trust, </h4>
                                        <h4> SBH BANK A/C NO - 62258640106</h4>
                                        <h4> IFSC CODE - SBHY0020716</h4>
                                    </div>
                                 </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-md-6 animate_top">
                                    <h3><i class="fa fa-heart-o"></i>Teaching/ Mentoring</h3>
                                    <h3><i class="fa fa-heart"></i>Conducting career development programs </h3>
                                    <h3><i class="fa fa-heart-o"></i>Service to old age people</h3>
                                    <h3><i class="fa fa-heart"></i>Identifying donors</h3>
                                </div>
                                <div class="col-md-6 animate_top">
                                    <h3><i class="fa fa-heart-o"></i>Any other service in consultation with trust.</h3>
                                </div>
                            </div>
                        </div>


                    </div>	
                </div>
            </div>
        </div>

        <div class="team">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center heading dark animate_top">
                        Who are behind <span>Sai Seva Trust</span>
                    </div>
                </div>
                <div class="row t1">
                    <div class ="col-md-12" >
                        <div class="col-md-4"></div>
                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org1.jpg" style = "height:132px; width:100px; " alt="img">
                        </div>
                        <div class="col-md-6 animate_right" style="margin-left:32px;">
                            <h4>Ch. Rangaiah</h4>
                            <p>Founder, Chairman</p>
                            <p>Ph: +91 9963406831</p>
                        </div>
                    </div>
                </div>
                <div class="row t1">
                    <div class ="col-md-12" >
                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org2.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>Md. Nazeeruddin</h4>
                            <p>Managing Trustee</p>
                        </div>

                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org3.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>M. Srinivasa Rao</h4>
                            <p>Treasurer</p>
                        </div>
                    </div>
                </div>
                <div class="row t1">
                    <div class ="col-md-12" >
                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org4.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>R. Kalidas</h4>
                            <p>Secretary</p>
                        </div>

                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org5.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>G. Bhagavanthaiah</h4>
                            <p>Accounts/Audit</p>
                        </div>
                    </div>
                </div>
                <div class="row t1">
                    <div class ="col-md-12" >
                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org6.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>K. Gopikrishna</h4>
                            <p>NRI Representation</p>
                        </div>

                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org13.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>D. Laxmikanth Rao</h4>
                            <p>Public Relation</p>
                        </div>
                    </div>
                </div>
                <div class="row t1">
                    <div class ="col-md-12" >
                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org7.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>T. Lingamurthy</h4>
                            <p>Trustee</p>
                        </div>

                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org8.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>Ch. Krishna mohan</h4>
                            <p>Trustee</p>
                        </div>
                    </div>
                </div>
                <div class="row t1">
                    <div class ="col-md-12" >
                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org9.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>P. Sunil kumar</h4>
                            <p>Trustee</p>
                        </div>

                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org10.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>M. Sampath rao</h4>
                            <p>Trustee</p>
                        </div>
                    </div>
                </div>
                <div class="row t1">
                    <div class ="col-md-12" >
                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org11.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>M. Prabhakar reddy</h4>
                            <p>Construction</p>
                        </div>

                        <div class="col-md-1 animate_left">
                            <img src="images/organizers/org12.jpg" alt="img">
                        </div>
                        <div class="col-md-5 animate_right">
                            <h4>K. Venkateswara rao</h4>
                            <p>Trustee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image gallery -->
        <div class="gallery-bg parallax" id="gallery">
            <div class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading dark animate_top">Life at <span>Sai Seva Trust</span></div>
                    </div>
                </div>
                <section class="grid3d vertical" id="grid3d">
                    <div class="grid-wrap">
                        <div class="grid">
                            <figure><img src="images/gallery/1.jpg" alt="img01" /></figure>
                            <figure><img src="images/gallery/2.jpg" alt="img02" /></figure>
                            <figure><img src="images/gallery/3.jpg" alt="img03" /></figure>
                            <figure><img src="images/gallery/4.jpg" alt="img04" /></figure>
                            <figure><img src="images/gallery/5.jpg" alt="img05" /></figure>
                            <figure><img src="images/gallery/6.jpg" alt="img06" /></figure>
                            <figure><img src="images/gallery/7.jpg" alt="img07" /></figure>
                            <figure><img src="images/gallery/8.jpg" alt="img08" class="hlf-img"/>
                            <img src="images/gallery/8-1.jpg" class="hlf-img" alt="img081"/></figure>
                            <figure><img src="images/gallery/9.jpg" alt="img09"/></figure>
                            <figure><img src="images/gallery/10.jpg" alt="img10"/></figure>
                            <figure><img src="images/gallery/11.jpg" alt="img11"/></figure>
                            <figure><img src="images/gallery/12.jpg" alt="img12"/></figure>
                            <figure><img src="images/gallery/13.jpg" alt="img13"/></figure>
                            <figure><img src="images/gallery/14.jpg" alt="img14"/></figure>
                            <figure><img src="images/gallery/15.jpg" alt="img15"/></figure>
                            <figure><img src="images/gallery/16.jpg" alt="img16"/></figure>
                            <figure><img src="images/gallery/17.jpg" alt="img17"/></figure>
                            <figure><img src="images/gallery/18.jpg" alt="img18"/></figure>
                        </div>
                    </div><!-- /grid-wrap -->
                    <div class="content">
                    <div>
                        <div class="dummy-img"><img src="images/gallery/1.jpg" alt="img01"/></div>
                        <p class="dummy-text"></p>
                    </div>
                    <div><div class="dummy-img"><img src="images/gallery/2.jpg" alt="img02"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/3.jpg" alt="img03"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/4.jpg" alt="img04"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/5.jpg" alt="img05"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/6.jpg" alt="img06"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/7.jpg" alt="img07"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/8.jpg" alt="img08"/>
                    <img style = "position: absolute;height: 400px;width: 232px;" src="images/gallery/8-1.jpg" alt="img08"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/9.jpg" alt="img09"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/10.jpg" alt="img10"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/11.jpg" alt="img11"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/12.jpg" alt="img12"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/13.jpg" alt="img13"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/14.jpg" alt="img14"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/15.jpg" alt="img15"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/16.jpg" alt="img16"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/17.jpg" alt="img17"/></div></div>
                    <div><div class="dummy-img"><img src="images/gallery/18.jpg" alt="img18"/></div></div>


                    <span class="loading"></span>

                    <span class="close-content fa fa-times"></span>
                    </div>
                </section>
            </div>
        </div>

        <!-- Contact with us -->
        <div class="contact-bg parallax" id="contact">
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading animate_top"><span class="brd">Contact </span>with us</div>
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>

                        <div class="col-md-5 contact_info animate_right">

                            <h5>Address</h5>
                            <p>H.No. 2-226/5, Swamy Vivekananda Nagar, Saptagiri Colony, Rd No. 2, Waddepally, Hanmakonda, Warangal- 506371 <br>Telangana, India</p>

                            <h5>Phone</h5>
                            <p>+91 9949189357<br>
                               +91 9642500475</p>

                            <h5>Email</h5>
                            <p>saisevatrust@gmail.com</p>
                        </div>
                        <div class="col-md-1"></div>


                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12"><p></p></div>
                </div>
            </div>
        </div>



        <script src="js/jquery.js"></script>

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!--<script src="js/inviewport.jquery.js"></script>-->

        <script src="js/jquery.animateNumbers.js"></script>

        <script src="js/responsive-tabs.js"></script>

        <script src="lib/jQuery-One-Page-Nav/jquery.scrollTo.js"></script>
        <script src="lib/jQuery-One-Page-Nav/jquery.nav.js"></script>
        <script src="lib/jquery-parallax/scripts/jquery.parallax-1.1.3.js"></script>

        <script src="lib/superslides/dist/jquery.superslides.js"></script>
        <script src="lib/jquery.appear/jquery.appear.js"></script>
        <script src="lib/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script src="lib/3DGridEffect/js/classie.js"></script>
        <script src="lib/3DGridEffect/js/helper.js"></script>
        <script src="lib/3DGridEffect/js/grid3d.js"></script>

        <script src="lib/magnific-popup/dist/jquery.magnific-popup.js"></script>

        <script src="js/custom.js"></script>

    </body>

</html>
