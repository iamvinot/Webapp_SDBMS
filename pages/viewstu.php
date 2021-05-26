<?php include_once('header.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-heading">Student Details</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<?php 
						$dept=$_POST['dept'];
									$yop=$_POST['yop'];
										
									?>
						
					</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
                                            <th>Reg No</th>
                                            <th>Name</th>
											<th>YOP</th>
											<th>Address</th>
											<th>Current Year</th>
											 
                                            
                                        </tr>
</thead><tbody>
						<?php
									
									
									
									
								$sql = "SELECT * FROM student_details WHERE `course_code`='$dept' AND `yop`='$yop' ";
						foreach($conn->query($sql) as $row)
						{
							echo '<tr><td>'.$row['regno'].'</td><td>'.$row['name'].'</td><td>'.$row['yop'].'</td><td>'.$row['address'].'</td><td>'.$row['year'].'</td>';
						}
						?>
								</tbody>		
                                   
                                </table>
                            </div>
                          
                                   <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		<script type="text/javascript">
		$('#date').datepicker({
 format: "yyyy/mm/dd",
    autoclose: true
});</script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<?php include_once('footer.php'); ?>