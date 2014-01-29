<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Part Event</li>
    </ul>
    
    <h2><?php echo $form_title; ?></h2>

    <form class="form-horizontal" method='POST' action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Part:</label>
          <div class="controls">
              <input name='part_event[part]' value='<?php echo $part_event->part ?>'  type="text" >
              <div class="text-error"><?php if($part_event->errors) echo $contact->errors->on('part') ?></div>
          </div>
        </div>

        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/part_events') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>