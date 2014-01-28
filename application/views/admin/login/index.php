<!DOCTYPE html>
<!-- HTML5 -->

<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>

    <h1>

        Please Login</h1>
    <?php echo form_open('admin/login/proses'); ?>
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo form_input('username') ?></td>
            <td><font color="#ef4423"><?php echo form_error('username'); ?></font></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo form_password('password'); ?></td>
            <td><font color="#ef4423"><?php echo form_error('password'); ?></font></td>
        </tr>
        <tr>
            <td colspan="4" align="middle"><?php echo form_submit('submit', 'Login'); ?></td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</html>