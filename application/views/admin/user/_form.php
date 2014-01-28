<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="<?php echo site_url('admin/users'); ?>">Users</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>User</li>
    </ul>
    
    <h2><?php echo $form_title; ?></h2>

    <?php if($user->errors)
     {
          echo "<div class='alert alert-error'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            $user->errors
          </div>";
     }
    ?>

    <form class="form-horizontal" method='POST' action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Name:</label>
          <div class="controls">
              <input name='user[name]' value='<?php echo $user->name ?>'  type="text" >
              <div class="text-error"><?php if($user->errors) echo $user->errors->on('name') ?></div>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Username:</label>
          <div class="controls">
              <input name='user[username]' value='<?php echo $user->username ?>'  type="text" >
              <div class="text-error"><?php if($user->errors) echo $user->errors->on('username') ?></div>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Password:</label>
          <div class="controls">
              <input name='user[password]' value='<?php echo $user->password ?>'  type="text" >
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Email:</label>
          <div class="controls">
              <input name='user[email]' value='<?php echo $user->email ?>'  type="text" >
              <div class="text-error"><?php if($user->errors) echo $user->errors->on('email') ?></div>
          </div>
        </div>
        

        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/users') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>