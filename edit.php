<?php
include('db_con.php');
?>
<?php
$msg="";
if(isset($_POST['pro_up']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$desc=$_POST['desc'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$prof=$_POST['prof'];
	$lang=$_POST['lang'];
	$web=$_POST['web'];
	$email=$_SESSION['logid'];
	$query="UPDATE `tbl_members` SET `fname` = '$fname', `lname` = '$lname', `phone` = '$phone', `desc` = '$desc', `dob` = '$dob', `address` = '$address', `prof` = '$prof', `lang` = '$lang', `web` = '$web' WHERE `tbl_members`.`email` = '$email'";
	$result=mysqli_query($con,$query);
	if($result)
	{
	$msg="Profile Updated Successfully!";
	}
	else
	{
	$msg= "Profile Update Failed!";	
	}
}
if(isset($_POST['pass_up']))
{
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$con_newpass=$_POST['con_newpass'];
	$email=$_SESSION['logid'];
	$query="SELECT * FROM tbl_members WHERE email='$email' AND pass='$oldpass'";
	$result=mysqli_query($con,$query);
	$row=mysqli_num_rows($result);
	if($row!=0)
	{
		if($newpass==$con_newpass)
		{
		$query="UPDATE `tbl_members` SET `pass` = '$newpass' WHERE `tbl_members`.`email` = '$email'";
		$result=mysqli_query($con,$query);
		if($result)
		{
			$msg="Password Changed Successfully!";
		}
		else
		{
			$msg="Password Change Failed!";	
		}
		}
		else
		{
			$msg="Confirm Password Does Not Match New Password!";	
		}
		
	}
	else
	{
		$msg="Old password does not match!";
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
                    <span class="abtxt1"><a id="signinlink" href="#" style="color:black" onclick="$('#signupbox').hide(); $('#loginbox').show()">Edit Profile</a>	</span>
                    <span class="abtext"><a href="#" style="color:white" onClick="$('#loginbox').hide(); $('#signupbox').show()">Change Password</a></span>
                </h4>
                <div id="loginbox" style="margin-top:30px;" class="mainbox  loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Edit Profile</div>
							<div class="fpassword">
                                <a href="profile.php">Cancel Edit?</a>
                            </div>
                        </div>
						
                                                <div class="panel-body">
							 <?php
							 $email=$_SESSION['logid'];
							$query="select * from tbl_members where email='$email'";
							$result=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($result))
							{	?> 
                            <form id="signupform" class="form-horizontal" action="#" method="post">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">First Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Last Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input style="color:lightgray" type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Phone</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Description</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="desc" value="<?php echo $row['desc']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Date of Birth</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Address</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Profession</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="prof" value="<?php echo $row['prof']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Prefered Language</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="lang" value="<?php echo $row['lang']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Website</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="web" value="<?php echo $row['web']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="signup-btn">
                                        <input id="btn-signup" type="submit" class="btn btn-info" name="pro_up" value="Update">
                                        <button type="submit" class="btn btn-info"><a href="profile.php"  style="color:white"> Back to Profile </a></button>
                                    </div>
                                </div>
														<span style="color:red"><?php echo $msg?></span>
								

                                
                            </form>
							
	<?php } ?>
                        </div>
                    </div>
                </div>
                <div id="signupbox" style="display:none; margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Change Password</div>
							<div class="fpassword">
                                <a href="profile.php">Cancel Changing?</a>
                            </div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                
                            </div>
                        </div>
                        <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="loginform" class="form-horizontal" action="#" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="oldpass" placeholder="Old Password" required="">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="newpass" placeholder="New Password" required="">
                                </div>
								<div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="con_newpass" placeholder="Confirm New Password" required="">
                                </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        
										<input type="submit" value="Update" name="pass_up" class="btn btn-info" />
										<button type="submit" class="btn btn-info"><a href="profile.php"  style="color:white"> Back to Profile </a></button>
                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:100%">
                                        </div>
                                    </div>
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