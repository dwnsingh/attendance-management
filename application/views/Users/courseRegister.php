<?php include('header.php');?>

<div class="container" style="margin-top: 60px;">
	

	<div class="row">
		
		<div class="col-md-6 ">
			<?php foreach ($user as $ud):?>
			<h5>
			 <?=$ud->FirstName;?>
			 <?=$ud->LastName; ?>
			</h5>
			<?php endforeach;?>

		</div>
		
	</div>
	<?php if($msg = $this->session->flashdata('failed')){?>
		<div class="row">
			<div class="col-md-6">
				<div class="alert alert-danger"><?=$msg?></div>
			</div>
		</div>
	<?php }?>
	
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-7 offset-md-2">
			<div class="card">
				<div class="card-header bg-info text-white"><h5>Available Courses</h5></div>
				<div class="card-body">
					
					<table class="table">
						<thead>
							<tr>
							<th>Choose</th>
							<th>Course Number</th>
							<th>Course name</th>
							</tr>
						</thead>
						<tbody>

						<?php if(count($input)):?>
						<?php echo form_open('User/courseSubmit');?>
						<?php foreach ($input as $feed):?>	

						<tr>
				
						<td><input type="checkbox" name="mycheck[]" value=<?=$feed->courseId;?> <?php echo set_checkbox('mycheck', $feed->courseId); ?> /></td>
						<td><?= $feed->courseId;?></td>
						<td><?= $feed->courseName;?></td>

						</tr>

						<?php endforeach;?>


						<?php else:?>
						<tr>
						<td colspan="3">No data found</td>
						</tr>
						<?php endif;?>

						</tbody>
					</table>
					
				</div>
				<?php if(count($input)):?>
				<div class="card-footer">
						<?php echo form_submit(['class'=>'btn btn-primary','type'=>'submit','value'=>'Submit']);?>
						<?php echo form_close();?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>