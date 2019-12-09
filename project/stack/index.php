<?php
include('db.php');
  //feature set
  $sql = "SELECT * FROM feature ORDER BY id DESC LIMIT 3";
  $fres = $con->query($sql);
  $sql = "SELECT * FROM service order by id desc limit 6";
  $ser = $con->query($sql);
  $sql = "select * from team order by id desc limit 4";
  $tem = $con->query($sql);
  $sql = "select * from plan order by id desc limit 3";
  $pln = $con->query($sql);
  $sql = "select * from category";
  $cat = $con->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Stack - Bootstrap 4 Business Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#feature">
                  Feature
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Team
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">
                  Pricing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">
                  Works
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                  Testimonial
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">
                  Blog
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp">We Discover, Design & Build Digital <br> Presence of Businesses</h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="#services" class="btn btn-common">Explore</a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="assets/img/hero-1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">We are helping to grow <br> your business.</h2>
                <p class="mb-4">A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.</p>
                <a href="#" class="btn btn-common">More About Us</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">
  <?php          
  if($fres->num_rows>0){
    $fedwd = 300;
    while($fres1=$fres->fetch_assoc()){

        $feature1 = '<div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="'.$fedwd.'ms">';
        $fedwd += 200;
        $feature1 .= '<div class="icon">';
        $feature1 .= '<i class="'.$fres1['icon'].'"></i>';     
        $feature1 .= '</div>';
        $feature1 .= '<div class="feature-content">';
        $feature1 .= '<h3>'.$fres1['title'].'</h3>';
        $feature1 .= '<p>'.$fres1['description'].'</p>';
        $feature1 .= '</div>';
        $feature1 .= '</div>';
        echo $feature1;
      }  
  }
  ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">

<?php
while($ser1=$ser->fetch_assoc()){
$s1 =' <!-- Services item -->';
$s1 .='           <div class="col-md-6 col-lg-4 col-xs-12">';
$s1 .='             <div class="services-item wow fadeInRight" data-wow-delay="0.3s">';
$s1 .='               <div class="icon">';
$s1 .='                 <i class="'.$ser1['icon'].'"></i>';
$s1 .='               </div>';
$s1 .='               <div class="services-content">';
$s1 .='                 <h3><a href="#">'.$ser1['title'].'</a></h3>';
$s1 .='                 <p>'.$ser1['description'].'</p>';
$s1 .='               </div>';
$s1 .='             </div>';
$s1 .='           </div>';
echo $s1;
}
/*
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-briefcase"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Digital Marketing</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Web Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-mobile"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">IOS & Android</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">UI/UX Design</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Branding & Identity</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>*/
          ?>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Start Video promo Section -->
    <section class="video-promo section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
              <a href="https://www.youtube.com/watch?v=yP6kdOZHids" class="video-popup"><i class="lni-film-play"></i></a>
              <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Video</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Meet our team</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">
<?php
while($team=$tem->fetch_assoc()){

$tm =  '        <div class="col-sm-6 col-md-6 col-lg-3">';
$tm .= '           <!-- Team Item Starts -->';
$tm .= '           <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">';
$tm .= '             <div class="team-img">';
$tm .= '               <img class="img-fluid" src="admin/'.$team['efile'].'" alt="">';
$tm .= '               <div class="team-overlay">';
$tm .= '                 <div class="overlay-social-icon text-center">';
$tm .= '                   <ul class="social-icons">';
$tm .= '                     <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>';
$tm .= '                     <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>';
$tm .= '                     <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>';
$tm .= '                   </ul>';
$tm .= '                 </div>';
$tm .= '               </div>';
$tm .= '             </div>';
$tm .= '             <div class="info-text">';
$tm .= '               <h3><a href="#">'.$team['name'].'</a></h3>';
$tm .= '               <p>'.$team['role'].'</p>';
$tm .= '             </div>';
$tm .= '           </div>';
$tm .= '           <!-- Team Item Ends -->';
$tm .= '         </div>';
echo $tm;
}
/*          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.6s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-02.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Eric Peterson</a></h3>
                <p>Product Designer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.9s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-03.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Durwin Babb</a></h3>
                <p>Lead Designer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="1.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-04.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Marijn Otte</a></h3>
                <p>Front-end Developer</p>
              </div>
            </div>*/
?>
            <!-- Team Item Ends -->
          </div>
          
        </div>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Counter Section Start -->
    <section id="counter" class="section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row">
              <!-- Start counter -->
              <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                  <div class="icon-o"><i class="lni-users"></i></div>
                  <div class="fact-count">
                    <h3><span class="counter">23576</span></h3>
                    <p>Users</p>
                  </div>
                </div>
              </div>
              <!-- End counter -->
              <!-- Start counter -->
              <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box wow fadeInUp" data-wow-delay="0.4s">
                  <div class="icon-o"><i class="lni-emoji-smile"></i></div>
                  <div class="fact-count">
                    <h3><span class="counter">2124</span></h3>
                    <p>Positive Reviews</p>
                  </div>
                </div>
              </div>
              <!-- End counter -->
              <!-- Start counter -->
              <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box wow fadeInUp" data-wow-delay="0.6s">
                  <div class="icon-o"><i class="lni-download"></i></div>
                  <div class="fact-count">
                    <h3><span class="counter">54598</span></h3>
                    <p>Downloads</p>
                  </div>
                </div>
              </div>
              <!-- End counter -->
              <!-- Start counter -->
              <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box wow fadeInUp" data-wow-delay="0.8s">
                  <div class="icon-o"><i class="lni-thumbs-up"></i></div>
                  <div class="fact-count">
                    <h3><span class="counter">3212</span></h3>
                    <p>Followers</p>
                  </div>
                </div>
              </div>
              <!-- End counter -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

    <!-- Pricing section Start --> 
    <section id="pricing" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Best Pricing</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">
<?php

while($plan=$pln->fetch_assoc()){
  $des = explode(",",$plan['description']);
$p1 = '          <div class="col-lg-4 col-md-6 col-xs-12">';
$p1 .= '            <div class="table wow fadeInLeft" data-wow-delay="1.2s">';
$p1 .= '              <div class="title">';
$p1 .= '                <h3>'.$plan['title'].'</h3>';
$p1 .= '              </div>';
$p1 .= '              <div class="pricing-header">';
$p1 .= '                <p class="price-value">'.$plan['price'].'<span>/ Month</span></p>';
$p1 .= '              </div>';
$p1 .= '              <ul class="description">';

               for($i=0;$i<count($des);$i++){
$p1 .= '                <li>'.$des[$i].'</li>';
              }
$p1 .= '              </ul>';
$p1 .= '              <button class="btn btn-common">Get It</button>';
$p1 .= '            </div> ';
$p1 .= '          </div>';

echo $p1;          
}
/*  
          <div class="col-lg-4 col-md-6 col-xs-12 active">
            <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
              <div class="title">
                <h3>Profesional</h3>
              </div>
               <div class="pricing-header">
                  <p class="price-value">$49.90<span>/ Month</span></p>
               </div>
              <ul class="description">
                <li>Business Analyzing</li>
                <li>24/7 Tech Suport</li>
                <li>Operational Excellence</li>
                <li>Business Idea Ready</li>
                <li>2 Database</li>
                <li>Customer Support</li>
              </ul>
              <button class="btn btn-common">Get It</button>
           </div> 
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInRight" data-wow-delay="1.2s">
              <div class="title">
                <h3>Expert</h3>
              </div>
               <div class="pricing-header">
                  <p class="price-value">$89.90<span>/ Month</span></p>
               </div>
              <ul class="description">
                <li>Business Analyzing</li>
                <li>24/7 Tech Suport</li>
                <li>Operational Excellence</li>
                <li>Business Idea Ready</li>
                <li>2 Database</li>
                <li>Customer Support</li>
              </ul>
              <button class="btn btn-common">Get It</button>
            </div> 
          </div>
        </div>
      </div>
    </section>
*/
?>
    <!-- Pricing Table Section End -->

    <div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="assets/img/about/img-1.jpg" alt="" >
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <h2 class="section-title">Our <span>Skill</span></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, aut aspernatur modi minima alias provident obcaecati! Minima odio porro nemo magnam dolore minus asperiores veniam dolorum est!
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nesciunt possimus quaerat ipsam, corporis architecto aspernatur non aut! Dolorum consectetur placeat excepturi, perspiciatis sunt.
              </p>
            </div>
            <div class="skills-section">
              <!-- Progress Bar Start -->
              <div class="progress-box">
                <h5>Strategy &amp; Analysis <span class="pull-right">88%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="87" style="width: 87%;"></div>
                </div>
              </div>
              <div class="progress-box">
                <h5>Eeconomic growth <span class="pull-right">95%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="96" style="width: 96%;"></div>
                </div>
              </div>
              <div class="progress-box">
                <h5>Achieves goals <span class="pull-right">70%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="52" style="width: 52%;"></div>
                </div>
              </div>
              <!-- End Progressbar -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Portfolio Section -->
    <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Works</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
<?php
echo            '<div class="controls text-center">';
$f=0;
while($ct=$cat->fetch_assoc()){
  if($f==0){
    $c="active";
    $d="";
  }
  else{
    $c="";
    $d=".";
  }
echo'            <a class="filter '.$c.' btn btn-common btn-effect" data-filter="'.$d.$ct['category'].'">';
echo               ucfirst($ct['category']);
echo'              </a>';
$f=1;

}
/*              <a class="filter btn btn-common btn-effect" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".print">
                Print 
              </a>
*/
echo            '</div>';
?>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          
          
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/portfolio/img-1.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="assets/img/portfolio/img-1.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Creative Design</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          
          
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/portfolio/img-2.jpg" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="assets/img/portfolio/img-2.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Retina Ready</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/portfolio/img-3.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="assets/img/portfolio/img-3.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Responsive</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/portfolio/img-4.jpg" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="assets/img/portfolio/img-4.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Well Documented</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/portfolio/img-5.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="assets/img/portfolio/img-5.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">Customer Support</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/portfolio/img-6.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="assets/img/portfolio/img-6.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">User Friendly</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
  
    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Grenchen Pearce</a></h2>
                    <h3><a href="#">Boston Brothers co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img2.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Domeni GEsson</a></h2>
                    <h3><a href="#">Awesome Technology co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img3.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Dommini Albert</a></h2>
                    <h3><a href="#">Nesnal Design co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img4.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Fernanda Anaya</a></h2>
                    <h3><a href="#">Developer</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img5.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Jason A.</a></h2>
                    <h3><a href="#">Designer</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  

    <!-- Blog Section -->
    <section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.php">
                  <img src="assets/img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.php">Suspendisse dictum non velit</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.php" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item-img">
                <a href="single-post.php">
                  <img src="assets/img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.php">Remarkably Did Increasing</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.php" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.php">
                  <img src="assets/img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                  <a href="single-post.php">Changing the topic scope</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.php" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Clients Section Start -->
    <div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">NOTABLE CLIENTS</h2>
          <p>Over the last 20 years, we have helped and guided organisations to achieve outstanding results</p>
        </div>
        <div class="row text-align-">
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="assets/img/clients/img1.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="assets/img/clients/img2.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="assets/img/clients/img3.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
            <div class="client-item-wrapper">
              <img class="img-fluid"  src="assets/img/clients/img4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Clients Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1>We're a friendly bunch..</h1>
                <p>We create projects for companies and startups with a passion for quality</p>
              </div>
              <h2>Contact Us</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>ADDRESS: 28 Green Tower, New York City, USA</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="#">Email:  contact@stuck.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="#">Phone:  +84 846 250 592</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
    
    <!-- Copyright Section Start -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-logo">
              <img src="assets/img/logo.png" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">     
            <div class="social-icon text-center">
              <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
              <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
              <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
              <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-xs-12">
            <p class="float-right">Designed and Developed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
          </div> 
        </div>
      </div>
    </div>
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>  
    <script src="assets/js/nivo-lightbox.js"></script>     
    <script src="assets/js/jquery.magnific-popup.min.js"></script>     
    <script src="assets/js/waypoints.min.js"></script>   
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
      
  </body>
</html>
