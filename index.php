<?php
$data = array();
if (file_exists("help_request.data"))
{
  $file_content = file_get_contents("help_request.data");
  if (strlen($file_content))
  {
    $data = json_decode($file_content, true);
    krsort($data);
  }
}
$user_data = array(
  array(
    "name" => "Popescu Vasile",
    "img" => "img/Happy_Old_Man.jpg",
    "rating" => "rating-4stars.png"
  ),
  array(
    "name" => "Bryan",
    "img" => "img/01.jpg",
    "rating" => "rating-5stars.png"
  ),
  array(
    "name" => "Jon Doe",
    "img" => "img/02.jpg",
    "rating" => "rating-5stars.png"
  ),
  array(
    "name" => "Ionel",
    "img" => "img/03.jpg",
    "rating" => "rating-2.5stars.png"
  ),
  array(
    "name" => "Popescu Vasile",
    "img" => "img/Happy_Old_Man.jpg",
    "rating" => "rating-4stars.png"
  ),
  array(
    "name" => "Bryan",
    "img" => "img/01.jpg",
    "rating" => "rating-5stars.png"
  ),
  array(
    "name" => "Jon Doe",
    "img" => "img/02.jpg",
    "rating" => "rating-5stars.png"
  )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HandOut Touch. Help. Share</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
<div id="wrapper">
  <!-- start header -->
  <header>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span>
                    <img src="img/handoutlogox.png" width="150px" /></a>
        </div>
        <div class="navbar-collapse collapse ">

          <ul class="nav navbar-nav" style="padding-top: 20px;">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="my-hands.html">My Hands</a></li>
            <li><a href="profile.html">My Profile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->
  <section id="featured">
    <!-- start slider -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Slider -->
          <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/3.png" alt="" />
              </li>
            </ul>
          </div>
          <!-- end slider -->
        </div>
      </div>
    </div>
  </section>
  <section class="callaction" style="padding: 0px !important;">
    <div class="container">
      <div class="row" style="margin-bottom: 15px; margin-top: 15px;">
        <div class="col-lg-12">
          <div class="big-cta">
            <div class="box-bottom col-lg-22" style="min-width: 200px;">
              <a href="add.php">Find A Hand</a>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="container">
      <h5>These peoples need a hand.</h5>
      <?php foreach($data as $key=> $val) {?>
      <div class="row box-gray">
        <div class="col-lg-2">
          <img src="<?php echo $user_data[$key]['img'] ?>"/>
          <img src="img/<?php echo $user_data[$key]['rating'] ?>" />
        </div>
        <div class="col-lg-8">
          <h5>Name: <?php echo $user_data[$key]['name'] ?></h5>
          <p>
            Subject: <?php echo $val['subject']; ?>
          </p>
          <p>
            Until: <?php echo $val['until']; ?>
          </p>
          <p>
            Location: <?php echo $val['city']; ?>
          </p>

        </div>
        <div class="box-bottom col-lg-2 align-middle">
          <a href="#" onclick="$('#thankyou').modal('show');">Count me in</a>
        </div>
      </div>
      <?php } ?>

      <!-- divider -->
      <!-- end divider -->
    </div>
  </section>
  <div id="thankyou" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3>Thanks!</h3>
        </div>
        <div class="modal-body">
          <p><strong>Thank you for helping out, keep tuned you will be contacted soon.</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class = "btn btn-default btn-green" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="text-align: center">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>

          </ul>
          &copy;2015 HandOut
        </div>
      </div>
    </div>

  </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>