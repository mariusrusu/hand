<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if (file_exists("help_request.data"))
  {
    $file_content = file_get_contents("help_request.data");
    if (strlen($file_content))
    {
      $data = json_decode($file_content, true);
    }
    else
    {
      $data = array();
    }

    $data[] = array('subject' => $_POST['subject'],
      'until' => $_POST['until'],
      'city' => $_POST['city'],
      'address' => $_POST['address'],
      'phone' => $_POST['phone']);

    file_put_contents("help_request.data", json_encode($data));
    $newURL = "index.php";
    header('Location: ' . $newURL);
    die();
  }
}
else
{
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
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">


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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="my-hands.html">My Hands</a></li>
                        <li><a href="profile.html">My Profile</a></li>
                        <li class="donate"><a href="index.php">Donate</a></li>
                    </ul>
                </div>
            </div>
        </div>
  </header>
  <!-- end header -->

  <div class="container">
    <div class="alert alert-warning" style="margin-top: 10px;">Don't share any personal info ( phone number, address, full name). Once your request will be answered, we will send all the useful info for contact.</div>

    <form id="form" class="form-horizontal" action="add.php" method="POST" style="width: 400px">
      <div class="form-group">
        <label for="inputSubject" class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-10">
          <input type="text" name="subject" class="form-control" id="inputSubject" placeholder="">
        </div>
      </div>
      <div class='form-group'>
        <label for="dtp_input1" class="col-sm-2 control-label">Until</label>
        <div class="input-group date form_datetime col-sm-10" style="padding-left: 15px;" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
            <input class="form-control" type="text" value="" readonly>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
        <input type="hidden" name="until" id="dtp_input1" value="" />
      </div>
      <div class="form-group">
        <label for="inputCity" class="col-sm-2 control-label">City</label>
        <div class="col-sm-10">
          <input type="text" name="city" class="form-control" id="inputCity" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <textarea name="address" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a id="button" class="btn btn-green" >Get a Hand</a>
        </div>
      </div>
    </form>
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
<script src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>


<script type="text/javascript">
$('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 1,
        showMeridian: 1
    });

var form = document.getElementById("form");

document.getElementById("button").addEventListener("click", function () {
  form.submit();
});
</script>

</body>
</html>

<?php } ?>