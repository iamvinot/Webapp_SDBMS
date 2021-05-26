<?php require_once('header.php'); 
$results = array();
$query = '';
if(isset($_POST['generateReport']) && !empty($_POST['generateReport'])) {
	$year = $_POST['year'];
	$month = $_POST['month'];
	
	$query = "SELECT * FROM absentees_details WHERE date BETWEEN '{$year}/{$month}/01' AND '{$year}/{$month}/31'";
	$results = mysqli_query($sqliconn, $query);
}

?>
<div id="page-wrapper">
	<div class="panel">
		<div class="panel-header">
			
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<form method="POST">
						<input type="hidden" name="generateReport" value="true">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<select name="month" class="form-control">
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="number" class="form-control" placeholder="Year" name="year">
								</div>
							</div>
						</div>
						<button type="submit">Go</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="panel">
		<div class="panel-heading">
			
		</div>
		<div class="panel-body">
		<?php
			var_dump($query);
			var_dump($results);
			die(); ?>
		</div>
	</div>
</div>
<?php require_once('footer.php'); ?>