<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/manipulate.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">



    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Your Favorite Source of Free Bootstrap Themes</h1>
                <hr>
                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <div class="form-div">
                    <div class="signIn-div" id="DivLogin">
                        <h2 class="section-heading">Login</h2>
                        <hr class="light">
                        <div class="form-group">
                            <input class="form-control" id="LoginEmail" placeholder="email address" name="txt_useremail" type="email" autofocus required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="LoginPassword" placeholder="password" name="txt_userpassword" type="password" required>
                            <a id="forgotPassword" href="forgotpassword.html">Forgot?</a>
                        </div>
                        <div class="form-group">
                            <button id="btnLogin" class="btn btn-primary btn-xl page-scroll">
                                Login
                            </button>
                            <!--<button id="btnLogout" class="btn btn-primary btn-cl page-scroll hide">
                                Log out
                            </button>-->
                        </div>

                        <div class="form-group" id="divLoginError" style="display: none;">
                            <p id="LoginErrorAlert" aria-atomic="true" role="alert">
                                The email or password you entered does not belong to an account
                                please check your input.
                            </p>
                        </div>
                        <div class="form-group" id="divFillFields" style="display: none;">
                            <p id="FillFields" aria-atomic="true" role="alert">
                                Please fill out required fields.
                            </p>
                        </div>
                        <div class="form-group">
                            <a  id="LoginNoAccount" href="#" >Don't have an account?</a>
                        </div>
                    </div>
                </div>

                <div class="signIn-div" id="DivSignUp" style="display:none;">
                    <h2 class="section-heading">Don't have an account? Sign up</h2>
                    <hr class="light">
                    <div class="form-div">
                        <div class="signUp-div">
                            <div class="form-group">
                                <input class="form-control" id="signUpFirstName" placeholder="first name" name="txt_firstname" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="signUpLastName" placeholder="last name" name="txt_lastname" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="signUpEmail" placeholder="email address" name="txt_useremail" type="email" required>
                            </div>
                            <div class="form-group" id="signUpPasswordPadding">

                                <input class="form-control" id="signUpPassword" placeholder="password" name="txt_userpassword" type="password" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="signUpConfPassword" placeholder="confirm password" name="txt_userconfpassword" type="password" required>
                            </div>
                            <div class="form-group">
                                <!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Sign Up!</a>-->
                                <button id="btnSignup" class="btn btn-primary btn-xl page-scroll">
                                    Sign Up!
                                </button>
                            </div>
                            <div class="divErrorSignUp" id="divFillFieldsSignUp" style="display: none;">
                                <p id="FillFieldsSignUp" aria-atomic="true" role="alert">
                                    Please fill out required fields.
                                </p>
                            </div>
                            <div class="divErrorSignUp" id="divErrorConfPassword" style="display:none;">
                                <p id="PasswordConfErrorSignUp" aria-atomic="true" role="alert">
                                    Please make sure password confirmation is true.
                                </p>
                            </div>
                            <div class="divErrorSignUp" id="divPasswordLength" style="display:none;">
                                <p id="PasswordLength" aria-atomic="true" role="alert">

                                    Please make sure password is more than 8 characters.

                                </p>
                            </div>
                            <div class="form-group">
                                <a id="signUpHasAcc" href="#">Already have an account?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- FIRE BASE -->
    <script src="https://www.gstatic.com/firebasejs/3.7.5/firebase.js"></script>


    <script src="js/app.js"></script>

    <script>
        $(document).ready(function(){
            //Get elements
            //firebase.initializeApp(config);



            /*var txtLoginEmail = $('#LoginEmail');
            var txtLoginPassword = $('#LoginPassword');
            var btnLogin = $('#btnLogin');
            var btnLogout = $('#btnLogout');
            var btnLoginNoAccount = $('#LoginNoAccount');*/
            $(document).keypress(function(e){
              if(e.which == 13){
                $("#btnLogin").trigger("click");
              }
            })
            $('#btnLogin').on("click",function(){
                var email = $("#LoginEmail").val();
                var password = $("#LoginPassword").val();

                /*if(email === '' && password === ''){
                    alert("username and password required");
                }else{*/

                    $.ajax({
                        url: "ServerScript/LoginVerification.php",
                        data: {userEmail: email,userPassword: password},
                        method: "POST",
                        success: function(data){
                            alert(data);
                            $("#LoginEmail").val("");
                            $("#LoginPassword").val("");
                            if(data == "login success"){
                                window.location.replace("POSPage.php");
                            }
                        },
                        error: function(data){
                            alert(data);
                        }
                    });
            //    }

            });



            $("#LoginNoAccount").on("click", function(){
                $('#LoginEmail').val("");
                $('#LoginPassword').val("");
                $("#DivLogin").toggle();
                $("#DivSignUp").toggle();
            });

            $("#signUpHasAcc").on("click",function(){
                $("#signUpEmail").val("");
                $("#signUpPassword").val("");
                $("#signUpConfPassword").val("");
                $("#DivLogin").toggle();
                $("#DivSignUp").toggle();
            });


            //password confirmation
            $("#signUpConfPassword").keyup(function(){
                if($("#signUpConfPassword").val() == $("#signUpPassword").val()){
                    $("#signUpConfPassword").css('border-color','green');
                    $("#signUpConfPassword").css('border-width', '2px');
                }else{
                    $("#signUpConfPassword").css('border-color','red');
                    $("#signUpConfPassword").css('border-width', '2px');
                }
            });

            //click event for sign up
            var txtSignUpEmail = $("#signUpEmail");
            var txtSignUpPassword = $("#signUpPassword");
            var txtSignUpConfPassword = $("#signUpConfPassword");

            var txtSignUpFirstName = $("#signUpFirstName");
            var txtSignUpLastName = $("#signUpLastName");
            //NOTE: "password does not match" error does not show. instead it
            //shows "password needs to be atleast 6 characters"

            var firstTimeUserCheck = 0;

            $("#btnSignup").on("click", function(){
                var email = $("#signUpEmail").val();
                var password = $("#signUpPassword").val();
                var firstname = $("#signUpFirstName").val();
                var lastname = $("#signUpLastName").val();

                if(email === '' && password ==='' && firstname === '' && lastname === ''){
                    alert("fill out required fields");
                }else{
                    $.ajax({
                        url: "ServerScript/SignUpInsert.php",
                        method: "POST",
                        data: {signUpEmail: email, signUpPassword: password, signUpFirstName: firstname, signUpLastName: lastname},
                        success: function(data){
                            alert(data);
                            $("#signUpEmail").val("");
                            $("#signUpPassword").val("");
                            $("#signUpConfPassword").val("")
                        },
                        error: function(data){
                            alert(data);
                        }
                    });
                }
            });


        });
    </script>


    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
