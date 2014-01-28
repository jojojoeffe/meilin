<div class="container">

		<ul class="breadcrumb">
  			<li><a href="#">Dashboard</a> <span class="divider">/</span></li>
  			<li class="active">Users</li>
		</ul>
		
		<div class="row">
			<div class="span12">
				<a href='<?php echo site_url('admin/users/add'); ?>' class="btn btn-success pull-right">
					Add User
				</a>
			</div>
		</div>

		<hr>
		<table class="table table-bordered table-hover">
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			
			<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->email; ?></td>
					<td >
						<a href='<?php echo site_url('admin/users/index/'.$user->id); ?>' class="btn btn-info">View</a>
						<a href='<?php echo site_url('admin/users/edit/'.$user->id); ?>' class="btn">Edit</a>
						<a href='<?php echo site_url('admin/users/destroy/'.$user->id); ?>' class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			
		</table>

		<?php
			if($this->uri->segment(4)==NULL){
				echo "*klik view for detail";
			}else{
				echo "<table class='table table-bordered table-hover'>";
					echo "<tr>";
						echo "<td> Nama </td>";
						echo "<td> $detailuser->name </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td> Username </td>";
						echo "<td> $detailuser->username </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td> Password </td>";
						echo "<td> $detailuser->password </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td> Email </td>";
						echo "<td> $detailuser->email </td>";
					echo "</tr>";
				echo "</table>";
			}
		?>
		

		<div align="center" class="pagination">
		  <ul>
		    <li><a href="#">Prev</a></li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">Next</a></li>
		  </ul>
		</div>

	</div>