<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/x-icon" href="images\canadian_quality_and_testing_association_logo.jpg">
    <title>CQTA</title>
    <!--- ICONSCOUT CDN-->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>

    <!-- ========================= NAV BAR SECTION ===============================-->
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h1>CQTA</h1></a>
            <ul class="nav__menu">
                <li><a href="index.php">HOME</a></li> 
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="register.php">REGISTER</a></li>
                <li><a href="sponsors.php">SPONSORS</a></li>
                <li><a href="Login.php">LOGIN</a></li> 
            </ul>

            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <section class="Sponsors">
        
        <div class="container text-box-2">
            <h1>Register Now</h1>
            
        </div>

        <div class="register__section">
            <div class="container register__section-container">
                <!-- Text Content on the Left -->
                <div class="register__section-left">
                    <h1>Join Our Community</h1>
                    <p>Become a part of the Canadian Quality and Testing Association (CQTA) community. As a member, you will have access to exclusive events, networking opportunities, and resources aimed at enhancing your skills and knowledge in Quality Engineering. Don’t miss out on the chance to connect, collaborate, and build with like-minded professionals.</p>
    
                    <!-- Button to register -->
                    <button class="register__button"><a href="userRegister.php">REGISTER NOW</a></button>
                </div>
    
                
                <div class="register__section-right">
                    <img src="./images/CQTA Logo .png">
                    
                </div>
            </div>
        </div>

    </section>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logp"><h3>CQTA</h3></a>
                <p>The Canadian Quality and Testing Association (CQTA) elevates Canada's Quality Engineering community through mentorship, networking, events, and activities.
                </p>
            </div>

            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="sponsors.php">Sponsors</a></li>
                </ul>
            </div>

            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Event Policy</a></li>
                </ul>
            </div>

            <div class = "footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+01 232 432 4324</p>
                    <p>abc12343@gmail.com</p>
                </div>

                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer___copyright">
            <small>Copyright &copy; CQTA</small>
        </div>
    </footer>


    

    
    <script src="./main.js"></script>
</body>
</html>