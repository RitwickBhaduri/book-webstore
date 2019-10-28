<?php
include('db_con.php');
?>
<?php
if(empty($_SESSION['logid'])||!isset($_SESSION['logid']))
{
	header('location:registration.php');
}
$errors="";
 if(isset($_POST['upload'])){
	  
	 if(!isset($_FILES['pic']['name'])|| empty($_FILES['pic']['name']))
	 {
		$errors="Plz select a picture"; 
	 }
	 else
	 {
      $file_name = $_FILES['pic']['name'];
      $file_size =$_FILES['pic']['size'];
      $file_tmp =$_FILES['pic']['tmp_name'];
      $file_type=$_FILES['pic']['type'];
      $file_ext=strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors='File size must be excately 2 MB';
      }
      
      if(empty($errors)){
         move_uploaded_file($file_tmp,"images/".$file_name);
		 $email=$_SESSION['logid'];
		$query="UPDATE tbl_members SET `img_url` = '$file_name'  WHERE `email`='$email'";
		$result=mysqli_query($con,$query);
		if($result)
		{
		header("location:profile.php");
		}
		else
		{
		 $errors="Failed";	
		}
      }else{
//print_r($errors);
echo $errors;
die();
      }
   }
 }
/*echo $_SESSION['logid'];
die();*/
?>
<?php 
include('header.php');
?>
	<br>
	<br>
	<div id="home">
		<!-- Single -->
		<div class="innerf-pages section">
			<div class="container">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
								
									<div align="center" class="thumb-image">
										<img src="images/<?php echo $img_url ?>"  data-imagezoom="true" onerror="this.onerror=null;this.src='images/default_pp.png';" alt=" " class="img-responsive"> </div>
							</ul>
								<br>
							<br>								
							<form action="" method="post" enctype="multipart/form-data">
							<div align="center" class="clearfix">
							<input type="file" name="pic" class="btn btn-success" ><br>
							<input type="submit" name='upload' class="btn btn-info" value="Change Picture">
<span style="color:red"><?php echo $errors;?></span>
									</div>
									</form>
						</div>
					</div>
				</div>
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>Name:
						<span><?php echo $fname." ".$lname;?></span>
					</h3>
					<br>
					<p style="color:black">Email:
						<span style="color:#777"><?php echo $email;?></span>
					</p>
					<p style="color:black">Phone:
						<span style="color:#777"><?php echo $phone;?></span>
					</p>
					<div class="caption">
						<div class="clearfix"> </div>
					</div>
					<div class="desc_single">
						<h5>Description</h5>
						<p><?php echo $desc;?></p>
					</div>
					<div class="occasional">
						<ul class="single_specific">
							<li>
								<span>Date of Birth :</span> <?php echo $dob;?></li>
							<li>
								<span>Address :</span> <?php echo $address;?></li>
							<li>
								<span>Profession :</span> <?php echo $prof;?></li>
							<li>
								<span>Prefered Language :</span> <?php echo $lang;?></li>
							<li>
								<span>Website :</span> <?php echo $web;?></li>
						</ul>

					</div>
					<div class="clearfix"></div>
					<div class="occasion-cart">
						<div class="chr single-item single_page_b">
							<form action="#" method="post">
							<br>
								<button type="submit" class="btn btn-info"><a href="edit.php"  style="color:white"> Edit Profile </a></button>
								<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								<br>
								<br>
								<div class="desc_single">
								<?php
						$query="select * from tbl_book";
						$result=mysqli_query($con,$query);
						$i=0;
						while($row=mysqli_fetch_array($result))
						{
							$i=$i+1;
						}
		?>
								<h5>Your Books: <?php echo $i ?></h5>
								<br>
								<button type="submit" class="btn btn-info"><a href="add_list.php"  style="color:white"> View Books </a></button>
								<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //home -->
</html>
<?php 
include('footer.php');
?>