<?php
include('db_con.php');
?>
<?php
	if(!empty($_SESSION['logid'])||isset($_SESSION['logid']))
	{
		header('location:profile.php');
	}
	$error="";
	$msg="";
	if(isset($_POST['regis']))
	{
		/* echo "hello";
		die(); */
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$pass=$_POST['pass'];
		$con_pass=$_POST['con_pass'];
		if($pass!=$con_pass)
		{
			$error="Password Not Matching!";
		}
		else
		{
			$query="INSERT INTO `tbl_members` (`fname`, `lname`, `email`, `phone`, `pass`) VALUES ('$fname', '$lname', '$email', '$phone', '$pass')";
			/* echo $query;
			die(); */
			$result=mysqli_query($con,$query); 
			if($result)
			{
				$msg="Registration Successful! Please Sign In";
				header("location:registration.php");
			}
			else
			{
				$error="Registration Failed!";	
			}
		}
	}
	if(isset($_POST['login']))
	{
		$userid=$_POST['userid'];
		$userpass=$_POST['userpass'];
		$query="SELECT * FROM tbl_members WHERE email='$userid' AND pass='$userpass'";
		/* echo $query;
			die(); */
		$result=mysqli_query($con,$query);
		$row=mysqli_num_rows($result);
		if($row!=0)
		{
			$_SESSION['logid']=$userid;
			header('location:profile.php');
			
			$msg="Login success!";
		}
		else
		{
			$msg="Login Failed!";
		}
	}
?>
<?php
include('header.php');
?>
	
        <!-- signin and signup form -->
        <div class="login-form section text-center">
            <div class="container">
                <h4 class="rad-txt">
				<br>
				<br>
                    <span class="abtxt1"><a id="signinlink" href="#" style="color:black" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>	</span>
                    <span class="abtext"><a href="#" style="color:white" onClick="$('#loginbox').hide(); $('#signupbox').show()">Sign Up</a></span>
                </h4>
                <div id="loginbox" style="margin-top:30px;" class="mainbox  loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign In</div>
                            <div class="fpassword">
                                <a href="#">Forgot password?</a>
                            </div>
                        </div>
                        <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="loginform" class="form-horizontal" action="#" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input id="login-email" type="text" class="form-control" name="userid" value="" placeholder="Email" required="">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="userpass" placeholder="Password" required="">
                                </div>
                                <div class="input-group">
                                    <div class="checkbox">
                                        <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        
										<input type="submit" value="Login" name="login" class="btn btn-success" />
                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:100%">
                                            <?php echo $msg; ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="signupbox" style="display:none; margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                
                            </div>
                        </div>
                        <div class="panel-body">
                            <form id="signupform" class="form-horizontal" action="#" method="post">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">First Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="fname" placeholder="What's your first name?" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Last Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="lname" placeholder="What's your family name?" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="email" placeholder="Whare can we mail you?" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Phone</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="phone" placeholder="Where can we contact you?" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="password" class="form-control" name="pass" placeholder="Enter Your Password" required="">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Confirm Password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="password" class="form-control" name="con_pass" placeholder="Enter Your Password Again" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="signup-btn">
                                        <input id="btn-signup" type="submit" class="btn btn-info" name="regis" value="Sign Up">
                                    </div>
                                </div>
                                <div style="border-top: 1px solid #999; padding-top:20px; color:red;" class="form-group"><?php echo $error; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//signin and signup form ends here-->
<?php 
include('footer.php');
?>