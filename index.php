<?php
include_once("assets/data/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- <title>Dhananjay Patel - Software Developer</title> -->
  <title><?php echo $meta_title; ?></title>
  <!--favicon-->
  <link rel="apple-touch-icon" href="assets/data/letter-d.png">
  <link rel="icon" href="assets/data/letter-d.png">

  <!--pace (page loader) style-->
  <link href="assets/plugins/pace/pace.css" rel="stylesheet">
  <script src="assets/plugins/pace/pace.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">

  <!-- Bootstrap -->
  <link href="assets/plugins/bootstrap-3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- typed style -->
  <link href="assets/plugins/typed/typed.css" rel="stylesheet">
  <!-- popup style-->
  <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- simple Captcha-->
  <link href="assets/plugins/simpleCaptcha/jquery.simpleCaptcha.css" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Themes styles-->
  <link href="assets/theme/css/style.css" rel="stylesheet">
  <!-- black skin-->
  <link href="assets/theme/css/skin-black.css" rel="stylesheet">
</head>


<body data-spy="scroll" data-target=".menu-area" data-offset="200">
  <!--wrapper page-->
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header" id="home">
      <div class="content-table header-content-fixed ">
        <div class="whoim">
          <div class="box-line text-uppercase text-bold">
            Who I Am
          </div>
        </div>
        <div class="v-content">
          <div class="container">
            <h1 class="text-uppercase color-dark name">i’m <?php echo $first_name . " " . $last_name; ?></h1>
            <h4 class="text-uppercase color-dark font-alt job"><span id="typed" class="typed"></span></h4>
          </div>
        </div>
      </div>


      <!-- Main navbar -->
      <div class="menu-area">
        <div class="toogle-bars">
          <a href="#menu-collapse" data-toggle="collapse" class="collapsed"><i class="fa fa-bars ic-open"></i> <i class="fa fa-remove ic-close"></i> MENU</a>
        </div>
        <div class="menu-collapse collapse" id="menu-collapse">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <ul class="breadcrumb main-nav no-space">
                  <li class="link-inpage"><a href="#contact" id="hireme-tab" class="link-inpage"><i class="fa fa-briefcase"></i> Hire Me Now</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="breadcrumb main-nav nav">
                  <li class="active"><a href="#home" class="link-inpage">Home</a></li>
                  <li><a href="#about" class="link-inpage">About</a></li>
                  <li><a href="#experience" class="link-inpage">Experience</a></li>
                  <li><a href="#education" class="link-inpage">Education</a></li>
                  <!-- <li><a href="#blog" class="link-inpage">Blog</a></li> -->
                  <li><a href="#contact" id="contact-tab" class="link-inpage">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul class="breadcrumb main-nav no-space">
                  <li>
                    <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                    <a href="<?php echo $link_linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <!-- <a href="#"><i class="fa fa-google"></i></a> -->
                    <a href="<?php echo $link_github; ?>"><i class="fa fa-github"></i></a>
                  </li>
                  <li>
                    <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                    <a href="<?php echo $link_leetcode; ?>"><i class="fa fa-laptop"></i></a>
                  </li>
                  <li>
                    <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
                    <a href="<?php echo $link_hackerrank; ?>"><i class="fa fa-trophy"></i></a>
                  </li>
                  <!-- <li>
                    <a href="https://github.com/dhananjay09892"><i class="fa fa-github"></i></a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Main navbar -->
    </header><!-- End Main Header -->

    <!-- ABOUT ME -->
    <section id="about" class="block-section">
      <div class="clearfix my-profile">
        <div class="my-pict">
          <div class="overfly">
            <div class="text-botttom">
              <h2 class="text-uppercase color-dark text-bold"><?php echo $first_name . " " . $last_name; ?></h2>
              <h5 class="text-uppercase color-dark font-alt "><?php echo $designation; ?></h5>
            </div>
          </div>
        </div>
        <div class="my-desc">
          <div class="bg-secondary clearfix">
            <div class="inner-text">
              <h3 class=" color-dark no-margin-top">Hello There!</h3>
              <p>
                <?php echo $about; ?>
              </p>

              <!-- <p class="no-margin"></p> -->
            </div>
          </div>
          <div class="bg-dark clearfix">
            <div class="inner-text">
              <p class="no-margin color-light ">
                <!-- <strong class="fix-width-100"><i class="fa fa-calendar margin-right-5"></i> Birthdate</strong> : <?php // echo $birthDate; ?><br /> -->
                <strong class="fix-width-100"><i class="fa fa-phone margin-right-5"></i> Phone</strong> : <?php echo $phone; ?> <br />
                <strong class="fix-width-100"><i class="fa fa-envelope margin-right-5"></i> Email</strong> : <?php echo $email; ?><br />
                <!-- <strong class="fix-width-100"><i class="fa fa-globe margin-right-5"></i> Website</strong> : <?php // echo $website; ?><br /> -->
                <strong class="fix-width-100"><i class="fa fa-location-arrow margin-right-5"></i> Adresse</strong> : <?php echo $address; ?><br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- SERVICES-->
      <div class="container">
        <ul class="services list-unstyled clearfix">
          <?php foreach ($services as $service) { ?>
            <li class="col-sm-4 no-padding">
              <div class="box">
                <div class="ic"><i class="<?php echo $service['icon']; ?>"></i></div>
                <h5 class="text-uppercase color-dark"><?php echo $service['title']; ?></h5>
                <!-- <p><?php //echo $service['description']; 
                        ?></p> -->
              </div>
            </li>
          <?php } ?>
        </ul>
      </div><!-- END SERVICES-->
    </section><!-- END ABOUT ME -->


    <!-- RESUME -->
    <section id="experience" class="block-section">
      <!--EMPLOYEMNT-->
      <div class=" shape-bottom">
        <div class="bg-secondary block-title">
          <div class="container">
            <h2 class="text-uppercase color-dark text-bold no-margin">Experience</h2>
            <div class="title-icon"> <i class="fa fa-briefcase"></i> </div>
          </div>
        </div>
      </div>

      <div class="container-medium ">
        <div class="list-employment">
          <ul class="list-unstyled  clearfix">
            <?php foreach ($experience as $key => $value) { ?>
              <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt"><?php echo $key + 1; ?></div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold"><?php echo $value['title']; ?></h5>
                  <p class="font-alt color-dark"><?php echo $value['company']; ?></p>
                  <p class="font-alt color-dark"><?php echo $value['date']; ?></p>
                  <p><?php echo $value['description']["title"]; ?></p>
                  <div style="margin-left: 20px">
                    <?php foreach ($value['description']['points'] as $point) { ?>
                      <p><span class="color-dark">•</span> <?php echo $point; ?></p>
                    <?php } ?>
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div><!--END EMPLOYEMNT-->
    </section>
    <section id="education" class="block-section">
      <!--EDUCATION-->
      <div class=" shape-bottom">
        <div class="bg-secondary block-title">
          <div class="container">
            <h2 class="text-uppercase color-dark text-bold no-margin">Education</h2>
            <div class="title-icon"> <i class="fa fa-graduation-cap"></i> </div>
          </div>
        </div>
      </div>
      <div class="container-medium">
        <div class="list-education">
          <ul class="list-unstyled  clearfix">
            <?php foreach ($education as $key => $value) { ?>
              <li>
                <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                <div class="number font-alt"><?php echo $key + 1; ?></div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold"><?php echo $value['university']; ?></h5>
                  <p class="font-alt color-dark"><?php echo $value['location']; ?></p>
                  <p class="font-alt color-dark"><?php echo $value['degree']; ?></p>
                  <p>Major : <?php echo $value['major']; ?></p>
                  <p class="font-alt color-dark"><?php echo $value['date']; ?></p>
                  <?php if (isset($value['gpa'])) { ?>
                    <?php if (floatval($value['gpa']) > 3.50) { ?>
                      <p>Current GPA : <b><?php echo $value['gpa']; ?></b></p>
                    <?php } ?>
                  <?php } ?>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div> <!--END EDUCATION-->

      <!--SKILLS-->
      <div class=" shape-bottom">
        <div class="bg-secondary block-title">
          <div class="container">
            <h2 class="text-uppercase color-dark text-bold no-margin">Programming Skills</h2>
            <div class="title-icon"> <i class="fa fa-magic"></i> </div>
          </div>
        </div>
      </div>

      <div class="container-medium">
        <!--SKIL CHART TOP-->
        <!-- Programming Languages: Python, Java, C++, PHP, SQL, REST APIs, HTML, CSS, Git  -->
        <ul class="skill top list-unstyled clearfix">
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box br-right br-bottom">
              <span class="chart" data-percent="80">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase  color-dark">Python</div>
            </div>
          </li>
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box br-right br-bottom">
              <span class="chart" data-percent="75">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase  color-dark">C++</div>
            </div>
          </li>
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box br-right br-bottom">
              <span class="chart" data-percent="90">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase  color-dark">PHP</div>
            </div>
          </li>
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box br-bottom">
              <span class="chart" data-percent="70">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase color-dark">Java</div>
            </div>
          </li>
        </ul><!--END SKIL CHART TOP-->

        <!--SKIL CHART BOTTOM-->
        <ul class="skill bottom list-unstyled clearfix">
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box br-right">
              <span class="chart" data-percent="80">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase  color-dark">SQL</div>
            </div>
          </li>
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box br-right">
              <span class="chart" data-percent="80">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase  color-dark">HTML</div>
            </div>
          </li>
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box br-right">
              <span class="chart" data-percent="70">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase  color-dark">CSS</div>
            </div>
          </li>
          <li class="col-sm-3 col-xs-6 no-padding">
            <div class="box">
              <span class="chart" data-percent="90">
                <span class="percent"></span>
              </span>
              <div class="text-uppercase color-dark">JavaScript</div>
            </div>
          </li>
        </ul><!--END SKIL CHART BOTTOM-->


        <!-- MORE SKILS -->
        <!-- Libraries/Frameworks: JavaScript, CodeIgniter 4 
          Tools / Platforms: Visual Studio, VS Code, PyCharm 
          Databases: MySQL  -->
        <div class="title-border">
          <h5 class="text-uppercase color-dark no-margin text-bold ">Frameworks SKILLS</h5>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled list-progress">
              <li>
                <div class="text-uppercase color-dark title "><span>Wordpress</span> <small>90%</small></div>
                <div class="progress-line">
                  <div class="line" data-holdwidth="80%"></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="list-unstyled list-progress">
              <li>
                <div class="text-uppercase color-dark title">CodeIgniter 4 <small>85%</small></div>
                <div class="progress-line">
                  <div class="line" data-holdwidth="80%"></div>
                </div>
              </li>
            </ul>
          </div>
        </div><!-- END MORE SKILS -->
        <div class="title-border">
          <h5 class="text-uppercase color-dark no-margin text-bold ">IDE SKILLS</h5>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled list-progress">
              <li>
                <div class="text-uppercase color-dark title "><span>VS Code </span> <small>90%</small></div>
                <div class="progress-line">
                  <div class="line" data-holdwidth="80%"></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="list-unstyled list-progress">
              <li>
                <div class="text-uppercase color-dark title">Visual Studio <small>85%</small></div>
                <div class="progress-line">
                  <div class="line" data-holdwidth="80%"></div>
                </div>
              </li>
            </ul>
          </div>
        </div><!-- END MORE SKILS -->
        <div class="white-space-50"></div>
      </div>

      <!-- DOWNLOAD & PRVIEW BTN -->
      <div class="parallax-bg bg1">
        <div class="container">
          <div class="padding30 text-center">
            <a href="<?php echo $resume_download; ?>" class="btn btn-flat-line btn-default light-font " download><i class="fa fa-download"></i> Download CV</a>
            <span class="space-inline-15 hidden-xs"></span>
            <a href="<?php echo $resume_view; ?>" class="btn btn-flat-line btn-default light-font " target="_blank"><i class="fa fa-eye"></i> View CV</a>
          </div>
        </div>
      </div><!-- END DOWNLOAD & PRVIEW BTN -->
    </section><!-- END SERVICES-->

    <!--CONTACT-->
    <section id="contact" class="block-section">
      <!--CONTACT TITLE-->
      <div class=" shape-bottom">
        <div class="bg-secondary block-title">
          <div class="container">
            <h2 class="text-uppercase color-dark text-bold no-margin">Contact</h2>
            <div class="title-icon"> <i class="fa fa-envelope-o"></i> </div>
          </div>
        </div>
      </div><!--END CONTACT TITLE-->

      <div class="contact-area">
        <div class="form-contact-area clearfix">
          <div class="inner-contact clearfix ">
            <!--TABS CONTACT-->
            <ul id="myTab" class="nav nav-tabs flat-nav-tabs" role="tablist">
              <li class="active"><a href="#tab0" role="tab" data-toggle="tab">Contact Me</a></li>
              <!-- <li><a href="#tab1" role="tab" data-toggle="tab">Hire Me</a></li> -->
            </ul>

            <div id="myTabContent" class="tab-content flat-tab-content">
              <div class="tab-pane fade in active" id="tab0">
                <!-- <form method="post" id="contactForm" name="contactForm"> -->
                <form action="php/sending_mail.php" method="post" name="contactForm">
                  <input type="hidden" name="subject" value="Message Contact Form">
                  <div class="form-group">
                    <label>Your Name (*)</label>
                    <input type="text" class="form-control form-flat" name="fullname" required>
                  </div>
                  <div class="form-group">
                    <label>Email (*)</label>
                    <input type="email" class="form-control form-flat" name="email" required>
                  </div>
                  <div class="form-group">
                    <label>Your Message (*)</label>
                    <textarea class="form-control form-flat" name="message" rows="8" required></textarea>
                  </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-flat-solid primary-btn">Send Message</button>
                  </div>
                  <div class="form-group">
                    <div class="preload-submit hidden">
                      <hr /> <i class="fa fa-spinner fa-spin"></i> Please Wait ...
                    </div>
                    <div class="message-submit error hidden"></div>
                  </div>
                </form>
              </div>
              <!--<form method="post" id="hireForm" name="hireForm">-->
              <!-- <div class="tab-pane fade" id="tab1">
                <form action="php/sending_mail.php" method="post" name="contactForm">
                  <input type="hidden" name="subject" value="Message Hire Form">
                  <input type="hidden" name="file" id="file-att" value="">
                  <div class="form-group">
                    <label>Your Name (*)</label>
                    <input type="text" class="form-control form-flat" name="fullname" required>
                  </div>
                  <div class="form-group">
                    <label>Email (*)</label>
                    <input type="email" class="form-control form-flat" name="email" required>
                  </div>
                  <div class="form-group">
                    <label>Short Description About of Project (*)</label>
                    <textarea class="form-control form-flat" name="message" rows="8" required></textarea>
                  </div>

                  <div class="form-group">
                    <label>Attach Your Document <span class="display-block color-dark">(only .pdf allowed , max size 200Kb)</span></label>
                    <div class="clearfix">
                      <input type="file" name="file" id="upload-btn" class="btn btn-flat-solid btn-file btn-xs btn-default  clearfix" value="Choose file">
                      <div id="errormsg" class="clearfix error"></div>
                      <div id="pic-progress-wrap" class="progress-wrap"></div>
                      <div id="picbox" class="attbox color-dark"></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-flat-solid primary-btn">Send Request</button>
                  </div>

                  <div class="form-group">
                    <div class="preload-submit hidden">
                      <hr /> <i class="fa fa-spinner fa-spin"></i> Please Wait ...
                    </div>
                    <div class="message-submit error hidden"></div>
                  </div>
                </form>
              </div> -->
            </div><!--End Tabs-->
          </div>
        </div>

        <!--MAP
        width="600" height="350" style="border:0;height:350px;"-->
        <div class="map-area" id="map-contact">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96086.31196222905!2d-73.35489983244183!3d41.18477010940349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8092a96783719%3A0xdf8bfca7094fcece!2sBridgeport%2C%20CT!5e0!3m2!1sen!2sus!4v1698517300128!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="hidden map-contact-body">
          <div class="map-content">
            <h4 class="no-margin-top font-alt">Iam Here</h4>
            <p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Bridgeport, CT 06604</p>
            <p><i class="fa fa-mobile"></i> <strong>Phone:</strong> + 1 (732)-558-4709</p>
            <p><i class="fa fa-envelope"></i> <strong>Email:</strong> dhananjay09892@gmail.com</p>
          </div>
        </div>
        <!--END MAP-->
      </div>
    </section><!--END CONTACT-->


    <!--FOOTER-->
    <footer class="main-footer">
      <div class="container">
        <div class="folow-me">
          Follow Me On
        </div>
        <ul class="list-inline social-links text-center">
          <!-- // Linkedin | GitHub | LeetCode | HackerRank -->
          <li>
            <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a> -->
            <a href="<?php echo $link_linkedin; ?>" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
          </li>
          <li>
            <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Google"><i class="fa fa-google"></i></a> -->
            <a href="<?php echo $link_github; ?>" data-toggle="tooltip" data-placement="top" title="Github"><i class="fa fa-github"></i></a>
          </li>
          <li>
            <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a> -->
            <a href="<?php echo $link_leetcode; ?>" data-toggle="tooltip" data-placement="top" title="LeetCode"><i class="fa fa-laptop"></i></a>
          </li>
          <li>
            <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a> -->
            <a href="<?php echo $link_hackerrank; ?>" data-toggle="tooltip" data-placement="top" title="HackerRank"><i class="fa fa-trophy"></i></a>
          </li>
          <!-- <li>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Github"><i class="fa fa-github"></i></a>
          </li> -->
        </ul>
        <p class="text-center no-margin">
          <!-- Solid - All Rights Reserved &COPY; 2014 -->
          Dhananjay Patel | All Rights Reserved &COPY; <?php echo date('Y'); ?>
        </p>
        <a href="#home" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
      </div>
    </footer><!--END FOOTER-->
  </div><!--End wrapper page-->

  <!-- generate captcha -->
  <div id="mycaptcha-wrap" class="hidden mycaptcha1">
    <div id="mycaptcha" class="mycaptcha1"></div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/plugins/jquery.js"></script>
  <script src="assets/plugins/bootstrap-3.3.1/js/bootstrap.min.js"></script>

  <!-- maps js -->
  <!--<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>-->
  <!--<script src="assets/plugins/jquery.ui.map.js"></script>-->
  <!-- advanced easing options -->
  <script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
  <!-- parallax bg js -->
  <script src="assets/plugins/jquery.parallax-1.1.3.js"></script>
  <!-- lightbox js -->
  <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- typed animation-->
  <script src="assets/plugins/typed/typed.js"></script>
  <!-- easy chart-->
  <script src="assets/plugins/easypiechart/jquery.easypiechart.min.js"></script>
  <!-- simple Captcha -->
  <script src="assets/plugins/simpleCaptcha/jquery.simpleCaptcha.js"></script>
  <!-- simple Ajax Uploader -->
  <script src="assets/plugins/Simple-Ajax-Uploader/SimpleAjaxUploader.min.js"></script>
  <!-- validate jquery-->
  <script src="assets/plugins/validator/jquery.validate.min.js"></script>

  <!--=====================================================-->
  <!--configuration template-->
  <script src="assets/theme/js/theme.js"></script>
</body>

</html>