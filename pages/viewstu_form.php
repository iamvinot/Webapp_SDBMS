<?php include_once('header.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Gateway - View Student Details</h3><br/>

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
                                    <form role="form" method="post" action="viewstu.php">

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
                                            <label>Choose the Year of passing</label>
                                            <select class="form-control" name="yop">
											<option>-----</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-large btn-info">View Student Details</button>

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
