<?php
    if(isset($_POST['continue'])){
        // require("includes/functions.php");
        // $connect = connect();        
        $connect = mysqli_connect("localhost","root","Cecilia2002#","PayOnline");
        $acc_type = $_POST['acc_type'];
        $account_number = $_POST['account_number'];
        $payer_name = $_POST['payer_name'];
        $payer_email = $_POST['payer_email'];
        $payer_phone = $_POST['payer_phone'];
        $amount_paid = $_POST['amount_paid'];        
        // var_dump($connect);
        $ref = "T".mt_rand(100,999).mt_rand(000,999);
        $status = 'pending';
        $card_no = $_POST['card_no'];
        $card_name = $_POST['card_name'];
        $card_pin = $_POST['card_pin'];
        if(strlen($card_pin) <= 4 && strlen($card_no) <= 16){
            $payment_type = "ATM Card";
            $payment_status = "Paid";
            $query = "INSERT INTO transactions VALUES (NULL,'$acc_type','$account_number','$payer_email','$payer_name','$payer_phone','$amount_paid','$ref',Now(),'$status','$payment_type','$payment_status',Now())";
            $sql_res = mysqli_query($connect,$query) or die(mysqli_error($connect));
            // $count = mysqli_affected_rows($connect);
            // var_dump($count);
            // die();
            header("location: thankyou.php?ref=".$ref);
        }else{
            echo "Card pin ish";
        }

    }
?>
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

    
    <style>
        .menu li{
            display: inline;
            float: left;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" style="font-size: 18px;color: white" href="home.php"><strong>Group 3</strong></a></div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a style="color: skyblue" href="home.php" class="page-scroll"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Contact Section -->
<div id="section" class="text-center section">
    <div class="container">
        <div class="space"></div>
        
        <div class="section-title  fadeInDown">
            <h2><strong><font color="purple">Make Payment</font> </strong></h2>
            <hr>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title-alt">
                       Enter Your Account Details</h4>

                    <form method="post" action="" class="text-left">
                        <!-- <input type="hidden" name="disco" value="<?=$_GET['disco']?>"> -->
                        <div class="row text-center">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group control-group">
                                    <label class="control-label" for="amount">Bill Type</label>

                                    <select name="billtype" class="form-control">
                                        <option>Electricity</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="text-center col-md-4 col-md-offset-4">
                                <label class="radio-inline">
                                    <input type="radio" name="acc_type" value="prepaid" checked="checked" required> Prepaid
                                </label>
                                <!-- <label class="radio-inline">
                                    <input type="radio" name="acc_type" value="postpaid" required> Postpaid
                                </label> -->
                            </div>
                            <div class="space"></div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <label class="control-label" for="mnumber">Account/Meter Number</label>
                                    <input name="account_number" id="mnumber" class="form-control" placeholder="00000000" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <label class="control-label" for="payer">Payer's Full Name</label>
                                    <input name="payer_name" id="payer" class="form-control" placeholder="Your Name" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <label class="control-label" for="email">Email Address</label>
                                    <input name="payer_email" type="email" class="form-control" placeholder="name@email.com" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <label class="control-label" for="phone">Phone Number <i>eg. 080********</i></label>
                                    <input type="number" name="payer_phone" id="phone" class="form-control" placeholder="080********" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group control-group">
                                    <label class="control-label" for="amount">Amount in &#8358;</label>
                                    <input name="amount_paid" type="number" class="form-control" placeholder="0.00" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <label class="control-label" for="email">Card Number</label>
                                    <input name="card_no" type="number" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <label class="control-label" for="phone">Card Name</label>
                                    <input type="text" name="card_name" class="form-control" placeholder="Card Name" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group control-group">
                                    <label class="control-label" for="amount">Card PIN</label>
                                    <input name="card_pin" type="password" class="form-control" placeholder="****" maxlength="4" required value="">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <button name="continue" type="submit"  class="btn btn-default">
                                Pay Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="row">&nbsp;</div>
            <div class="space"></div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p>Designed by <a href="#">Group 3</a> © 2017 </p>
    </div>
</div>
</body>
</html>