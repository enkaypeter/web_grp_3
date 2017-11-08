<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pay Online - Group 3</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Slider
        ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'> -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Latest compiled and minified CSS -->
    
    <style>
        .menu li{
            display: inline;
            float: left;
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div id="section" class="text-center section">
    <div class="container">
        <div class="space"></div>
        <div class="section-title  fadeInDown">
            <h2><strong>Payment </strong> Successful</h2>
            <hr>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title-alt"><img width="60" src="img/pointer.svg"/>Thank you for your purchase.</h4>
                </div>
                <div class="panel-body">
                    <h4>Your Transaction Reference is <?php echo $_GET['ref']; ?> </h4>
                    <p><a href="home.php" class="btn btn-primary">Home</a></p>
                </div>
            </div>
            <div class="space"></div>
            <div class="space"></div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p>Designed by <a href="#">Group 3</a> © 2017 </p>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<!--<script type="text/javascript" src="js/owl.carousel.js"></script>
-->
<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/stickyfill.min.js"></script>
<script type="text/javascript">
    var elements = document.querySelectorAll('.sticky');
    Stickyfill.add(elements);
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".disc").click(function (event) {
            alert("Currently unavailable!");
            event.preventDefault();
        });
    });
</script>
</body>
</html>