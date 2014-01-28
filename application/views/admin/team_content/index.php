<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
        <li class="active">Team Content</li>
    </ul>



    <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Title</th>
            <th>Description </th>
            <th>Action</th>
        </tr>

        <?php foreach ($contents as $content): ?>
            <tr>
                <td><?php echo $content->title; ?></td>
                <td><?php echo $content->description; ?></td>
                <td ><a href='<?php echo site_url('admin/Team_contents/edit/' . $content->id); ?>' class="btn">Edit</a>

                </td>
            </tr>

        <?php endforeach; ?>
    </table>


</div>