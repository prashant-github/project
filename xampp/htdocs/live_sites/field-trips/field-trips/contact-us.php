<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Field Trips</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/master.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
        <style>
            #map {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%
            }
        </style>
    </head>
    <body class="header-white local-culture community outdoor">
        <?php
        include('header.php');
        ?>
        <div class="banner-holder contact-banner">
            <div class="container">
                <div class="row">
                    <div class="banner-container">
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-holder">
                            <h2>Enquiry</h2>
                            <p>We love to hear from you!</p>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control input-form" id="name" placeholder="Name">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6  col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control input-form" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control input-form input-form" id="number" placeholder="Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-form input-form" id="orginization" placeholder="School/Orginization">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select class="form-control  input-form" id="sel1">
                                                <option class="input-form">Month Of travel</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-form input-form" id="students" placeholder="No. of students">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="form-control  input-form" id="sel1">
                                                <option class="input-form">Grade of students</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <textarea class="form-control input-textarea" rows="5" id="comment" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default submit-btn"><img src="images/right-mark.png">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="address-section">
                            <h3>Field trips Inc.</h3>
                            <address># 3291, 1st Floor, 12th Main, HAL II Stage,<br>  Indiranagar, <br>
                                Bangalore, Karnataka, India - 560 008.</address>
                            <ul class="contact-box">
                                <li><a href="tel:080 9864 3212" class="contact-link"><img src="images/phone-icon.png">080 9864 3212</a></li>
                                <li> <a  onclick="Skype.tryAnalyzeSkypeUri('call', '0');" href="skype:prashant" class="contact-link skype-btn"><img src="images/skype-icon.png">field.trips</a></li>
                            </ul>
                        
                           
                        </div>
                        <div class="maps-section">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.564693208045!2d77.61078231482159!3d12.935675990879448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae144ddbf01ccf%3A0x217f86058535e2e5!2sAppiness+Interactive+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1470305042756" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('footer.php');
        ?>

        <!--
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <script>
                    $(document).ready(function () {
                        $(".navbar-nav a").click(function () {
                            $(this).addClass("active-blue");
                            $(this).parent().siblings().find('a').removeClass('active-blue');
                        });
                    });
                </script>-->
    </body>

</html>
