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
						<form name="" method="post" action="sendsms.php">
                            <input type="textarea" id="message" name="message"/>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Reg No</th>
                                            <th>Name</th>
                                             <th>Parent Phone Number</th>
											 <th>Mark Absent</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
						
 $sql = 'SELECT *
 FROM student_details';
foreach($conn->query($sql) as $row)
{
	echo '<tr><td>'.$row['reg_no'].'</td><td>'.$row['name'].'</td><td>'.$row['phone_num'].'</td><td><input type="checkbox" value="'.$row['phone_num'].' name="'.$row['reg_no'].'""></td>';
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
    <script>
		jQuery(document).ready(function($) {
			$('#dataTables-example').DataTable({
					responsive: true
			});
		});
    </script>
<?php include_once('footer.php'); ?>