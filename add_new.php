<?php
include('db_con.php');
?>
<?php

		$errors="";
		$msg="";
		if(isset($_POST['add']))
		{
			/* echo "hello";
			die(); */
			$bname=$_POST['bname'];
			$aname=$_POST['aname'];
			$publisher=$_POST['publisher'];
			$description=$_POST['description'];
			$dop=$_POST['dop'];
			$type=$_POST['type'];
			//$b_img=$_POST['b_img'];
	if(isset($_FILES['pic']['name'])|| !empty($_FILES['pic']['name']))
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
      elseif($file_size > 2097152){
         $errors='File size must be excately 2 MB';
      }
	  else
	  {
	  move_uploaded_file($file_tmp,"book_img/".$file_name);
	  }
	 }
	 else
	 {
		 $file_name = "";
	 }
		 
	if(isset($_FILES['pdf']['name'])|| !empty($_FILES['pdf']['name']))
	 {
		$pdf_file_name = $_FILES['pdf']['name'];
	 	echo $pdf_file_name;
		die(); 
      $file_size =$_FILES['pdf']['size'];
      $file_tmp =$_FILES['pdf']['tmp_name'];
      $file_type=$_FILES['pdf']['type'];
      $file_ext=strtolower(pathinfo($pdf_file_name, PATHINFO_EXTENSION));
      
      $expensions= array("pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose PDF file.";
      }
      elseif($file_size > 9097152){
         $errors='File size must be excately 2 MB';
      }
	  else
	  {
	  move_uploaded_file($file_tmp,"book_img/".$pdf_file_name);
	  }
	 }
	 else
	 {
		 $pdf_file_name = "";
	 }	 
	 $email=$_SESSION['logid'];
			$query="INSERT INTO `tbl_book` (`bname`, `aname`, `publisher`, `description`, `dop`, `type`, `b_img`,`pdf`,`add_by`) VALUES ('$bname', '$aname', '$publisher', '$description', '$dop', '$type', '$file_name', '$pdf_file_name','$email')";
			/* echo $query;
			die(); */
			$result=mysqli_query($con,$query); 
			if($result)
			{
				/* $errors="Book Added Successful! Please Sign In"; */
				header("location:add_list.php");
			}
			else
			{
				$errors="Failed!";	
			}
		}
	?>
<?php
include('header.php');
?>
<br>
<br>
<!--checkout-->
        <div class="innerf-pages section">
            <div class="container">
                <div class="privacy about">
                    <h4 class="rad-txt">
                        <span class="abtxt1">your books</span>
						:
                        <span class="abtext">3</span>                    
                    </h4>
						<h4 align='right'>
						<button type="submit" class="btn btn-info"><a href="add_list.php"  style="color:white"> Back </a></button>
                        </h4>
                    <div class="checkout-right">

                    </div>
				 <form action="" method="post" class="creditly-card-form shopf-sear-headinfo_form" enctype="multipart/form-data">

                    <div class="checkout-left">
					<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
								
									<div align="center" class="thumb-image">
							</ul>
								<br>
							<br>
											
							<div align="center" class="clearfix">
							Cover image			
							<input type="file" name="pic" class="btn btn-success" ><br>


									</div>
									<div align="center" class="clearfix">
							Select PDF
							<input type="file" name="pdf" class="btn btn-success" ><br>


									</div>
						</div>
					</div>
				</div>
                        <div class="col-md-8 address_form">
                            <h4>New Book Details:</h4>
                                <div class="creditly-wrapper wrapper">
                                    <div class="information-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Book Name: </label>
                                                <input class="billing-address-name form-control" type="text" name="bname" placeholder="What is the book name?">
                                            </div>
                                            <div class="first-row form-group">
                                                <div class="card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Author Name:</label>
                                                        <input class="form-control" type="text" name="aname" placeholder="Who is the author of the book?">
                                                    </div>
                                                </div>
                                                <div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Publisher: </label>
                                                        <input class="form-control" type="text" name="publisher" placeholder="Who published this book?">
                                                    </div>
                                                </div>
												<div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Description: </label>
                                                        <input class="form-control" type="text" name="description" placeholder="Describe this book...">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Date of Publish: </label>
                                                <input class="form-control" type="date" name="dop">
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Book Type: </label>
                                                <select class="form-control option-fieldf" name="type">
                                                    <option>Select Type</option>
                                                    <option>Art</option>
                                                    <option>Biography</option>
                                                    <option>Children</option>
                                                    <option>Comics</option>
                                                    <option>Educational</option>
                                                    <option>Fantasy</option>
                                                    <option>History</option>
                                                    <option>Music</option>
                                                    <option>Mystery</option>
                                                    <option>Plays</option>
                                                    <option>Recipes</option>
                                                    <option>Religion</option>
                                                    <option>Romance</option>
                                                    <option>Science</option>
                                                    <option>Sci-Fi</option>

                                                </select>
                                            </div>
                                        </div>
										 <div class="signup-btn">
										  <input id="btn-signup" type="submit" class="btn btn-info" name="add" value="Confirm Add">

                                    </div>
									<span style="color:red"><?php echo $errors;?></span>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="clearfix"> </div>

                    </div>

                </div>

            </div>
        </div>
        <!--//checkout-->
<?php 
include('footer.php');
?>