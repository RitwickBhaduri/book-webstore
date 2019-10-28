<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php if(!empty($_SESSION['logid'])||isset($_SESSION['logid']))
{ 
	$email=$_SESSION['logid'];
	$query="SELECT * FROM `tbl_members` WHERE `email`='$email' LIMIT 1";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$phone=$row['phone'];
		$pass=$row['pass'];
		$desc=$row['desc'];
		$dob=$row['dob'];
		$address=$row['address'];
		$prof=$row['prof'];
		$lang=$row['lang'];
		$web=$row['web'];
		$img_url=$row['img_url'];
	}
	/*echo $fname." ".$lname;
	die();*/
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Bookshelf: Online Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Bookshelf Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <!-- footer stylesheet -->
    <link href="css/footer3.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	    <link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">

    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">BOOKSHELF</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="navbar-brand" href="index.php">BOOKSHELF</a>
                        </h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                        <ul class="nav navbar-nav navbar-left cl-effect-15">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.html">about us</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">shop
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="products.php">Products</a>
                                    </li>
                                    <li>
                                        <a href="single_product.html">single product</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">checkout</a>
                                    </li>
									<li>
                                        <a href="payment.html">Payment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Subject
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="footer.html">Art</a>
                                    </li>
                                    <li>
                                        <a href="footer1.html">Fantasy</a>
                                    </li>
                                    <li>
                                        <a href="footer2.html">Children</a>
                                    </li>
                                    <li>
                                        <a href="footer3.html">Science</a>
                                    </li>
                                    <li>
                                        <a href="footer4.html">Sci-Fi</a>
                                    </li>
                                    <li>
                                        <a href="footer4.html">Biography</a>
                                    </li>
                                    <li>
                                        <a href="footer4.html">History</a>
                                    </li>
                                    <li>
                                        <a href="catalogue.php" style="color:black">Show More</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact us</a>
                            </li>
							<?php if(empty($_SESSION['logid'])||!isset($_SESSION['logid'])){ ?>
                            <li>
                                <a href="registration.php" title="SignIn & SignUp">
                                    <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                                </a>
                            </li>
							<?php } else {?>
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown"><span style="color:black">Welcome</span><span style="color:#ff2010"><?php echo " ".$fname;?></span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.php">Profile</a>
                                    </li>
									<li>
                                        <a href="logout.php" style="color:#ff2010">Logout</a>
                                    </li>
                                </ul>
                            </li>
							<?php } ?>
                        </ul>
                        <!-- search-bar -->
                        <div class="search-bar-agileits">
                            <div class="cd-main-header">
                                <ul class="cd-header-buttons">
                                    <li>
                                        <a class="cd-search-trigger" href="#cd-search">
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- cd-header-buttons -->
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Type and Hit Enter...">
                                </form>
                            </div>
                        </div>
                        <!-- //search-bar ends here --><!-- //shopping cart ends here -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.container -->
            </div>
        </nav>
        <!-- //navbar ends here -->
       