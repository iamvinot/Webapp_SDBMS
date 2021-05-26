<?php include_once('header.php');
$alert = array();
if(isset($_POST['add_new_mark']) && !empty($_POST['add_new_mark'])) {
	$exam=$_POST['exam'];
	$regno=$_POST['reg_no'];
	$sub_1=$_POST['sub_1'];
	$sub_2=$_POST['sub_2'];
	$sub_3=$_POST['sub_3'];
	$sub_4=$_POST['sub_4'];
	$sub_5=$_POST['sub_5'];
	$sub_6=$_POST['sub_6'];
	$rem=$_POST['remarks'];
	//$que="INSERT INTO student_details('course_code', 'reg_no', 'name', 'yop', 'address', 'phone_num', 'sem') VALUES({$deptcode}, '{$regno}', '{$name}', '{$yop}', '{$address}', '{$phone}', {$sem}));";
	$que="INSERT INTO $exam VALUES ('{$regno}', '{$sub_1}', '{$sub_2}', '{$sub_3}', '{$sub_4}', '{$sub_5}', '{$sub_6}','{$rem}')";
	mysqli_query($sqliconn, $que);
	if(!count(mysqli_error_list($sqliconn))) {
		$alert["message"] = "Mark Details added to database";
		$alert["type"] = "success";
	} else {
		$alert["message"] = "Duplicate entry or Failed Please Enter in Modify";
		$alert["type"] = "error";
	}
}

if(isset($_POST['bulk_import']) && !empty($_POST['bulk_import'])) {
	$file = fopen($_FILES["csv_file"]["tmp_name"],"r");
	$data = fgetcsv($file);
	$exam=$_POST['exam'];
	while(! feof($file)) {
		$data = fgetcsv($file);
		$que="INSERT INTO $exam VALUES ({$data[0]}, '{$data[1]}', '{$data[2]}', '{$data[3]}', '{$data[4]}', '{$data[5]}', {$data[6]},{$data[7]})";
		mysqli_query($sqliconn, $que);
	}
	$alert["message"] = " $exam Mark Details added to database";
	$alert["type"] = "success";

	fclose($file);
}

?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Gateway - Add Marks </h3><br/>

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
                                            <label>Select Exam Type</label>
                                            <select class="form-control" name="exam">
											    <option value="cia_1">CIA 1</option>
												<option value="cia_2">CIA 2</option>
												<option value="model">Model</option>
												<option value="university_results">University Exam Results</option></select>
                                        </div>
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
							Add Mark Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php $_SELF ?>">
										<input type="hidden" name="add_new_mark" value="true">
                                        <div class="form-group">
                                            <label>Select Exam Type</label>
                                            <select class="form-control" name="exam">
											    <option value="cia_1">CIA 1</option>
												<option value="cia_2">CIA 2</option>
												<option value="model">Model</option>
												<option value="university_results">University Exam Results</option></select>
                                        </div>
                                        <div class="form-group">
                                            <label>Register Number:</label>
                                            <input class="form-control" name="reg_no">
                                        </div>
                                        <div class="form-group">
                                            <label>Sub1 Marks:</label>
                                            <input class="form-control" name="sub_1">
                                        </div>
										<div class="form-group">
                                            <label>Sub2 Marks:</label>
                                            <input class="form-control" name="sub_2">
                                        </div>
										<div class="form-group">
                                            <label>Sub3 Marks:</label>
                                            <input class="form-control" name="sub_3">
                                        </div>
										<div class="form-group">
                                            <label>Sub4 Marks:</label>
                                            <input class="form-control" name="sub_4">
                                        </div>
										<div class="form-group">
                                            <label>Sub5 Marks:</label>
                                            <input class="form-control" name="sub_5">
                                        </div>
										<div class="form-group">
                                            <label>Sub6 Marks:</label>
                                            <input class="form-control" name="sub_6">
                                        </div>
										<div class="form-group">
                                            <label>Remarks:</label>
                                            <input class="form-control" name="remarks">
                                        </div>

                                        <button type="submit" class="btn btn-large btn-info">Add Student Marks</button>

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
