<div class="container">
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
                <li class="active">Register</li>
            </ul>
        </div>
    </div>
</div>

<div class="container">


    <?php
    if ($registration->errors) {
        echo "<div class='alert alert-error'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            $registration->errors
          </div>";
    }
    ?>

    <form class="form-horizontal" method='POST' action='<?php echo $form_action; ?>'>
        <div class="control-group">
            <label class="control-label">Name:</label>
            <div class="controls">
                <input name='registration[name]' value='<?php echo $registration->name ?>'  type="text" >
                <div class="text-error"><?php if ($registration->errors)
        echo $registration->errors->on('name') ?></div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">registrationname:</label>
            <div class="controls">
                <input name='registration[registrationname]' value='<?php echo $registration->registrationname ?>'  type="text" >
                <div class="text-error"><?php if ($registration->errors)
                    echo $registration->errors->on('registrationname') ?></div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Password:</label>
            <div class="controls">
                <input name='registration[password]' value='<?php echo $registration->password ?>'  type="text" >
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Email:</label>
            <div class="controls">
                <input name='registration[email]' value='<?php echo $registration->email ?>'  type="text" >
                <div class="text-error"><?php if ($registration->errors)
                    echo $registration->errors->on('email') ?></div>
            </div>
        </div>


        <div class="control-group">
            <div class="controls pull-right">
                <button href='<?php echo site_url('admin/registrations') ?>' class="btn">Cancel</button>
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>


</div>
