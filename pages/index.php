<?php include_once('header.php'); ?>

		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-heading">Welcome to SIMDROID - Administrator</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					 <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                             <th>Course Name</th>
											 <th>Branch</th>
											 <th>Total No of Semesters</th>

                                        </tr>
                                    </thead>

						<?php
							$branch=$_SESSION['deptid'];

								$sql = "SELECT * FROM course_details";
								$sessionarray=array();
						foreach($conn->query($sql) as $row)
						{
							echo '<tr><td><center>'.$row['course_code'].'</center></td><td>'.$row['course_name'].'</td><td>'.$row['branch'].'</td><td><center>'.$row['no_of_sem'].'</center></td>';
						$sessionarray[]=$row['course_code'];
						}
						$_SESSION['courses']=$sessionarray;
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
