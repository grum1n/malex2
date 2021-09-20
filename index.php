<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malex | index</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c630c8eb00.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="app/css/normalize.css">
    <link rel="stylesheet" href="app/css/style.css">
</head>
<body>
<header class="text-poppins-700">
    <div class="container flex-between">
        <a href="index.php"><img src="app/images/Logo.png" alt="Logo Malex"></a>
        <nav class="flex-container">
            <ul class="flex-container">
                <li><a href="">SERVICES</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="">TEAM</a></li>
                <li><a href="">PRICING</a></li>
                <li><a href="">TESTIMONIALS</a></li>
                <li><a href="">NEWS</a></li>
                <li><a href="">CONTACTS</a></li>
            </ul>
            <div class="search-box">
                <a href="search.php"><i class="fas fa-search"></i></a>
            </div>
            <div id="menu" class="sidenav">
                <ul class="mobile-nav flex-between">
                    <li class="">
                        <a href="index.html"><img src="app/images/Logo.png" alt="Logo Malex"></a>
                    </li>
                    <li class="flex-container">
                        <a href="search.html"><i class="fas fa-search"></i></a>
                        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
                    </li>
                </ul>
                <ol class="flex-between">
                    <li class="text-poppins-400">
                        <p>575 Crescent Avenue</p>
                        <p> PA 18951</p>
                        <p>United Kingdom</p>
                        <p>+432 533 12 523</p>
                        <p>info@domain.com</p>
                    </li>
                    <li class="text-poppins-700">
                        <a href="">Services</a>
                        <a href="about.php">About Us</a>
                        <a href="">Team</a>
                        <a href="">Pricing</a>
                        <a href="">Testimonials</a>
                        <a href="">News</a>
                        <a href="">Contacts</a>
                    </li>
                </ol>
                <div class="flex-between">
                    <span class="text-poppins-400">&copy; 2020 Business Consulting Agency Figma Template By Adveits</span>
                    <span class="flex-container text-poppins-700">
                        <a href="">RU</a>
                        <a href="">EN</a>
                    </span>
                </div>
            </div>
            <div class="menu-button">
                    <a href="javascript:void(0)" onclick="openNav()"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
    </div>
</header>  
<section class="row hero">
    <div class="container hero-text">
        <h1>Business</h1>
        <h1>Consulting Agency</h1>
        <p class="text-poppins-400">We are digital business consulting agency that helps companies increase better incomes and help with branding for faster business growing.</p>
        <a href="">Learn More</a>
    </div>
    <div class="container flex-between">
        <i class="fas fa-long-arrow-alt-down"></i>
        <a class="language-text" href="">EN</a>
    </div>
    <ul class="hero-bottom">
        <li>
            <div>
                <img src="app/images/chess.png" alt="Chess">
                <h4>Strategic Planning</h4>
                <p>Strategic planning is the process of documenting and establishing a direction of your business</p>
            </div>
            <a href=""><img src="app/images/Button.png" alt=""><span>READ MORE</span></a>
        </li>
        <li>
            <div>
                <img src="app/images/consult.png" alt="Consult">
                <h4>Consulting & Marketing</h4>
                <p>A marketing consultant is an advisor who works with companies to create and implement marketing strategies.</p>
            </div>
            <a href="" class="flex-container"><img src="app/images/Button.png" alt=""><span>READ MORE</span></a>
        </li>
        <li>
            <div>
                <img src="app/images/financial.png" alt="Financial">
                <h4>Financial</h4>
                <p>Financial services is a broad range of more specific activities such as banking, investing, and insurance.</p>
            </div>
            <a href=""><img src="app/images/Button.png" alt=""><span>READ MORE</span></a>
        </li>
    </ul>
    
</section>
<footer class="row bg-black">
    <div class="container flex-between">
        <a href=""><img src="app/images/Logo.png" alt="Logo"></a>
        <p>© 2020 Business Consulting Agency Figma Template By Adveits</p>
        <div>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</footer>
<script src="app/javascript/custom.js"></script>     
</body>
</html>