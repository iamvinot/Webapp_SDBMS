<?php include_once('header.php'); ?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-heading">Mark Attendance for Students</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<form method="post" action="sendsms.php" >
						
                            Date:<input type="text" id="date" name="date"/>
							Message:<input type="textarea" id="message" name="message" size="75" value="Message from Arunai Engineering College:Your Son/Daughter is absent today. Please Inform the HOD with proper Reason."/>
                        
					<?php 
					$dept=$_POST['dept'];
									$sem=$_POST['sem'];
									
									
									echo '<input type="hidden" id="deptcode" name="deptcode" value="'.$dept.'"/>
						
						<input type="hidden" id="sem" name="sem" value="'.$sem.'"/>';
					?>	
					</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                        <tr>
                                            <th>Reg No</th>
                                            <th>Name</th>
                                             <th>Parent Phone Number</th>
											 <th>Mark Absent</th>
                                            
                                        </tr>
                                    
									
						<?php
									
									
							$sql = "SELECT * FROM student_details WHERE `course_code`='$dept' AND `sem`='$sem' ";
						foreach($conn->query($sql) as $row)
						{
							echo '<tr><td>'.$row['reg_no'].'</td><td>'.$row['name'].'</td><td>'.$row['phone_num'].'</td><td><input type="checkbox" value="'.$row['reg_no'].'" name="reg_num[]"/></td>';
						}
						?>
										
                                   
                                </table>
                            </div>
                            <input type="submit" name="submit" value="Save Attendance and Send SMS" class="btn btn-danger"/>
               </form>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		
		<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function() {
		$('#date').datepicker({
 format: "yyyy/mm/dd",
    autoclose: true
});
		});</script>
<?php include_once('footer.php'); ?>