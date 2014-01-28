<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="<?php echo site_url('admin/teams'); ?>">Teams</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Team</li>
    </ul>
    
    <h3><?php echo $form_title; ?></h3>

    <?php if($team->errors){
          echo "<div class='alert alert-error'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            $team->errors
          </div>";
          }
    ?>

    <form class="form-horizontal" method='POST' enctype="multipart/form-data" action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Name:</label>
          <div class="controls">
              <input name='team[name]' value='<?php echo $team->name ?>' type="text" id="inputName">
              <div class="text-error"><?php if($team->errors) echo $team->errors->on('name') ?></div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Division:</label>
          <div class="controls">
              <textarea name='team[division]' type="text"><?php echo $team->division ?></textarea>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Image:</label>
          <div class="controls">

              <?php if($team->image_url()): ?>
                <img class='img-polaroid' src='<?php echo $team->image_url() ?>' width='200'>
              <?php endif; ?>

              <input name='team_image' type="file">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Email:</label>
          <div class="controls">
              <input name='team[email]' value='<?php echo $team->email ?>' type="text">
              <div class="text-error"><?php if($team->errors) echo $team->errors->on('email') ?></div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Facebook:</label>
          <div class="controls">
              <input name='team[facebook]' value='<?php echo $team->facebook?>' type="text">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Twitter:</label>
          <div class="controls">
               <input name='team[twitter]' value='<?php echo $team->twitter?>' type="text">
          </div>
        </div>

        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/teams') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>