<?php include_once('header.php');
$alert = array();
$data = array( "course_code" => "",
			  "reg_no" => "",
			  "name" => "",
			  "yop" => "",
			  "address" => "",
			  "year" => "",
			  "last" => "",
			  );
$data_found = false;

if(isset($_POST['edit_student']) && !empty($_POST['edit_student'])) {
	$name=$_POST['name'];
	$deptcode=$_POST['dept'];
	$reg_no=$_GET['reg_no'];
	$yop=$_POST['yop'];
	$year=$_POST['year'];
	$last=$_POST['last'];
	$address=$_POST['address'];
	//$que="INSERT INTO student_details('course_code', 'reg_no', 'name', 'yop', 'address', 'phone_num', 'sem') VALUES({$deptcode}, '{$regno}', '{$name}', '{$yop}', '{$address}', '{$phone}', {$sem}));";
	$que="UPDATE student_details SET course_code={$deptcode}, regno='{$reg_no}', name='{$name}', yop='{$yop}', address='{$address}', year='{$year}', last={$last} WHERE regno={$reg_no}";
	var_dump($que);
	mysqli_query($sqliconn, $que);
	if(!count(mysqli_error_list($sqliconn))) {
		$alert["message"] = "Student details updated";
		$alert["type"] = "success";
	} else {
		$alert["message"] = "Student details update failed";
		$alert["type"] = "danger";
	}
}


if(isset($_GET['reg_no']) && !empty($_GET['reg_no'])) {
	//
	$sql = "SELECT * FROM student_details WHERE regno='" . $_GET["reg_no"] . "'";
	$result = $sqliconn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$data = $row;
		}
		$data_found = true;
	} else {
		$alert["message"] = "Invalid registration number!";
		$alert["type"] = "danger";
	}
}

if(isset($_POST['delete_student']) && !empty($_POST['delete_student'])) {
	$reg_no=$_GET['reg_no'];
	$que="DELETE FROM student_details WHERE reg_no={$reg_no}";
	mysqli_query($sqliconn, $que);
	$alert["message"] = "Student record successfully deleted.";
	$alert["type"] = "success";
}


?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Gateway - Edit Existing Student Data  </h3><br/>

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
							Enter the register no:
						</div>
						<div class="panel-body">
							<form >
								<div class="form-group">
									<input class="form-control" name="reg_no">
								</div>
								<input type="hidden" name="action" value="" >
								<div class="form-group">
									<button class="btn btn-primary btn-submit" data-action="edit">Edit</button>
									<button class="btn btn-danger btn-submit" data-action="delete">Delete</button>
								</div>
							</form>
						</div>
					</div>
					<?php if(isset($_GET["action"]) && ($_GET["action"] == "edit") && $data_found) { ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
							Edit Student Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" >
										<input type="hidden" name="edit_student" value="true">
                                        <div class="form-group">
                                            <label>Register Number:</label>
                                            <input class="form-control" disabled="" name="reg_no" value="<?php echo $_GET["reg_no"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input class="form-control" name="name" value="<?php echo $data["name"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Choose the Course</label>
                                            <select class="form-control" name="dept" >
											    <option>-----</option>
                                               <?php
													$sql = "SELECT * FROM course_details";
													foreach($conn->query($sql) as $row) {
														$sel = $data["course_code"];
														echo '<option value="'.$row['course_code'].'"' . (($sel == $row['course_code'])?"selected":"") . ' >'.$row['branch'].'</option>';
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Year of passing:</label>
                                            <input class="form-control" type="number" min="1993" max="9999" value="<?php echo $data['yop']; ?>" name="yop">
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <textarea rows="4" class="form-control" name="address"><?php echo $data['address']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Year:</label>
                                            <input class="form-control" name="year"  value="<?php echo $data['year']; ?>">
                                        </div>
										 <div class="form-group">

                                            <label>Last Three Digit of Reg No</label>
                                            <input class="form-control" name="last"  value="<?php echo $data['last']; ?>">
                                        </div>


                                        <button type="submit" class="btn btn-large btn-info">Update</button>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
					<?php } ?>
					<?php if(isset($_GET["action"]) && ($_GET["action"] == "delete") && $data_found) { ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
							Delete Student Details
                        </div>
                        <div class="panel-body">

							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>Course</th>
										<th>Reg No</th>
										<th>Name</th>
										<th>YOP</th>
										<th>Address</th>
										<th>Parent Phone Number</th>
										<th>Semester</th>
									</tr>
								</thead>
								<tbody>
										<?php foreach($data as $field) { ?>
										<td><?php echo $field; ?></td>
										<?php } ?>
								</tbody>
							</table>
							<div class="alert alert-danger">
								<p>Do you really want to delete this record? </p><p></p>
								<form method="POST">
									<button class="btn btn-danger">Yes, Confirm Record</button>
									<input type="hidden" name="delete_student" value="true" >
								</form>
							</div>
                        </div>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>
		<script>
			jQuery(document).ready(function($){
				$('.btn-submit').click(function() {
					$('input[name="action"]').val($(this).attr('data-action'));
					$(this).closest('form').submit();
				});
			});
		</script>
<?php include_once('footer.php'); ?>
