<?php 
include "header.php";
include "cv.php";
?>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->
    
    <!-- header -->
    <header class="navbar-fixed-top">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#experience">experience</a></li>
                <li><a href="#projects">projects</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- ./header -->
    
    <!-- home -->
    <div class="section" id="home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4><?php echo $cv["name"];?></h4>
                    <h1><?php echo $cv["experience"][0]; ?> &<br /><?php  echo $cv["experience"][1];?></h1> </div>
            </div>
        </div>
    </div>
    <!-- ./home -->
    
    <!-- about -->
    <div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">
                <h4>01</h4>
                <h1 class="size-50">Know <br /> About me</h1>
                <div class="h-50"></div>
                <p> <?php echo $cv["about_me"];  ?> </p>
                <p></p>
                <div class="h-50"></div> <img src="img/Signature.svg" width="230" alt="" />
                <div class="h-50"></div>
            </div>
            <div class="col-md-6 about-img-div">
                <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>
                <img src="img/about-img.jpg" width="400" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
            </div>
        </div>
    </div>
    <!-- ./about -->
    
    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h4>02</h4>
                <h1 class="size-50">My <br /> Experience</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo  $cv["projects"][0]["from_date"]; ?>-<?php echo  $cv["projects"][0]["to_date"]; ?></p>

                            <h3>Awesome, thanks! GmbH</h3>
                            <h4><?php echo  $cv["projects"][0]["title"];?></h4>
                            <p><strong>Project management with Scrum</strong>
                                <br>Continuous improvement of the agile development process, for example through Grunt, Yeoman, GIT, JIRA and BrowserStack.</p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo  $cv["projects"][0]["from_date2"]; ?>-<?php echo  $cv["projects"][0]["to_date2"]; ?></p>
                            <h3>Freelancer</h3>
                            <h4><?php echo  $cv["projects"][0]["title2"];?></h4>
                            <p>Conception, design and production of digital magazines with InDesign, the Adobe Digital Publishing Suite and HTML5. Co-author of the specialist books "Digital Publishing for Tablets" and "Adobe Digital Publishing Suite" published by dpunkt.verlag.</p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".4">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo  $cv["projects"][0]["from_date3"]; ?>-<?php echo  $cv["projects"][0]["to_date3"]; ?></p>
                            <h3>konplan gmbh</h3>
                            <h4><?php echo  $cv["projects"][0]["title3"];?></h4>
                            <p><strong>Systemarchitektur, Consulting</strong>
                                <br>Conception and modeling of systems and APIs for digital publishing and entitlement according to SOA</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->
    
    <!-- projects -->
    <div class="section" id="projects">
        <div class="container">
            <div class="col-md-12">
                <h4>03</h4>
                <h1 class="size-50">My <br /> Projects</h1> 
            </div>
            <!-- main container -->
            <div class="main-container portfolio-inner clearfix">
                <!-- portfolio div -->
                <div class="portfolio-div">
                    <div class="portfolio">
                        <!-- portfolio_filter -->
                        <div class="categories-grid wow fadeInLeft">
                            <nav class="categories">
                                <ul class="portfolio_filter">
                                    <li><a href="" class="active" data-filter="*">All</a></li>
                                    <li><a href="" data-filter=".photography">Photography</a></li>
                                    <li><a href="" data-filter=".logo">Logo</a></li>
                                    <li><a href="" data-filter=".graphics">Graphics</a></li>
                                    <li><a href="" data-filter=".ads">Advertising</a></li>
                                    <li><a href="" data-filter=".fashion">Fashion</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- portfolio_filter -->
                        
                        <!-- portfolio_container -->
                        <div class="no-padding portfolio_container clearfix" data-aos="fade-up">
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6  fashion logo">
                                <a id="demo01" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/01.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mockups in seconds</span> <em>Fashion / Logo</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 ads graphics">
                                <a id="demo02" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/03.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Floating mockups</span> <em>Ads / Graphics</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 photography">
                                <a id="demo03" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/02.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 fashion ads">
                                <a id="demo04" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/04.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Held by hands</span> <em>Fashion / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo05" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/05.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 photography">
                                <a id="demo06" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/010.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo07" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/06.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo08" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/07.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo09" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/08.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                        </div>
                        <!-- end portfolio_container -->
                    </div>
                    <!-- portfolio -->
                </div>
                <!-- end portfolio div -->
            </div>
            <!-- end main container -->
        </div>
    </div>
    <!-- ./projects -->
    
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h4>04</h4>
                <h1 class="size-50">Contact  Me</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3>Phone Number</h3>
                <p><?php echo  $cv["contact"]["Phone"];  ?></p>
                <h3> Mobile Number</h3>
                <p><?php echo  $cv["contact"]["Phone"];  ?></p>
                <h3>Email</h3>
                <p><?php echo  $cv["contact"]["Email"];  ?></p>
                <h3>Address</h3>
                <p><?php echo  $cv["contact"]["Address"];  ?></p>

                <h3>Social Network</h3>

                <ul class="social">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>
            <div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="contact-form" name="contact" method="post" novalidate="novalidate">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    <input type="email" name="email" class="form-control" placeholder="Your E-mail" />
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                    <textarea name="message" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
                    <button id="submit" type="submit" name="submit" class="btn btn-glance">Send</button>
                    <div id="success">
                        <p class="green textcenter"> Your message was sent successfully! I will be in touch as soon as I can. </p>
                    </div>
                    <div id="error">
                        <p> Something went wrong, try refreshing and submitting the form again. </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./contact -->

    <!--DEMO01-->
    <div id="animatedModal" class="popup-modal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
        <div id="btn-close-modal" class="close-animatedModal close-popup-modal"> <i class="ion-close-round"></i> </div>
        <div class="clearfix"></div>
        <div class="modal-content">
            <div class="container">
                <div class="portfolio-padding">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Geschäfts Eines<br /> Web-Studios</h2>
                        <div class="h-50"></div>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br />
                        <br /> <img src="img/portfolio/02.jpg" alt="" class="img-responsive" />
                        <br />
                        <br />
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br />
                        <br /> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!--  main script  -->
    <script src="js/custom.js"></script>
</body>

</html>