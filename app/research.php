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

  <title>Research</title>


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

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">
      <!-- header section strats -->
      <?php 
        include ('navbar.php');
    ?>
      <!-- end header section -->
    </div>


    <!-- client section -->

    <section class="client_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <div class="img-box sub_img-box">
              <img src="images/client-jinny2.jpg" alt="">
              <img src="images/client-jinny1.jpg" alt="">
              <img src="images/client-jinny3.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 px-0">
            <div class="client_container">
              <div class="heading_container">
                <h2>
                Research
                </h2>
              </div>
              <div id="customCarousel2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client-jinny.jpg" alt="">
                      </div>
                      <div class="detail-box">
                        <h2>
                        Motion and Expose Detection for Rhythmic Gymnastics <br>
                        วิจัยประเภท : สารนิพนธ์

                        </h2>
                        <p>
                        ในบทความนี้ ผู้วิจัยได้ศึกษาการประเมินการเคลื่อนไหวและตรวจจับท่าทางของชนิดกีฬา "ยิมนาสติกลีลา" (Rhythmic Gymnastic) 
                        เป็นกีฬาที่สวยงามมีการผสมผสานองค์ประกอบต่าง ๆ ของการเต้นรำ ความยืดหยุ่น ความแข็งแรง ความคล่องแคล่ว และการประสานงานเข้าด้วยกัน 
                        ผ่านการใช้ OpenCV ในการวิเคราะห์และตรวจจับการเคลื่อนไหว  ช่วยให้ผู้ที่ชื่นชอบการออกกำลังกาย 
                        และสนใจทางด้านกีฬายิมนาสติกลีลานั้นมีความสุขด้านร่างกายและจิตใจที่ดีขึ้น สามารถปรับปรุงเทคนิคการออกกำลังกายและป้องกันการบาดเจ็บขณะเล่นกีฬาชนิดนี้ได้ 
	                      <br><br> งานวิจัยนี้ได้นำเสนอวิธีการประเมินท่าทางที่ถูกต้องโดยใช้ MediaPipe และ OpenCV เพื่อสกัดเฟรมแต่ละเฟรมจากวิดีโอ 
                        ซึ่งจะถูกนำไปใช้ในการวิเคราะห์ประเมินคุณภาพและความถูกต้องของท่าทางที่ตรวจพบต่อเกณฑ์ที่กำหนดไว้ ท่าทางยิมนาสติกต่าง ๆ 
                        เช่น เตะขา กระโดด การทรงตัว เป็นต้น

                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client-detection1.jpg" alt="">
                      </div>
                      <div class="detail-box">
                      <h2>
                        Motion and Expose Detection for Rhythmic Gymnastics <br>
                      </h2>
                        <p>
                        Related Studies and Tool : <br>
                          1. Python or Pycharm <br>
                          2. OpenCV (Open Source Computer Vision Library) <br>
                          3. MediaPipe <br>
                          4. Detection Posture <br><br>

                        งานวิจัยที่เกี่ยวข้อง - Yoga Pose Detection and Validation <br>
                        ระบบการตรวจสอบ Yoga Pose ที่นำเสนอดำเนินการในภาษาการเขียนโปรแกรม Python ด้วย OpenCV 4.5.1 และ Lightweight OpenPose ซึ่งระบบสามารถแก้ไขผู้ฝึกสำหรับชุดท่าที่กำหนด มีการทดสอบกับผู้ใช้ที่แตกต่างกันสำหรับแต่ละท่าที่กำหนด และระบบสามารถแนะนำผู้ฝึกสำหรับข้อผิดพลาดได้สำเร็จ วิเคราะห์ท่าทางของผู้ฝึกโดยแยกจุดสำคัญของร่างกาย 10 จุด
                        โยคะเป็นกิจกรรมที่ช่วยในเรื่องการออกกำลังกายทางกายภาพ มีประโยชน์มากสำหรับสุขภาพ ถ้าปฏิบัติได้อย่างถูกต้อง แต่หากโยคะถูกปฏิบัติอย่างไม่ถูกต้อง อาจมีผลกระทบที่เสียต่อสุขภาพได้ ดังนั้น การมีครูผู้สอนในการฝึกโยคะมีความสำคัญ เพื่อให้ได้ท่าโยคะที่ถูกต้องและสามารถนำไปใช้งานได้
                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client-detection2.png" alt="">
                      </div>
                      <div class="detail-box">
                      <h2>
                        Motion and Expose Detection for Rhythmic Gymnastics <br>
                      </h2>
                        <p>
                        Human Pose Estimation <br>
                        การประเมินท่าโยคะของมนุษย์ (Human pose estimation หรือ HPE) เป็นเทคโนโลยีที่ใช้เทคนิคคอมพิวเตอร์วิสัยทัศน์ในการตรวจจับและวิเคราะห์ท่าทางของมนุษย์ 
                        โดยรูปแบบการจำลองร่างกายของมนุษย์เป็นส่วนสำคัญในการทำ HPE มีสามรูปแบบที่ใช้กันมากที่สุดในการจำลองร่างกายของมนุษย์ <br><br>

                        a) โมเดลที่ใช้โครงสร้างของโครงกระดูก (Skeleton-based Model) <br>
                        โมเดลแบบนี้ประกอบด้วยชุดของจุดเชื่อมต่อที่เรียกว่า keypoint เช่น ไหล่ ข้อศอก ข้อมือ เข่า เป็นต้น <br>
                        b) โมเดลที่ใช้โครงสร้างของเส้นขอบ (Contour-based Model) <br>
                        โมเดลแบบนี้ประกอบด้วยเส้นขอบและความกว้างรูปร่างของร่างกาย ในโมเดลนี้ ส่วนต่างๆ ของร่างกายถูกแสดงในรูปของขอบเขต <br>
                        c) โมเดลที่ใช้โครงสร้างของปริมาตร (Volume-based Model) <br>
                        โมเดลแบบนี้ประกอบด้วยรูปร่างและท่าทางของมนุษย์ในมิติ 3 มิติ และถูกแสดงในรูปของเส้นตารางและรูปร่างที่สร้างขึ้นจากการสแกนในมิติ 3 มิติ <br>
                        </p>
                        
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel_btn-box">
                  <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end client section -->

    <!-- info section -->
    <?php 
        include('footer.php');
    ?>
    <!-- end info_section -->

  </div>

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="col-md-11 col-lg-8 mx-auto">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>

</html>