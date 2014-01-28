<div class="container">
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Headerlogos</li>
    </ul>

   
    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Name</th>
            <th>Image</th>
        </tr>

        <?php foreach ($headerlogos as $headerlogo): ?>
            <tr>
                <td>
                    <?php echo $headerlogo->name; ?>
                </td>
                <td><img src="<?php echo $headerlogo->image_url() ?>" alt=""></td>
               
                <td>
                    <a href='<?php echo site_url('admin/headerlogos/edit/' . $headerlogo->id); ?>' class="btn">Edit</a>
                    </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>