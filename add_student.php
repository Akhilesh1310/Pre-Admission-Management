

<?php include "config.php";?>
<?php 
// define('PATH','');
if(isset($_POST['submit']))
{  
  extract($_POST);             
  $add="insert into student(name,school_name,address,contact_no,parents_name) values('$name','$school_name','$address','$contact_no','$parents_name')";        
  $result=mysqli_query($connect,$add) or die(mysqli_error($connect));
  if($result)
  {
    echo "<script>";
    echo "alert('Inserted Successfully..!');";
    echo "window.location.href='view_student.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Error in insert');";
    echo "window.location.href='view_student.php';";
    echo "</script>";
  }
}
?>
<?php include "header.php";?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Student</h4>
                            </div>
                            <div class="content">
                                <form method="post">
                                   

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name" 
                                                name="name">
                                            </div>
                                        </div>
</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>School Name</label>
                                                <input type="text" class="form-control" placeholder="Enter School Name" 
                                                name="school_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Enter your Permant address" 
                                                name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Contact No" 
                                                name="contact_no">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>parents name</label>
                                                <input type="text" class="form-control" placeholder="Enter Your parents name" 
                                                name="parents_name">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div><footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">
                        </a>
                        
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
