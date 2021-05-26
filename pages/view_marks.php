<?php include_once('header.php'); ?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">Gateway - View Marks</h3><br/>

		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				Enter Exam And Register Number of Student.
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<form role="form" method="post" action="disp_marks.php">

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

								<button type="submit" class="btn btn-large btn-info">View Marks</button>

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
