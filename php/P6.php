<!DOCTYPE html>
<html lang="en">

<?php
session_start();
unset($_SESSION);
$file = fopen("../database/users.csv","a+");
if(isset($_REQUEST["submit"])){
    $data[0] = $_REQUEST["Username"];
    $data[1] = $_REQUEST["FirstName"];
    $data[2] = $_REQUEST["LastName"];
    $data[3] = $_REQUEST["Password"];
    
    $text_to_write = "\n".$data[0];
    $text_to_write .= ", " . $data[1];
    $text_to_write .= ", " . $data[2];
    $text_to_write .= ", " . $data[3];
    fwrite($file, $text_to_write);
    echo "<script type='text/javascript'>alert('You are now registered ! Please log-in !')
    window.location.replace('http://localhost/php/P5.php');</script>";
}
fclose($file);
?>

<head>
    <title>Register | Cloud</title>

    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cloud Online Grocery Website">
    <meta name="Author" content="Mélina Deneuve, Kenny Phan, Joe El-Khoury, Titouan Sablé, Tommy Cao, Muhammad Mubashir">
    <meta name="Keywords" content="Cloud, Online Grocery">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../css/P5-P6-style.css">

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/5995e1d6ee.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- HEADER -->
    <header id="header">
        <a href="../html/P1.html" class="display-4"> <span id="title">CLOUD</span> ONLINE GROCERY </a>
    </header>

    <!-- MENU -->
    <div id="menu">

        <a href="../html/P1.html"> <img src="../images/cloud.jpg" alt="grocery store logo" id="logo" class="center"> </a>

        <form action="" class="search-box" class="center">
            <input type="text" name="search" placeholder="Search Products">
            <button type="submit"> <i class="fa fa-search"></i> </button>
        </form>

        <form action="" class="icons" class="center">
            <a href="P5.php" id="sign-in"> <i class="fas fa-sign-in-alt"></i> Sign in </a>
            <a href="P6.php" id="my-list"> <i class="fas fa-user-plus"></i> Sign up </a>
            <a href="P4.php" id="shopping-cart"> <i class="fa fa-shopping-cart"></i>Cart</a>
        </form>

    </div>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-light">
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item mx-5 dropdown"><a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#">AISLES <span class="caret"></span></a>
                    <ul class="dropdown-menu bg-gray">
                        <li><a href="../html/P2-1.html">Fruits & Vegetables</a></li>
                        <li><a href="../html/P2-2.html">Dairy & Eggs</a></li>
                        <li><a href="../html/P2-3.html">Beverages</a></li>
                        <li><a href="../html/P2-4.html">Meat & Poultry</a></li>
                        <li><a href="../html/P2-5.html">Frozen</a></li>
                        <li><a href="../html/P2-6.html">Snacks</a></li>
                        <li><a href="#">Organic Foods</a></li>
                        <li><a href="#">Beer & Wine</a></li>
                        <li><a href="#">Canned Goods</a></li>
                        <li><a href="#">Seafood</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-5"><a class="nav-link text-white" href="#">FLYER</a></li>
                <li class="nav-item mx-5"><a class="nav-link text-white" href="#">RECIPES</a></li>
                <li class="nav-item mx-5"><a class="nav-link text-white" href="#">NEW PRODUCTS</a></li>
            </ul>
        </div>
    </nav>
    <!--Form - main part of the page-->
    <div class="container" id="register">
        <div class="title">
            <h2>Your Login infos:</h2>
        </div>
        <form action="">
            <label>Username:</label>&nbsp;
            <input type="text" name="Username" onfocus="this.value=''" value="Username" required/>
            <br/> <br/>

            <label>Choose a password:</label>&nbsp;
            <input name="Password" type="password" id="Password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" alert="One uppercase, one lowercase, one number and at least 8 characters required." title="One uppercase, one lowercase, one number and at least 8 characters required."
                required/><br/><br/>
            <label>Confirm the password</label>&nbsp;
            <input type="password" id="Password2" alert="It must be identical as the previous password" title="It must be identical as the previous password" required/>
            <br/><br/>
            <br/>
            <div class="container" id="register">
                <div class="title">
                    <h2>Your personal infos:</h2>
                </div>

                <label>First name:</label>&nbsp;
                <input type="text" name="FirstName" onfocus="this.value=''" value="Enter your first name" required>&emsp;
                <label>Last name:</label>&nbsp;
                <input type="text" name="LastName" onfocus="this.value=''" value="Enter your last name" required>
                <br/> <br/> <br/>

                <label>Email:</label>&nbsp;
                <input type="text" name="email" onfocus="this.value=''" value="this.example@email.com" required>
                &emsp;<label>Phone number:
			(<input name="tel1" type="tel" pattern="[0-9]{3}" placeholder="XXX" aria-label="3-digit area code" size="1" maxlength="3" onkeypress='validate(event)' required/>)
   				<input name="tel2" type="tel" pattern="[0-9]{3}" placeholder="XXX" aria-label="3-digit prefix" size="1" maxlength="3" onkeypress='validate(event)' required/> -
			   	<input name="tel3" type="tel" pattern="[0-9]{4}" placeholder="XXXX" aria-label="4-digit number" size="1" maxlength="4" onkeypress='validate(event)' required/>
			</label>
                <br/>
                <div class="title">
                    <h4>Your address:</h4>
                </div>

                <label>House number:</label>&nbsp;
                <input type="number" id="number" name="AddressNumber" required>

                &emsp;<label>Address type:</label>&nbsp;

                <select name="address_type" onchange="if(this.options[this.selectedIndex].value=='Other'){
                toggleField(this,this.nextSibling);
                this.selectedIndex='0';
            }">
            <option><i>Choose</i></option>
             <option>Alley</option>
             <option>Avenue</option>
             <option>Boulevard</option>
             <option>Street</option>
             <option value="Other">Other</option>
          </select><input required name="address_type" style="display:none;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}"> &emsp; &nbsp; &nbsp;&nbsp;

                <label>Street name:</label>&nbsp;
                <textarea class="form-field" name="address" required></textarea>
                <br/><br/>
                <label>City:</label>&nbsp;
                <input type="text" name="City" onfocus="this.value=''" value="City" required> &emsp;
                <label>Postal code:</label>&nbsp;
                <input type="text" name="PostalCode" onfocus="this.value=''" value="Postal code" required> &emsp;

                <label>Country:</label>&nbsp;
                <input type="text" name="Country" onfocus="this.value=''" value="Country" required>
        </form>
        <br/><br/>
        <button type="submit" name="submit" onclick="matchPassword()" class="btn btn-primary">Register</button>
        </div>

        <!-- FOOTER -->
        <footer>
            <div id="description">
                <div id="about-us">
                    <h1>ABOUT US</h1>
                    <ul>
                        <li><a href="">Company Information</a></li>
                        <li><a href="">Charitable Contribution</a></li>
                        <li><a href="">Investor Relations</a></li>
                    </ul>
                </div>
                <div id="customer-service">
                    <h1>CUSTOMER SERVICE</h1>
                    <ul>
                        <li><a href="ContactUs.html">Contact US</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div id="online">
                    <h1>ONLINE</h1>
                    <ul>
                        <li><a href="">Online Grocery</a></li>
                        <li><a href="">Mobile Appy</a></li>
                        <li><a href="">Product Videos</a></li>
                    </ul>
                </div>
                <div id="jobs">
                    <h1>JOBS</h1>
                    <ul>
                        <li><a href="">Jobs in stores</a></li>
                        <li><a href="">Careers at head office</a></li>
                    </ul>
                </div>
            </div>

            <div id="copyright">
                <h6> &copy; Copyright Cloud 2021</h6>
            </div>

        </footer>
</body>

<script type="text/javascript" src="../js/P3-meat + P5-P6.js"></script>

</html>