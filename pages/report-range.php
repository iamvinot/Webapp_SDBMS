<?php require_once('header.php'); 
$results = array();
$alert = array();
if(isset($_POST['generateReport']) && !empty($_POST['generateReport'])) {
	$query = "SELECT * FROM absentees_details WHERE date BETWEEN #{$_POST['fromDate']}# AND #{$_POST['toDate']}#";
	$results = mysqli_query($sqliconn, $query);
}
?>

<div id="page-wrapper">
	<div class="panel">
		<div class="panel-heading">
			
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<form method="POST">
						<input type="hidden" name="generateReport" value="true">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="date" class="form-control date-range" name="fromDate">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="date" class="form-control date-range" name="toDate">
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
			$fromDate = DateTime::createFromFormat( $_POST['fromDate'], "d/m/Y");
			var_dump($fromDate);
			var_dump($fromDate->format('Y-m-d'));
			var_dump($results);
			die(); ?>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
$('.date-range').datepicker({
format: "yyyy/mm/dd",
autoclose: true
});
});
</script>

<?php require_once('footer.php'); ?>