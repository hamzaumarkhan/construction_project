<header class="header-area" id="home">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand page-scroll" href="#home">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>  
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>   
                            <nav class="my_nav-cover navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <div id="navbarSupportedContent">
                                  <ul class="tabs">
                                    <li class="page_cover active page-scroll">
                                    <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#about">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#residential">Residential</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#blog">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#commercial">Commercial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#contact">Contact</a>
                                        </li>
                                  </ul>
                              </div>
                            </nav>
                            <a class="navbar-brand page-scroll" href="#home">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a> 
                        </nav>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->


        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
             <div class="container about-area pt-70">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-60 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h3 class="mb-2"></h3>
                                                        </script>
                            <?php

                            $sql="SELECT * FROM menudetails";
                            $run=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($run)) {
                                
                                echo '
                            <h3 class="title hero_sec-title">'.$row['title'].'<span></span></h3>
                          
                        </div> <!-- section title -->
                        <p class="text re"></p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig hero_sec-img" data-wow-duration="1s" data-wow-delay="0.5s">
                    
                        <img src="assets/images/header_hero-1.png" alt="about">
                        ';
                        }
                          ?>
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1 ">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
            <div id="particles-1" class="particles">
            </div>
        </div> <!-- header hero -->
    </header>