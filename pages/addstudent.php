<?php include_once('header.php'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">Welcome to Arunai SMS Gateway </h3><br/>
			
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
							<form role="form" method="post" action="mark_att.php">
								
								<div class="form-group">
									<label>Choose the Course</label>
									<select class="form-control" name="dept">
										<option>-----</option>
									   <?php	
											$sql = "SELECT * FROM course_details";
											foreach($conn->query($sql) as $row) {
												echo '<option value="'.$row['course_code'].'">'.$row['branch'].'</option>';
											}							
										?>
									</select>
								</div>
								 <div class="form-group">
									<label>Choose the Semester</label>
									<select class="form-control" name="sem">
									<option>-----</option>
										<option value="1">01</option>
										<option value="2">02</option>
										<option value="3">03</option>
										<option value="4">04</option>
										<option value="5">05</option>
										<option value="6">06</option>
										<option value="7">07</option>
										<option value="8">08</option>
									</select>
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
<?php include_once('footer.php'); ?>