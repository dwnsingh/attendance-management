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

	<div class="row" style="margin-top: 20px;">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header bg-info text-white"><h5>Teaching Courses</h5></div>
				<div class="card-body">
					
					<table class="table">
						<thead>
							<tr>
							<th>Course Number</th>
							<th>Course name</th>
							<th>Add Attendance</th>
							</tr>
						</thead>
						<tbody>
						<?php if(count($input)):?>
						<?php $x = 0;$y = 1;?>
						<?php foreach ($input as $feed):?>	

						<tr>
				
						<td><?= $feed[$x]->courseId;?></td>
						<td><?= $feed[$y]->courseName;?></td>
						<td><?= 
							form_open('Faculty/addAttendance'),
							form_hidden('id',$feed[$x]->courseId),
							form_submit(['name'=>'submit','value'=>'Add','class'=>'btn btn-primary']),
							form_close();
						?>
						</td>
						</tr>

						<?php endforeach;?>


						<?php else:?>
						<tr>
						<td colspan="2">No data found</td>
						</tr>
						<?php endif;?>
							
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>