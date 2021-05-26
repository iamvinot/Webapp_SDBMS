<?php include_once('header.php'); ?>

		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-heading">Welcome to SimDROID<?php 


							echo $_SESSION['deptid']; ?></h3>
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
                                            <th>DATE</th>
                                             <th>Course Name</th>
											 <th>Year</th>
											 <th>Section</th>
											 <th>Absentees</th>

                                        </tr>
                                    </thead>

						<?php
							//$branch=$_SESSION['deptid'];
							$date=$_POST['date'];
							$dept=$_POST['dept'];
							$year=$_POST['year'];
							$section=$_POST['section'];

								$sql = "SELECT * FROM aecdroid_absentees WHERE `date`='$date' AND `dept`='$dept' AND `year`='$year' AND `section`='$section'";

								$sessionarray=array();
						foreach($conn->query($sql) as $row)
						{
							echo '<tr><td><center>'.$row['date'].'</center></td><td>'.$row['dept'].'</td><td>'.$row['year'].'</td><td><center>'.$row['section'].'</center></td><td><center>'.$row['absentees'].'</center></td>';

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
