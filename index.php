<?php include('include/db.php');?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   
<?php include('include/script.php');?>
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->    
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    
    <?php include('include/header.php');?>
 
    
    <!--====== SERVICES PART START ======-->
    
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40" id="features">
                    <?php
                    $sql="SELECT * FROM features";
                    $run=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($run)) {
                    echo '
                        <h3>'.$row['title'].'</h3>
                        <div class="line m-auto"></div>
                        <h3 class="title">'.$row['subtitle'].'<span> Comes with everything you need to get started!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            ';
        }
        ?>
           
            <div class="row justify-content-center">
            <?php
                    $sql="SELECT * FROM features_details";
                    $run=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($run)) {
                    echo '
                <div class="col-lg-4 col-md-7 col-sm-8 my_features">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                            <i class="lni-baloon"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h5 class="services-title"><a href="#">'.$row['title'].'</a></h5>
                            <p class="text"> '.$row['description'].'</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                ';
            }
            ?>
                <!-- <div class="col-lg-4 col-md-7 col-sm-8 my_features">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Construction</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8 my_features">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-3.svg" alt="shape">
                            <i class="lni-bolt-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Construction</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8 my_features">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                            <i class="lni-baloon"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h5 class="services-title"><a href="#">Construction</a></h5>
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                        </div>
                    </div> 
                </div> -->
                <!-- <div class="col-lg-4 col-md-7 col-sm-8 my_features">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Construction</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                        </div>
                    </div> 
                    // single services
                </div> -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <?php
                    $sql="SELECT * FROM integrations";
                    $run=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($run)) {
                    echo '
                        <div class="section-title">
                            <h3 class="mb-2" id="integrations">'.$row['title'].'</h3>
                            <div class="line"></div>
                            <h3 class="title">SEE OUR <span> '.$row['subtitle'].'</span></h3>
                        </div> <!-- section title -->
                        <p class="text">'.$row['description'].'</p>
                        <a href="#" class="main-btn">Try it Free</a>
                    </div> <!-- about content -->
                </div>
                ';
            }
            ?>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img style="border-radius: 10px;" src="assets/images/about-1.jpg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="assets/images/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" id="residential">
                    <div class="section-title">
                        <?php          
                        $sql="SELECT * FROM residential";
                        $run=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($run)) {
                        echo '
                            <h3 class="mb-2">'.$row['title'].'</h3>
                            <div class="line"></div>
                            <h3 class="title">Modern design <span>'.$row['subtitle'].'</span></h3>
                        </div> <!-- section title -->
                        <p class="text">'.$row['description'].'</p>
                        <a href="#" class="main-btn">Try it Free</a>
                    </div> <!-- about content -->
                </div>
                                        
                        ';
                    }
                    ?>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img style="border-radius: 10px;" src="assets/images/about-2.jpg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" id="commercial">
                        <div class="section-title">
                        <?php         
                        $sql="SELECT * FROM commercial";
                        $run=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($run)) {
                        echo '
                                <h3 class="mb-2"> '.$row['title'].'</h3>
                                <div class="line"></div>
                                <h3 class="title"><span>Crafted for</span>'.$row['subtitle'].' </h3>
                            </div> <!-- section title -->
                            <p class="text">'.$row['description'].' </p>
                                ';
                            }
                        ?>
                        <a href="#" class="main-btn">Try it Free</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img style="border-radius: 10px;" src="assets/images/about-3.jpg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== VIDEO COUNTER PART START ======-->
    
    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="assets/images/dots.svg" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="assets/images/construction-2.jpg" alt="video">
                            </div>
                           <!--  <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lni-play"></i></a>
                            </div> -->
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                            <?php         
                        $sql="SELECT * FROM security";
                        $run=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($run)) {
                        echo '
                                 <h3 class="mb-2" id="security">'.$row['title'].'</h3>
                                <div class="line"></div>
                                <h3 class="title">Cool facts <span> '.$row['subtitle'].'</span></h3>
                            </div> <!-- section title -->
                            <p class="text">'.$row['description'].'</p>
                        </div> <!-- counter content -->
                         ';
                            }
                        ?>
                        <div class="row no-gutters">
                            <div class="col-4">
                                <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">125</span>K</span>
                                        <p class="text">Buying</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">87</span>K</span>
                                        <p class="text">Active Users</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">4.8</span></span>
                                        <p class="text">User Rating</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== VIDEO COUNTER PART ENDS ======-->
    
    <!--====== BLOG PART START ======-->
    <div id="blog" class="blog-area mt-80">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <?php         
            $sql="SELECT * FROM blogs";
            $run=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($run)) {
            echo '
        <div class="container ">
           
          <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40" id="features">
                        <h3>Our Blogs</h3>
                        <div class="line m-auto"></div>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="#">
                    <img class="blog-img" src="assets/images/blog-1.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">'.$row['comment'].'</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>'.$row['datetime'].'
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="#">'.$row['subtitle'].'</a>
                  </h4>
                  <p>
                  '.$row['description'].'

                  </p>
                </div>
              </div>
              <!-- Start single blog -->
            </div>
           
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="#">
                    <img class="blog-img" src="assets/images/blog-2.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="#">Explicabo magnam quibusdam.</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
              </div>
              <!-- Start single blog  -->
            </div> 
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
             <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="#">
                    <img class="blog-img" src="assets/images/blog-3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="#">Lorem ipsum dolor sit amet</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Right Blog-->
          <!-- </div> -->
        </div>
        ';
    }
    ?>
      </div>
    </div><!-- End Blog Section -->
    <!--====== Blog PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    
    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                <?php         
            $sql="SELECT * FROM product";
            $run=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($run)) {
            echo '
                    <div class="section-title text-center pb-30">
                        <h3 class="mb-2" id="product">'.$row['title'].'</h3>
                        <div class="line m-auto"></div>
                        <h3 class="title"><span></span>'.$row['subtitle'].'</h3>
                    </div> <!-- section title -->
                    ';
            }
            ?>
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="assets/images/team-1.jpg" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php         
                    $sql="SELECT * FROM product_details";
                    $run=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($run)) {
                    echo '
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">'.$row['title'].'</a></h5>
                            <p class="text">'.$row['description'].'</p>
                        </div>
                        ';
                    }
                    ?>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="assets/images/team-5.jpg" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Wolverhampton</a></h5>
                            <p class="text">Earth Sheltered House</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="assets/images/team-3.jpg" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Manchester</a></h5>
                            <p class="text">Detached House</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEAM PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->
    
    <section id="testimonial" class="testimonial-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-40" >
                        <h3 class="mb-2" id="about">About</h3>
                        <div class="line m-auto"></div>
                        <h3 class="title">Leadership<span> Team</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-1.jpg" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Valentin Saportas</h6>
                                <p class="text">CEO, SpaceX</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-2.jpg" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Michael Salichs</h6>
                                <p class="text">President & COO</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-3.jpg" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Andrew Dailey</h6>
                                <p class="text">CTO</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="assets/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="assets/images/author-2.jpg" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Eric Bingen</h6>
                                <p class="text">VP of Client Success</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TESTIMONIAL PART ENDS ======-->
    
    
    <!--====== FOOTER PART START ======-->
    
   
    <?php include('include/footer.php');?>
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   


    <?php include('include/footer_script.php');?>


    <script>
       $(function() {
  'use strict';
  /*Activate default tab contents*/
  var leftPos, newWidth, $magicLine;

  $('.tabs').append("<li id='magic-line'></li>");
  $magicLine = $('#magic-line');
  $magicLine.width($('.active').width())
    .css('left', $('.active a').position().left)
    .data('origLeft', $magicLine.position().left)
    .data('origWidth', $magicLine.width());

  $('.tabs li a').click(function() {
    var $this = $(this);
    $this.parent().addClass('active').siblings().removeClass('active');
    $magicLine
      .data('origLeft', $this.position().left)
      .data('origWidth', $this.parent().width());
    return false;
  });

  /*Magicline hover animation*/
  $('.tabs li').find('a').hover(function() {
    var $thisBar = $(this);
    leftPos = $thisBar.position().left;
    newWidth = $thisBar.parent().width();
    $magicLine.css({
      "left": leftPos,
      "width": newWidth
    });
  }, function() {
    $magicLine.css({
      "left": $magicLine.data('origLeft'),
      "width": $magicLine.data('origWidth')
    });
  });
});

    </script>
    
    
    
</body>

</html>
