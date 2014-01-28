<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li><a href="<?php echo site_url('admin/contacts'); ?>">Contact</a> <span class="divider">/</span></li>
        <li class="active"><?php echo $action; ?>Contact</li>
    </ul>
    
    <h2><?php echo $form_title; ?></h2>

    <form class="form-horizontal" method='POST' action='<?php echo $form_action; ?>'>
        <div class="control-group">
          <label class="control-label">Title:</label>
          <div class="controls">
              <input name='contact[title]' value='<?php echo $contact->title ?>'  type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('title') ?></div>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Region :</label>
          <div class="controls">
              <input name='contact[Region]' value='<?php echo $contact->region ?>'  type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('region') ?></div>
          </div>
        </div>
        
         <div class="control-group">
          <label class="control-label">Province :</label>
          <div class="controls">
              <input name='contact[province]' value='<?php echo $contact->province ?>'  type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('province') ?></div>
          </div>
        </div>
        
         <div class="control-group">
          <label class="control-label">Country:</label>
          <div class="controls">
              <input name='contact[country]' value='<?php echo $contact->title ?>'  type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('country') ?></div>
          </div>
        </div>
        
         <div class="control-group">
          <label class="control-label">Email:</label>
          <div class="controls">
              <input name='contact[email]' value='<?php echo $contact->email ?>'  type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('email') ?></div>
          </div>
        </div>
        
         <div class="control-group">
          <label class="control-label">Tel-local:</label>
          <div class="controls">
              <input name='contact[tel_local]' value='<?php echo $contact->tel_local ?>'  type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('tel_local') ?></div>
          </div>
        </div>
        
         <div class="control-group">
             <label class="control-label">Tel-inter:</label>
          <div class="controls">
              <input name='contact[tel_inter]' value='<?php echo $contact->tel_inter ?>' type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('tel_inter') ?></div>
          </div>
        </div>
        
        <div class="control-group">
             <label class="control-label">Fax:</label>
          <div class="controls">
              <input name='contact[fax]' value='<?php echo $contact->fax ?>' type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('fax') ?></div>
          </div>
        </div>
        <div class="control-group">
             <label class="control-label">Whatsap-Line:</label>
          <div class="controls">
              <input name='contact[whatsap_line]' value='<?php echo $contact->whatsap_line  ?>' type="text" >
              <div class="text-error"><?php if($contact->errors) echo $contact->errors->on('whatsap_line') ?></div>
          </div>
        </div>
        
        

        <div class="control-group">
          <div class="controls pull-right">
              <button href='<?php echo site_url('admin/contacts') ?>' class="btn">Cancel</button>
              <button class="btn btn-success">Update</button>
          </div>
        </div>
    </form>
  </div>