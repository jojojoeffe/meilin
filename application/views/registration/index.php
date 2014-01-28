
<div class="content">
    <div class="container">
        <div class="border">
            <div class="isi">

                <h2> Form Registration <span class="dot">.</span></h2>

                    <?php
                    if ($registration->errors) {
                        echo "<div class='alert alert-error'>
                              <button type='button' class='close' data-dismiss='alert'>&times;</button>
                              $registration->errors
                             </div>";
                    }
                    ?>
                <br></br>
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
                            <label class="control-label">Email Address:</label>
                            <div class="controls">
                                <input name='registration[email_address]' value='<?php echo $registration->email_address ?>'  type="text" >
                                <div class="text-error"><?php if ($registration->errors)
                                    echo $registration->errors->on('email_address') ?></div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Phone Number:</label>
                            <div class="controls">
                                <input name='registration[phone_number]' value='<?php echo $registration->phone_number ?>'  type="text" >
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Layanan yang akan diikuti:</label>
                            <div class="controls">
                                <input name='registration[category_service]' value='<?php echo $registration->category_service ?>'  type="text" >
                                <div class="text-error"><?php if ($registration->errors)
                                    echo $registration->errors->on('category_services') ?></div>
                            </div>
                        </div>
                        
                        

                        <div class="control-group">
                            <div class="controls pull-right">
                                <button class="btn btn-success">Register</button>
                            </div>
                        </div>
                    </form>


                </div>



            </div>
        </div>
    </div>
</div>