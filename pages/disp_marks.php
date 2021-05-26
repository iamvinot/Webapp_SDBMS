<?php include_once('header.php'); ?>

		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-heading">Welcome to AECDROID<?php 
				
						
							echo $_SESSION['deptid']; ?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<?php $exam=$_POST['exam']; echo $exam.'Results'; ?>
            <div class="row">
                <div class="col-lg-12">
					 <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Regno</th>
                                             <th>Subject1</th>
											  <th>Subject2</th>
											  <th>Subject3</th>
											  <th>Subject4</th>
											  <th>Subject5</th>
											  <th>Subject6</th>
											  <th>Remarks</th>
											
                                        </tr>
                                    </thead>
									
						<?php
							//$branch=$_SESSION['deptid'];
							
							$regno=$_POST['reg_no'];
									
								$sql = "SELECT * FROM $exam WHERE username='$regno'";	
								
								$sessionarray=array();
						foreach($conn->query($sql) as $row)
						{
							echo '<tr><td><center>'.$row['username'].'</center></td><td>'.$row['sub_1'].'</td><td><center>'.$row['sub_2'].'</center></td><td><center>'.$row['sub_3'].'</center></td><td>'.$row['sub_4'].'</td><td><center>'.$row['sub_5'].'</center></td><td><center>'.$row['sub_6'].'</center></td><td><center>'.$row['remarks'].'</center></td>';
						
						}
						?>
										
                                   
                                </table>
                            </div>
                         
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		
<?php include_once('footer.php'); ?>
