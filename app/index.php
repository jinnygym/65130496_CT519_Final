<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Home</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="main_body_content">

    <div class="hero_area">
    <?php 
        include ('navbar.php');
    ?>
      <!-- slider section -->
      <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        Suphitsara Cheevanantaporn <br>
                        <span>
                          65130496
                        </span>
                      </h1>
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/slider-jinny.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        <!-- Suphitsara Cheevanantaporn <br> -->
                        <span>
                          Jinny
                        </span>
                      </h1>
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/slider-jinny.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h3> วิทยาลัยนวัตกรรมด้านเทคโนโลยีและวิศวกรรมศาสตร์ <br>
                      สาขาวิชาวิศวกรรมคอมพิวเตอร์ (ป.โท)
                      </h3>
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/slider-jinny.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <!-- end slider section -->
    </div>


    <!-- offer section -->

    <section class="offer_section layout_padding">
      <div class="container">
        <div class="box">
          <!-- <div class="detail-box">
            <h2>
              CT519
            </h2>
            <h3>
              Cloud Computing
            </h3>
          </div> -->
          <div class="img-box">
              <img src="images/offer-img.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- end offer section -->

    <!-- info section -->
    <?php 
        include('footer.php');
    ?>
    <!-- end info_section -->
  </div>


  <!-- jQery -->
  <script  src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script  src="js/bootstrap.js"></script>
  <!-- slick slider -->
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script  src="js/custom.js"></script>

</body>

</html>