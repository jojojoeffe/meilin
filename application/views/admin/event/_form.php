<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="<?php echo site_url('admin/events'); ?>">Event</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Event</li>
    </ul>
    
    <h2><?php echo $form_title; ?></h2>

    <form class="form-horizontal" method='POST' action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Part:</label>
          <div class="controls">
              <input name='event[part]' value='<?php echo $event->part ?>'  type="text" >
              <div class="text-error"><?php if($event->errors) echo $event->errors->on('part') ?></div>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Date :</label>
          <div class="controls">
              <input name='event[date]' value='<?php echo $event->date ?>'  type="text" >
              <div class="text-error"><?php if($event->errors) echo $event->errors->on('date') ?></div>
          </div>
        </div>
        
         <div class="control-group">
          <label class="control-label">Section :</label>
          <div class="controls">
              <textarea name='event[section]' type="text"><?php echo $event->section ?></textarea>
              <div class="text-error"><?php if($event->errors) echo $event->errors->on('section') ?></div>
          </div>
        </div>
        
       
        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/events') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>