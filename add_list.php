<?php
include('db_con.php');
?><?php
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
						<?php
						$query="select * from tbl_book";
						$result=mysqli_query($con,$query);
						$i=0;
						while($row=mysqli_fetch_array($result))
						{
							$i=$i+1;
						}
		?>
                        <span class="abtext"><?php echo $i ?></span>   						
                    </h4>

                    <div class="checkout-right">
						<h4 align='right'>
						<button type="submit" class="btn btn-info"><a href="add_new.php"  style="color:white"> Add Books </a></button>
                        </h4>
                        <table class="timetable_sub table-responsive">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Cover</th>
                                    <th>Book Name</th>
                                    <th>Author Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							 $email=$_SESSION['logid'];
							$query="select * from tbl_book where add_by='$email'";
						
							$result=mysqli_query($con,$query);
							$i=0;
							while($row=mysqli_fetch_array($result))
							{
								$i=$i+1;
										?> 
                                <tr class="rem">
                                    <td class="invert"><?php echo $i;  ?></td>
                                    <td class="invert-image">
                                        <a href="single_product.php">
                                            <img src="book_img/<?php echo $row['b_img']; ?>" onerror="this.onerror=null;this.src='book_img/default_bc.png';" alt=" " class="img-responsive">
                                        </a>
                                    </td>

                                    <td class="invert"><?php echo $row['bname']; ?></td>
                                    <td class="invert"><?php echo $row['aname']; ?></td>

                                    <td class="invert"><a href="single_product.php?id=<?php echo $row['id']; ?>" style="color:#34c663">View</a> <a href="edit_book.php?id=<?php echo $row['id']; ?>" style="color:#f7c052"> Edit</a><a href="delete_book.php?id=<?php echo $row['id']; ?>" style="color:#ff2010"> Delete</a></td>
                                    
                                </tr>

							<?php }?>  

                            </tbody>
                        </table>
                    </div>
          
                </div>

            </div>
        </div>
        <!--//checkout-->
<?php 
include('footer.php');
?>