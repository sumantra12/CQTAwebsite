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
            <h1>About CQTA</h1>
            
        </div>
        <div class="about__achievements">
            <div class="container about__achievements-container">
                <div class="about__achievements-left">
                    <img src="./images/about achievements.svg">
    
                </div>
    
                <div class="about__achievements-right">
                    <h1>Our Mission</h1>
                    <p>Welcome to the Canadian Quality and Testing Association (CQTA). The CQTA is a consortium established by the Quality Engineering community of Canada with the objective of advancing 
                        Canadian Quality Engineering to new heights. Our pillars: Connect. Collaborate. Build. The CQTA group is dedicated to engaging in mentorship, fostering networking opportunities, 
                        organizing events, and undertaking various activities designed to enhance the Quality Engineering community within the Canadian IT sector.</p>
                        <div class="achievements__cards">
                            <article class="achievement__card">
                                <span class="achievement__icon"><i class="uil uil-users-alt"></i></span>
                                <h3>Connect</h3>
                            </article>
    
                            <article class="achievement__card">
                                <span class="achievement__icon"><i class="uil uil-server"></i></span>
                                <h3>Build</h3>
                            </article>
    
                            <article class="achievement__card">
                                <span class="achievement__icon"><i class="uil uil-chart-line"></i></span>
                                <h3>Collaborate</h3>
                            </article>
                        </div>
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