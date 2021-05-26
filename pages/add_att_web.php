<?php include_once('header.php'); ?>

<?php
error_reporting(0);
ini_set('display_errors', 0);
if(isset($_GET['remarks'])){
if($_GET['remarks']==success)
{
	echo '<script type="text/javascript">alert("Data Uploded Successfully"); </script>';
}
else if($_GET['remarks']==failure)
{
	echo '<script type="text/javascript">alert("Data Uploded Failed.Please Contact Admin if problem Exists"); </script>';
	}}
	else
	{

	}
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">SIMDROID -Add Attendance Details </h3><br/>

		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					CHOOSE YOUR DEPARTMENT AND SEMESTER
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<form role="form" method="post" action="addattandance.php">
								Date:<input type="text" id="date" name="date"/>
								<div class="form-group">
									<label>Choose the Course</label>
									<select class="form-control" name="dept">
										<option>-----</option>
									   <option value="ECE">ECE</option>
										<option value="CSE">CSE</option>
										<option value="IT">IT</option>
										<option value="EEE">EEE</option>
										<option value="EIE">EIE</option>
										<option value="CIVIL">CIVIL</option>
										<option value="MECH">MECH</option>
										<option value="AUTO">AUTO</option>
									</select>
								</div>
								 <div class="form-group">
									<label>Choose the Year</label>
									<select class="form-control" name="year">
									<option>-----</option>
										<option value="1">01</option>
										<option value="2">02</option>
										<option value="3">03</option>
										<option value="4">04</option>

									</select>
								</div>
								<div class="form-group">
									<label>Choose the Section</label>
									<select class="form-control" name="section">
									<option>-----</option>
										<option value="a">A</option>
										<option value="b">B</option>
										<option value="c">C</option>

									</select>
								</div>
								<div class="form-group">
									<label>ABSENTEES</label>
									<div class="img-push">
                      <input class="form-control input-sm" name="absentees" type="text" placeholder="Seperate reh no with , comma">
                    </div>
								</div>


								<button type="submit" class="btn btn-large btn-info">Mark Attendance</button>

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
<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function() {
		$('#date').datepicker({
 format: "yyyy/mm/dd",
    autoclose: true
});
		});</script>

<?php include_once('footer.php'); ?>
