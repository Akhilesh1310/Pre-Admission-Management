<?php include "header.php";?>
<?php include "config.php";?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">View Students</h4>
                                <div class="content-header-right " style="margin-left:150px;margin-top:-30px">
		<a href="add_student.php" class="btn btn-primary btn-sm">Add New</a>
    </div>
                           </div>
                           
                            <div class="content table-responsive table-full-width">
								<?php 
session_start();
				$sql = "SELECT * FROM `staff` WHERE `email` = '$email'";
           $result = mysqli_query($connect,$sql);
				?>
					    <?php if (!isset($_SESSION['email'])){
                               //echo "Welcome guest";
                           }
                           else{
                             ?>
                             <h4 style="color:white;"><?php  
                               echo "Welcome: " .$_SESSION['email'];
                           }?>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>School Name</th>
                                    	<th>Address</th>
                                    	<th>Mobile No</th>
                                    	<th>Parents Name</th>
                                    </thead>
                                    <?php 
            $count=1;
            while($fetch=mysqli_fetch_array($view)){ 
                    extract($fetch);
                ?>
                 <td > <?php echo $count++; ?></td> 
                                            <td><?php echo $fetch['name'];?></td> 
                                            
                                            <td><?php echo $fetch['school_name'];?></td> 
                                            
                                            <td><?php echo $fetch['address'];?></td> 
                                            
                                            <td><?php echo $fetch['contact_no'];?></td> 
                                            
                                            <td><?php echo $fetch['parents_name'];?></td> 

                                    <tbody>
                                        
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
<?php include "footer.php";?>_