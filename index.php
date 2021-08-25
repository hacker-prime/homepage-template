<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phynix</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


    <!-- https://stackoverflow.com/questions/5067279/how-to-align-this-span-to-the-right-of-the-div -->
    <div class="navButton">
        <span style="cursor:pointer" onclick="openNav()" class="right">&#9776;</span>
    </div>
    
     <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav -->
     <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#companies" onclick="hideSideNav()">Companies</a>
        <a href="#services" onclick="hideSideNav()">Services</a>
        <a href="#about" onclick="hideSideNav()">About</a>
        <!-- <a href="#">Clients</a> -->
        <a href="#contact" onclick="hideSideNav()">Contact</a>
    </div>
    
    <section>
        <div id="nabvar" class="header nav">
            <h2 class="logo">Phynix</h2>
            <ul class="test" id="menu-wrapper">
                <li class="mainMenu">
                    <a href="#" class="btn active home" id="myDIV" data-target="body">Home</a>
                </li>
                <!-- <li>
                    <a href="#">About</a>
                </li>
                -->
                <li class="mainMenu" data-target="services"> 
                    <a href="#companies" class="btn" data-target="services">Companies</a>
                </li>
                <!-- <li>
                    <a href="#">Our Work</a>
                </li> -->
                <li class="mainMenu">
                    <a href="#services" class="btn" data-target="portfolio">Services</a>
                </li>
                <li class="mainMenu">
                    <a href="#about" class="btn" data-target="about">About</a>
                </li>
                <li class="mainMenu">
                    <a href="#contact" class="btn" data-target="contact">Contact</a>
                </li>
            </ul>
        </div>
    </section>    

    <!-- <a href="rider/signupregister/register.php">blah</a> -->

    
    <a href="" class="logoMobile">Phynix</a>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="cards">

          
                                                 
                                                    
   <img id="top-page" src="https://svgshare.com/i/LW3.sv" alt="Top">    
    <script src="index.js"></script>

</body>
</html>