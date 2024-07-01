<?php include "header.php";?>
<?php include "config.php";?>
<?php 
$asd ="SELECT * FROM staff";
$view=mysqli_query($connect,$asd) or die(mysqli_error($connect));
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">View staff</h4>
                                <div class="content-header-right " style="margin-left:150px;margin-top:-30px">
		<a href="add_staff.php" class="btn btn-primary btn-sm">Add New</a>
    </div>
                           </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Email</th>
                                    	<th>Department</th>
                                    	<th>Conatct No</th>
                                    </thead>
                                    <?php 
            $count=1;
            while($fetch=mysqli_fetch_array($view)){ 
                    extract($fetch);
                ?>
                 <td > <?php echo $count++; ?></td> 
                                            <td><?php echo $fetch['s_name'];?></td> 
                                            
                                            <td><?php echo $fetch['email'];?></td> 
                                            
                                            <td><?php echo $fetch['department'];?></td> 
                                            
                                            <td><?php echo $fetch['contact_no'];?></td> 
                                            
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