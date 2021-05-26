<?php 

require_once('header.php'); 
$alert = array();
if(isset($_POST['action']) && ($_POST['action'] == 'increment')) {
	//global $sqliconn;
	$query = "UPDATE student_details SET year={$_POST['year']} WHERE yop = {$_POST['yop']}";
	mysqli_query($sqliconn, $query);
	$alert['message'] = "Semester details have been updated.";
	$alert['type'] = 'success';
	//mysqli_query($sqliconn, "UPDATE student_details SET sem=sem+1 WHERE sem <= 7");
}
?>
	<div id="page-wrapper">
            <div class="row">
				<?php if(count($alert)) { ?>
				<div class="alert alert-<?php echo $alert['type']; ?>">
					<p><?php echo $alert['message']; ?></p>
				</div>
				<?php } ?>
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
							Update Semester
						</div>
                        <div class="panel-body">
							<div class="row"><div class="col-md-6">
							<form method="POST">
								<input type="hidden" name="action" value="increment">
								<div class="form-group">
									<input placeholder="Year of passing" type="number" name="yop" class="form-control" min="2000" max="9999">
								</div>
								<div class="form-group">
									<input placeholder="New Year" type="number" name="year" class="form-control" min="1" max="8">
								</div>
								<button type="submit" class="btn btn-primary">Update Year</button>
							</form>
							</div></div>
                        </div>
					</div>
				</div>
			</div>
        <!-- /#page-wrapper -->
	
<?php require_once('footer.php'); ?>