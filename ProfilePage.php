<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Profile | Creative - Bootstrap 3 Responsive Admin Template</title>

    <?php include("cssScripts.php") ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     <?php include("Header.php"); ?>
      <!--header end-->

     <?php include("Sidebar.php") ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_documents_alt"></i>Pages</li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4><?php
                                        echo $fullname;
                                    ?></h4>
                              <div class="follow-ava">
                                  <img src="img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>Administrator</h6>
                            </div>


                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">

                                  <li class="active">
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" id="editProfileBtn" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">

                                  <!-- profile -->
                                  <div id="profile" class="tab-pane active">
                                    <section class="panel">

                                      <div class="panel-body bio-graph-info">
                                          <h1>Bio Graph</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>First Name </span>: <?php echo $_SESSION["firstname"]; ?> </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Last Name </span>: <?php echo $_SESSION["lastname"]; ?></p>

                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:<?php echo $_SESSION["email"]; ?></p>
                                              </div>


                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
                                                <form class="form-horizontal" method = "POST" action = "ServerScript/editUserProfile.php">
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">First Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" name="firstnameInput" >
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Last Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="lastnameInput">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Email</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="email" name="emailInput">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-6">
                                                          <input class="form-control" id="passwordInput"  type="password" name="passwordInput">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button id="SubmitEditBtn" type="submit" class="btn btn-primary">Save</button>

                                                      </div>
                                                  </div>
                                                </form>

                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
  </section>
  <!-- container section end -->
    <?php include("javascriptScripts.php") ?>

    <script>

      //knob


        $(document).ready(function(){

            $(".knob").knob();
            $("#editProfileBtn").on("click", function(){
                $.ajax({
                    url: "ServerScript/getSessions.php",
                    method: "POST",
                    dataType: "json",
                    success: function(data){
                        //alert(data);
                        $("#f-name").val(data.firstname);
                        $("#l-name").val(data.lastname);
                        $("#email").val(data.email);
                    },
                    error: function(data){
                        alert(data);
                    }
                });
            });

            /*$("#SubmitEditBtn").on("click", function(data){

                if($.trim($("#passwordInput").val()) == ''){
                    alert("enter password");
                }else{
                    var firstname = $.trim($("#f-name").val());
                    var lastname = $.trim($("#l-name").val());
                    var email = $.trim($("#email").val());
                    var password = $.trim($("#passwordInput").val());

                    $.ajax({
                        url: "ServerScript/editUserProfile.php",
                        method: "POST",
                        data: {'firstnameInput': firstname, 'lastnameInput': lastname,
                                'emailInput': email, 'passwordInput': password},
                        success: function(data){
                            alert(data);
                        },
                        error: function(data){
                            console.log(data);
                        }
                    });
                }
            });*/
        });

    </script>


  </body>
</html>
