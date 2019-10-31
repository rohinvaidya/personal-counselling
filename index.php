<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--META TAGS-->
        <meta charset="utf-8">
        
        <meta name="description" content="Building modern responsive website using HTML5, CSS3 and Bootstrap!">
        <meta name="keywords" content="HTML5, CSS3, jQuery, Responsive, Website, Bootstrap">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <!--END OF META TAGS-->

        <!--Style CSS-->
        <style>
        div.Bottom1
        {
            position: absolute;
            top: 100%;
            left:40%;
            color: black;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
        }
        div.Bottom2
        {
            position: absolute;
            top: 100%;
            left:30%;
            color: black;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
        }
        div.Bottom3
        {
            position: absolute;
            top: 100%;
            left:35%;
            color: black;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
        }
        div.Bottom4
        {
            position: absolute;
            top: 100%;
            left:20%;
            color: black;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
        }
        
        </style>
        <!--Title goes here-->
        <title>Convocare</title>
        
        <!--Resource Linking--> 
        
        <!--FAVICON-->
        <link rel="shortcut icon" href="images/w.png">
        
        <!--FONT-->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
        
        
        <!--ANIMATE-->
        <link rel="stylesheet" href="assets/project/plugin/animate/animate.css">
        
        <!--FONTAWESOME-->
        <link rel="stylesheet" href="assets/project/plugin/font-awesome-4.7.0/css/font-awesome.css">
        
        <!--MAGNIFIC-POPUP-->
        <link rel="stylesheet" href="assets/project/plugin/magnific-popup/magnific-popup.css">
        
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="assets/project/plugin/bootstrap/css/bootstrap.min.css">
        
        
        <!--OWL_CAROUSEL-->
        <link rel="stylesheet" href="assets/project/plugin/owl-carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/project/plugin/owl-carousel/assets/owl.theme.blue.css">
        
        <!--OUR CSS-->
        <link rel="stylesheet" href="assets/project/css/style.css">
        <link rel="stylesheet" href="assets/project/css/responsive.css">
        <link rel="stylesheet" href="assets/project/css/custom.css">
        
    </head>
    
    <body data-spy="scroll" data-target="wg-menu" data-offset="70">
       
        <!--HEADER SECTION-->       
        <header>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="wg-nav-wrapper">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wg-menu">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#home" class="navbar-brand"><img style="height:100%;width:100%;" src="assets/project/images/Convocare.png" alt="Convocare"></img></a>
                        </div>
                        <div class="collapse navbar-collapse" id="wg-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="#home" class="smooth-scroll">Home</a></li>
                                <li><a href="#services" class="smooth-scroll">Services</a></li>
                                <li><a href="#about" class="smooth-scroll">About</a></li>
                                <li><a href="#work" class="smooth-scroll">Work</a></li>
                                <li><a href="#team" class="smooth-scroll">Team</a></li>
                                <li><a href="#testimonial" class="smooth-scroll">Testimonial</a></li>
                                <li><a href="#pricing" class="smooth-scroll">Pricing</a></li>
                                <li><a href="#contact" class="smooth-scroll">Contact</a></li>
                                <?php
                                if (!isset($_SESSION['id'])){
                                    echo 
                                    '<li><a href="pages/login.php">Login/Register</a></li>';
                                }
                                else{
                                    if($_SESSION['role'] == 'admin')
                                    {
                                        echo 
                                        '<li><a href="pages/admin/admin.php">Dashboard</a></li>';
                                    }
                                    else if($_SESSION['role'] == 'counsellor')
                                    {
                                        echo 
                                        '<li><a href="pages/counsellor/counsellor.php">Dashboard</a></li>';
                                    }
                                    else if($_SESSION['role'] == 'client') 
                                    {
                                        echo 
                                        '<li><a href="pages/user/user-index.php">Dashboard</a></li>';
                                    }
                                    echo 
                                    '<li><a href="pages/logout.php">Logout</a></li>';
                                }
                                ?>
                             </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--END OF HEADER SECTION-->       
       
        <!--HOME SECTION-->
        <section id="home">
            <div class="home-cover animated fadeIn bg-parallax">
                <div class="home-content-box">
                    <div class="home-content-box-inner">
                        <div class="home-heading wow animated zoomIn">
                            <h2>A Touch Of Care</h2>
                        </div><!--.home-heading-->
                        <div class="home-btn wow animated zoomIn">
                            <a href="#work" class="btn btn-lg btn-general btn-black smooth-scroll" role="button" title="View Our Work">View Our Work</a>
                        </div>
                    </div><!--.home-content-box-inner-->
                </div><!--.home-content-box-->
            </div><!--home-cover-->
        </section>
        <!--END OF HOME-->
        
        
        <!--SERVICES SECTION-->
        <section id="services">
            <div class="content-box">
                <div class="content-title wow animated fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <h3>Services</h3>
                    <div class="content-title-underline"></div>
                </div>
                <div class="container">
                    <div class="row wow animated fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <div class="service-item-icon">
                                    <i class="fa fa-book fa-3x" ></i>
                                </div>
                                <div class="service-item-title">
                                    <h3>Personality Test</h3>
                                </div>
                                <div class="service-item-desc">
                                    <p>Personality tests help measure how well you will perform at the organization based on your interpersonal skills,the motivation and inspiration that drive you,the role that you can excel in due to your behavioral traits.</p>
                                </div>
                            </div><!--.service-item-->
                        </div><!--.col-md-4-->

                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <div class="service-item-icon">
                                    <i class="fa fa-user-md fa-3x" ></i>
                                </div>
                                <div class="service-item-title">
                                    <h3>Personal Counsellors</h3>
                                </div>
                                <div class="service-item-desc">
                                    <p>Increase self-confidence,improve relationships,achieve educational goals,and make good decisions for emotional,intellectual,physical well-being</p>
                                </div>
                            </div><!--.service-item-->
                        </div><!--.col-md-4-->

                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <div class="service-item-icon">
                                    <i class="fa fa-comments-o fa-3x" ></i>
                                </div>
                                <div class="service-item-title">
                                    <h3>24x7 Interaction</h3>
                                </div>
                                <div class="service-item-desc">
                                    <p>Having a problem in life?You can Get in touch with our Counselors and seek advice any time</p>
                                </div>
                            </div><!--.service-item-->
                        </div><!--.col-md-4-->

                    </div>
                </div>
            </div>
        </section>
        <!--END OF SERVICES SECTION-->
        
        <!--ABOUT SECTION-->
        <section id="about">
            <!--RIGHT HAND IMAGE PART-->
            <div class="about-bg-diagonal bg-parallax"></div>
            
            <!--LEFT HAND ABOUT CONTENT-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content-box">
                            <div class="content-box-outer">
                                <div class="content-box-inner">
                                    <div class="content-title wow animated fadeInDown" data-wow-duration="0.5s" data-wow-delay=".2s">
                                        <h3>About Convocare</h3>
                                        <div class="content-title-underline"></div>
                                    </div>
                                     <div class="about-desc wow animated fadeInDown" data-wow-duration="0.5s" data-wow-delay=".2s">
                                         <p>At Convocare,we provide an online counselling and career guidance platform designed to help students decide on their future path. It anonymously connects you with the right expert consisting of counselors, career guides and people with rich experience, who understand you and guide you through individual sessions.</p>
                                     </div><!--desc.-->
                                     <div class="about-btn">
                                         <a href="#work" title="Our Work" class="btn btn-lg btn-general btn-blue wow animated fadeInUp smooth-scroll" data-wow-duration="0.5s" data-wow-delay=".2s">Our Work</a>
                                     </div>   
                                </div><!--innner box-->
                            </div><!--outer box-->
                        </div><!--.content-box-->
                    </div><!--col-md-4-->
                </div><!--row-->
            </div><!--container-->
        </section>
        <!--END OF ABOUT SECTION-->
        
        <!--WORK SECTION-->
        <section id="work">
            <div class="content-box">
                <div class="content-title wow animated fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <h3>Our Work</h3>
                    <div class="content-title-underline"></div>
                </div>
                <div class="container-fluid">
                    <div class="row no-gutters wow animate fadeInUp">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="img-wrapper">
                                <a href="assets/project/images/work/one.jpg"><img src="assets/project/images/work/one.jpg" class="img-responsive" alt="">
                                 </a>
                            </div>
                        </div><!--work1-->
                        
                         <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="img-wrapper">
                                <a href="assets/project/images/work/three.jpg"><img src="assets/project/images/work/three.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div><!--work2-->
                        
                         <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="img-wrapper">
                                <a href="assets/project/images/work/four.jpg"><img src="assets/project/images/work/four.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div><!--work3-->
                    </div>
                </div><!--.container-->
            </div>
        </section>
        <!--END OF WORK SECTION-->
        
        <!--Team Section-->
            <section id="team">
                <div class="content-box">
                    <div class="content-title wow animated fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                        <h3>Our team</h3>
                        <div class="content-title-underline"></div>
                    </div><!--Content-title-->
                    <div class="container">
                        <div class="row wow animated fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="col-md-12">
                                <div class="team-members owl-carousel owl-theme">
                                    
                                    <div class="team-member">
                                        <img src="assets/project/images/team/rohin.jpg" alt="Team Member 1" class="img-responsive">
                                        <div class="team-member-info">
                                            <h4 class="team-member-name">Rohin Vaidya</h4>
                                            <h4 class="team-member-designation">Web Developer</h4>
                                            <ul class="social-list">
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!--team-member-info-->
                                    </div><!--team meamber-->
                                    
                                    <div class="team-member">
                                        <img src="assets/project/images/team/shalva.jpeg" alt="Team Member 2" class="img-responsive">
                                        <div class="team-member-info">
                                            <h4 class="team-member-name">Shalva Thakurdesai</h4>
                                            <h4 class="team-member-designation">CEO</h4>
                                            <ul class="social-list">
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!--team-member-info-->
                                    </div><!--team meamber-->
                                    
                                    <div class="team-member">
                                        <img src="assets/project/images/team/shubham.jpeg" alt="Team Member 3" class="img-responsive">
                                        <div class="team-member-info">
                                            <h4 class="team-member-name">Shubham Vira</h4>
                                            <h4 class="team-member-designation">Clinical Psychologist</h4>
                                            <ul class="social-list">
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!--team-member-info-->
                                    </div><!--team meamber-->                              
                                    
                                </div><!--team meambers-->
                            </div>
                        </div><!--row-->
                    </div><!--.container-->
                </div><!--.content-->
            </section>
        <!--END OF TEAM SECTION-->
        
        <!--TESTIMONIAL Section-->
        <section id="testimonial">
            <div class="testimonial-cover bg-parallax">
                <div class="content-box">
                    <div class="content-title wow animated fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                        <h3 class="content-title-white">What Our Customers Say</h3>
                        <div class="content-title-underline"></div>
                    </div><!--Content-title-->
                    <div class="container">
                        <div class="row wow animated fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="customers-testimonials text-center owl-carousel owl-theme">

                                <div class="testimonial">
                                    <img src="assets/project/images/client/user-1.png" alt="testimonial" class="img-responsive img-circle">
                                    <blockquote class="text-center">
                                        <p>I was struggling with some issues and the platform was so helpful!
                                            The counsellors were patient and understanding!
                                            Thank you Convovare!</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong>Nitesh Prasad</strong>
                                            <span>ICSE Student</span>
                                        </p>
                                    </div>
                                </div><!--testimonial-->

                                <div class="testimonial">
                                    <img src="assets/project/images/client/user-2.png" alt="testimonial" class="img-responsive img-circle">
                                    <blockquote class="text-center">
                                        <p>Convocare helped guide me in the right direction when I was unsure about my future.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong>Shivam Yadav</strong>
                                            <span>HSC Student</span>
                                        </p>
                                    </div>
                                </div><!--testimonial-->

                                <div class="testimonial">
                                    <img src="assets/project/images/client/user-3.png" alt="testimonial" class="img-responsive img-circle">
                                    <blockquote class="text-center">
                                        <p>Convocare has proven to be a reliable partner in helping me in most stressful of my times.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong>Gouri Kanitkar</strong>
                                            <span>SSC Student</span>
                                        </p>
                                    </div>
                                </div><!--testimonial-->
                            </div><!--customers-testimonials-->
                        </div>
                    </div><!--.container-->
                </div><!--.content-->
            </div><!--testimonial-cover-->
        </section>
        <!--END OF TESTIMONIAL SECTION-->
        
        <!--PRICING TABLE SECTION-->
        <section id="pricing">
            <div class="content-box">
                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h3>OUr pricing</h3>
                    <div class="content-title-underline"></div>
                </div><!--Content-title-->
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4 animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="pricing-box">
                                <h4 class="pricing-title">Aptitude Test</h4>
                                <h3 class="pricing-value">FREE</h3>
                                <ul class="pricing-spec">
                                    <li><p>Online test</p></li>
                                    <li><p>Career Guidance</p></li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="pages/login.php" role="button" class="btn btn-lg btn-general btn-blue">PURCHASE</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="pricing-box pricing-box-lg">
                                <h4 class="pricing-title">Stress Test</h4>
                                <h3 class="pricing-value">FREE</h3>
                                <ul class="pricing-spec">
                                    <li><p>Online Test</p></li>
                                    <li>
                                        <p>Online counselling</p>
                                    </li>
                                    <li>
                                        <p>24x7 Customer Care</p>
                                    </li>
                                    <li>
                                        <p>Live Sessions</p>
                                    </li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="pages/login.php" role="button" class="btn btn-lg btn-general btn-white">PURCHASE</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="pricing-box">
                                <h4 class="pricing-title">IQ Test</h4>
                                <h3 class="pricing-value">FREE</h3>
                                <ul class="pricing-spec">
                                    <li><p></p></li>
                                    <li>
                                        <p>Online Test</p>
                                    </li>
                                    <li>
                                        <p>IQ Certification</p>
                                    </li>
                                    <li>
                                        <p>Appropriate Curriculum</p>
                                    </li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="pages/login.php" role="button" class="btn btn-lg btn-general btn-blue">PURCHASE</a>
                                </div>
                            </div>
                        </div>
                        
                    </div><!--row-->
                </div><!--.container-->
            </div><!--.content-->
        </section>
        <!--END OF PRICING TABLE SECTION-->

        
        <!--FOOTER-->
        <footer id="contact">
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-left">
                                <h3>CONVOCARE</h3>
                                <P>We at <b>Convocare </b>believe that Councilling is not just our work but, a <b>Social Responsibility </b>to help our fellow brothers live better</P>
                                <div class="contact-info">
                                    <address>
                                        <strong>Headquaters:</strong> 
                                        <p>313, Evergreen CHS. <br>Airoli Sector 15, <br>New Bombay, <br>Mumbai - 55.</p>
                                    </address>
                                
                                    <div class="phone-fax-email">
                                        <p>
                                            <strong>Phone:</strong> <span>(719)-778-8804</span>
                                            <br>
                                            <strong>Fax:</strong> <span>(719)-778-8804</span>
                                            <br>
                                            <strong>Email:</strong> <span>info@Concocare.in</span>
                                            <br>
                                        </p>
                                    </div><!--phone-fax-email-->
                                </div><!--.contact-info-->
                                
                                <ul class="social-list">
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-icon"><a href="" class="icon-white"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            </div><!--contact-left-->
                        </div>
                        
                        <div class="col-md-6">
                            <div class="contact-right">
                                <h3>Contact Us</h3>
                                <form action="">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                    <textarea rows="3" class="form-control" placeholder="Your Message..."></textarea>
                                    <div class="send-btn">
                                        <a href="#" class="btn btn-lg btn-general btn-white" role="button">Send</a>
                                    </div>
                                </form>
                            </div><!--contact-right-->
                        </div>
                    </div><!--row-->
                </div><!--container-->
            </div><!--contact-->
            
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyrights">
                                <p>Copyright &copy; 2018 All rights reserved by Concocare Consultancy Ltd.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="footer-menu hidden-xs">
                                <ul>
                                    <li><a href="#home">Home</a>|</li>
                                    <li><a href="#services">Services</a>|</li>
                                    <li><a href="#about">About</a>|</li>
                                    <li><a href="#work">Work</a>|</li>
                                    <li><a href="#team">Team</a>|</li>
                                    <li><a href="#testimonial">Testimonial</a>|</li>
                                    <li><a href="#pricing">Pricing</a>|</li>
                                    <li><a href="#stats">Stats</a></li>
                                </ul>
                            </div><!--footer-menu-->
                        </div>
                    </div>
                </div><!--container-->
            </div><!--footer-bottom-->
            <a href="#home" class="btn btn-sm btn-general btn-blue btn-back-to-top smooth-scroll" role="button" title="home"><i class="fa fa-angle-up"></i></a>
        </footer>
        <!--FOOTER-->
        
        
        <!--SCRIPTS-->
        <!--jQUERY SCRIPT-->
        <script src="assets/project/js/jquery-3.1.1.min.js"></script>
        
        <script src="assets/project/plugin/easing/easing.min.js"></script>
        
        <!--BOOTSTRAP SCRIPT-->
        <script src="assets/project/plugin/bootstrap/js/bootstrap.min.js"></script>
        
        <!--MAGNIFIC POPUP SCRIPT-->
        <script src="assets/project/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
        
        <!--WOW SCRIPT-->
        <script src="assets/project/plugin/wow/wow.min.js"></script>
        
        <!--OWL-CAROUSEL SCRIPT-->
        <script src="assets/project/plugin/owl-carousel/owl.carousel.min.js"></script>
        
        <!--waypoint SCRIPT-->
        <script src="assets/project/plugin/waypoint/jquery.waypoints.min.js"></script>
        
        <!--OWL-CAROUSEL SCRIPT-->
        <script src="assets/project/plugin/counter-up/jquery.counterup.js"></script>
        
        <!--OUR SCRIPT-->
        <script src="assets/project/js/script.js"></script>
    </body>
</html>