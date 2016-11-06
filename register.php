<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Voice is a registered club of NIt Rourkela">
  <meta name="author" content="In the service of Srila Prabhupada. For the pleasure of Guru and Gauranga.">
  <title>Voice Club | NIT Rourkela</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/ico/favicon.html">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">

    <style type="text/css">
      .form-control {
        border-color: #ffffff;
        color: white;
      }

      option {
        color: black;
      }

      input {
        color: white;
      }

      ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: white;
      }
      ::-moz-placeholder { /* Firefox 19+ */
      color: pink;
      }
      :-ms-input-placeholder { /* IE 10+ */
       color: pink;
      }
      :-moz-placeholder { /* Firefox 18- */
        color: pink;
      }
    </style>
  </head><!--/head-->

  <body>
<div class="navbar navbar-default" role="navigation" style="margin-bottom: 0px;">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
            </a>                    
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">                 
              <li class="scroll"><a href="index.html#home">Home</a></li>
              <li class="scroll"><a href="index.html#services">Offer</a></li> 
              <li class="scroll"><a href="index.html#about-us">About Us</a></li>                     
              <li class="scroll"><a href="index.html#portfolio">Portfolio</a></li>
              <li class="scroll"><a href="index.html#team">Team</a></li>
              <li class="scroll"><a href="index.html#blog">Blog</a></li>
              <li class="scroll"><a href="index.html#contact">Contact</a></li>       
            </ul>
          </div>
        </div>
      </div><!--/.navbar-->



<!-- form-->
<div style="background: #272822;">
<img src="images/regbk.jpg" class="img img-responsive" style="position: absolute; width:100%; z-index: 0;"/>

 <form id="main-contact-form" name="contact-form" method="post" action="registered.php" style="padding: 10px 100px;; z-index: 100;">
                 <div class="col-sm-12" style="padding-bottom: 50px;"><h1 style="text-align: center; color: white; font-family: Raleway, sans-serif; border-bottom: 1px solid white; padding-bottom: 5px;"> Fresher's Registration</h1></div>
                 <?php

                 if(!empty($_GET['status'])) 
                 {
                  $a=$_GET['status'];

                  if($a!= "fail"){
                  $b=$_GET['name'];
                  echo '
                 <div class="col-sm-12" style="padding-bottom: 50px; margin-top:-50px"><h1 style="text-align: center; color: blue; font-family: Raleway, sans-serif; padding-bottom: 5px;"> Registration of Mr. '.$b.' to VOICE Club is Successful</h1></div>';
                  }
                  else {
                    echo '<div class="col-sm-12" style="padding-bottom: 50px; margin-top:-50px"><h1 style="text-align: center; color: blue; font-family: Raleway, sans-serif; padding-bottom: 5px;"> Authentication Incorrect</h1></div>';
                  }
               }
                 ?>

                 <div class="container">


                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                      </div>
                    </div>
                    <div class="col-sm-2 col-sm-offset-1">
                      <div class="form-group">
                        <input type="text" name="roll" class="form-control" placeholder="Roll No" required="required">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input type="date" name="dob" class="form-control" placeholder="DOB" required="required">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="number" class="form-control" placeholder="Phone Number (New)" minlength="10" maxlength="12" required="required">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="number2" class="form-control" placeholder="Phone Number (Old)" minlength="10" maxlength="12" required="required">
                      </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                      <div class="form-group">
                        <input type="email" name="mail" class="form-control" placeholder="Email Address">
                      </div>
                    </div>
                  </div>

                  <div class="row" style="margin: 20px;"></div>




                  <div class="row">
                  <div class="col-sm-6">
                  <div class="row">
                      <div class="col-sm-3">
                      <div class="form-group">
                        <select name="hall" class="form-control" style="background: transparent;">
                                              <option value="hall">Hall</option>
                                                <option value="DBA">DBA</option>
                                                <option value="GDB">GDB</option>
                                                <option value="other">Other</option>
                                                
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <select name="block" class="form-control">
                                              <option value="block">Block</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="other">Other</option>
                                                
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <select name="floor" class="form-control">
                                              <option value="floor">Floor</option>
                                                <option value="Ground Floor">Ground Floor</option>
                                                <option value="First Floor">First Floor</option>
                                                <option value="Second Floor">Second Floor</option>
                                                <option value="other">Other</option>
                                                
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="number" name="room" class="form-control" placeholder="Room" min="1" max="40" required="required">
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <select name="eaa" class="form-control">
                                              <option value="eaa">Extra Acad. Activities</option>
                                                <option value="PE">Physical Education</option>
                                                <option value="NCC">NCC</option>
                                                <option value="NSS">NSS</option>
                                                <option value="other">Other</option>
                                                
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" name="blood" class="form-control" placeholder="Blood Group" required="required">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" name="hobbies" class="form-control" placeholder="Hobbies">
                      </div>
                    </div>

                    <div class="row" style="margin: 40px;"></div>

                    <div class="col-sm-5">
                      <div class="form-group">
                        <input type="text" name="jeeroll" class="form-control" placeholder="JEE Roll No" required="required">
                      </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-2">
                      <div class="form-group">
                        <input type="number" name="jeerank" class="form-control" placeholder="AIR" required="required">
                      </div>
                    </div>


                    </div>
                  </div>

                  <div class="col-sm-6">
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                      <div class="form-group">
                        <input type="text" name="parentname" class="form-control" placeholder="Parent Name" required="required">
                      </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-2">
                      <div class="form-group">
                        <input type="number" name="number3" class="form-control" placeholder="Parent Contact" minlength="10" maxlength="12" required="required">
                      </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-2">
                      <div class="form-group">
                        <textarea type="text" name="address" class="form-control" placeholder="Home Address (optional)" rows="2"></textarea>
                      </div>
                    </div>
                    
                    
                    </div>
                  </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                    <div class="form-group">
                    <textarea name="particulars" id="message" class="form-control" rows="4" placeholder="Particulars (if any)"></textarea>
                  </div>
                  </div>


                  <div class="col-sm-4">
                      <div class="form-group">
                        <input type="number" name="payment" class="form-control" placeholder="350" required="required">
                      </div>
                    </div>


                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                      </div>
                    </div>

                  
                  <input type="" name="registeredby" value="some" style="visibility: hidden; ">
                  
                  <div class="col-sm-6 col-sm-offset-3">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-paperclip" style="padding-right: 10px;"></i>Register</button>
                  </div>
                  </div>
                  </div>
                  </div>
                </form>
</div>
<!--/form-->


  </body>
  </html>