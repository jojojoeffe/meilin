<div class="container">
		<ul class="breadcrumb">
  			<li><a href="#">Dashboard</a> <span class="divider">/</span></li>
  			<li class="active">Teams</li>
		</ul>
		
		<div class="row">
			<div class="span12">
				<a href='<?php echo site_url('admin/teams/add'); ?>' class="btn btn-success pull-right">
					Add Team
				</a>
			</div>
		</div>
		<hr>
		<table class="table table-bordered table-hover">
			<tr>
				<th>Name</th>
				<th>Images</th>
				<th>Division</th>
				<th>Email</th>
				<th>Facebook</th>
                                <th>Twitter</th>
				<th>Action</th>
			</tr>

			<?php foreach($teams as $team): ?>
				<tr>
					<td>
					<?php echo $team->name; ?>
					</td>
					<td><img src="<?php  echo $team->image_url() ?>" alt=""></td>
					<td><?php echo $team->division; ?></td>
					<td><?php echo $team->email; ?></td>
					<td><?php echo $team->facebook; ?></td>
                                        <td><?php echo $team->twitter; ?></td>
					<td>
						<a href='<?php echo site_url('admin/teams/edit/'.$team->id); ?>' class="btn">Edit</a>
						<a href='<?php echo site_url('admin/teams/destroy/'.$team->id); ?>' class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			
		</table>

	</div>