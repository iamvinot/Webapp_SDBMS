<?php include_once('header.php');
$alert = array();
if(isset($_POST['add_new_student']) && !empty($_POST['add_new_student'])) {
	$name=$_POST['name'];
	$deptcode=$_POST['dept'];
	$regno=$_POST['reg_no'];
	$yop=$_POST['yop'];
	$year=$_POST['year'];
	$ltd=$_POST['ltd'];
	$address=$_POST['address'];
	//$que="INSERT INTO student_details('course_code', 'reg_no', 'name', 'yop', 'address', 'phone_num', 'sem') VALUES({$deptcode}, '{$regno}', '{$name}', '{$yop}', '{$address}', '{$phone}', {$sem}));";
	$que="INSERT INTO student_details VALUES ({$deptcode}, '{$regno}', '{$name}', '{$address}','{$yop}', '{$year}', '{$ltd}')";
	mysqli_query($sqliconn, $que);
	if(!count(mysqli_error_list($sqliconn))) {
		$alert["message"] = "Student details added to database";
		$alert["type"] = "success";
	} else {
		$alert["message"] = "Student details were not added to database";
		$alert["type"] = "error";
	}
}

if(isset($_POST['bulk_import']) && !empty($_POST['bulk_import'])) {
	$file = fopen($_FILES["csv_file"]["tmp_name"],"r");
	$data = fgetcsv($file);
	while(! feof($file)) {
		$data = fgetcsv($file);
		$que="INSERT INTO student_details VALUES ({$data[0]}, '{$data[1]}', '{$data[2]}', '{$data[3]}', '{$data[4]}', '{$data[5]}', {$data[6]},{$data[7]})";
		mysqli_query($sqliconn, $que);
	}
	$alert["message"] = "Student details added to database";
	$alert["type"] = "success";

	fclose($file);
}

?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Gateway - Add New Student Detail </h3><br/>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<?php if(count($alert)) { ?>
					<div class="alert alert-<?php echo $alert["type"]; ?>">
						<p><?php echo $alert['message']; ?>
					</div>
					<?php } ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							Bulk Import (CSV)
						</div>
						<div class="panel-body">
							<form method="post" enctype="multipart/form-data">
								<input type="hidden" name="bulk_import" value="true">
								<div class="form-group">
									<input class="form-control" type="file" name="csv_file">
								</div>
								<div class="form-group">
									<button class="btn btn-primary" type="submit">Import</button>
								</div>
							</form>
						</div>
					</div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
							Add New Student Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php $_SELF ?>">
										<input type="hidden" name="add_new_student" value="true">
                                        <div class="form-group">
                                            <label>Register Number:</label>
                                            <input class="form-control" name="reg_no">
                                        </div>
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Choose the Course</label>
                                            <select class="form-control" name="dept">
											    <option>-----</option>
                                               <?php
 $sql = "SELECT *
 FROM course_details";
foreach($conn->query($sql) as $row)
{
	echo '<option value="'.$row['course_code'].'">'.$row['branch'].'</option>';
}

										?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Year of passing:</label>
                                            <input class="form-control" type="number" min="1993" max="9999" value=""<?php echo date( "Y"); ?>" name="yop">
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <textarea rows="4" class="form-control" name="address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Current Year</label>
                                            <input class="form-control" name="year">
                                        </div>
										 <div class="form-group">
                                            <label>Last Three Digits of Register Number</label>
                                            <input class="form-control" name="ltd">

                                        </div>


                                        <button type="submit" class="btn btn-large btn-info">Add Student</button>

                                        <button type="reset" class="btn btn-large btn-info">Reset</button>
                                    </form>
                                </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include_once('footer.php'); ?>
