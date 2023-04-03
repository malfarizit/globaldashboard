<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Production Importer</title>

</head>
<?php 
$isAdmin = false;
if($this->session->level='admin')
{
	$isAdmin = true;
}


?>
<body>
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<center><h3 class="box-title">Production</h3></center>
				<!-- <a class='pull-right btn btn-success btn-sm' href='<?php echo base_url(); ?>Export/generateXls'><i
						class="fa fa-file-excel-o"></i> Export</a> -->
				<a class='pull-left btn btn-primary btn-sm' href="javascript:void(0);" onclick="formToggle('importFrm');"><i
								class="plus"></i> Import</a>
				
				<a class='pull-left btn btn-success btn-sm' href='<?php echo base_url(); ?>Main/C_operation_qual'><i
						class="fa fa-file-excel-o"></i> Add Data</a>
			</div><!-- /.box-header -->

			<!-- Display status message -->
			<?php if(!empty($success_msg)){ ?>
			<div class="col-xs-12">
				<div class="alert alert-success"><?php echo $success_msg; ?></div>
			</div>
			<?php } ?>
			<?php if(!empty($error_msg)){ ?>
			<div class="col-xs-12">
				<div class="alert alert-danger"><?php echo $error_msg; ?></div>
			</div>
			<?php } ?>
				<div class="col-md-12" id="importFrm" style="display: none;">
					<form action="<?php echo base_url('Main/import2'); ?>" method="post" enctype="multipart/form-data">
						<input type="file" name="file" />
						<input type="submit" class="btn btn-primary btn-sm" name="importSubmit" value="IMPORT">
					</form>
				</div>
				<div class="table-responsive box-body">
					<table id="example2" class="table table-striped table-responsive">
						<thead class="thead-responsive">
							<tr>
								<th style='width:1px'>#</th>
								<th style='width:1px'>ID</th>
								<th style='width:1px'>Unit_Id</th>
								<th>Project_No</th>
								<th>Item_Type</th>
								<th>Size</th>
								<th nowrap>Cladtek Item No.</th>
								<th>Actual_Length</th>
								<th>Item</th>
								<th>Qty</th>
								<th nowrap>WOL Start Date</th>
								<th nowrap>WOL Finish Date</th>
								<th>WOL Machine</th>
								<th>WOL Welder ID</th>
								<th nowrap>Rework ADD Start Date</th>
								<th nowrap>Rework ADD Finish Date</th>
								<th>Rework ADD Machine</th>
								<th>Rework ADD WelderID</th>
								<th nowrap>R1Start Date</th>
								<th nowrap>R1Finish Date</th>
								<th>R1Machine</th>
								<th nowrap>R2Start Date</th>
								<th nowrap>R2Finish Date</th>
								<th>R2Machine</th>
								<th nowrap>R3Start Date</th>
								<th nowrap>R3Finish Date</th>
								<th>R3Machine</th>
								<th nowrap>FMStart Date</th>
								<th nowrap>FMFinish Date</th>
								<th>FMMachine</th>
								<th nowrap>FMRepair Date</th>
								<th>FMRepair Machine</th>
								<th>Unit</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
                    
				</div>

				<script>
					function formToggle(ID) {
						var element = document.getElementById(ID);
						if (element.style.display === "none") {
							element.style.display = "block";
						} else {
							element.style.display = "none";
						}
					}

				</script>
</body>

</html>
