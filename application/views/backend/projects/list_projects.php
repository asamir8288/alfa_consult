<a href="<?php echo base_url(); ?>admin/project/add_edit_project" class="new-link">Add New project</a>

<?php if(count($activeProjects)){ ?>
<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 120px;">Image</th>   
        <th style="width: 120px;">Title</th>        
        <th style="width: 350px;">Description</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($activeProjects as $project) { ?>

        <tr>
            <td style="width: 120px;">
                <img style="width: 100px;" src="<?php echo static_url() . 'files/projects/' . $project['image']; ?>" />
            </td>                                    
            <td style="width: 120px;">
                <?php echo $project['title']; ?>
            </td>                       
            <td style="width: 350px;padding-right: 50px;">
                <?php echo substr($project['description'], 0, 200); ?>
            </td>        
            <td>
                <a href="<?php echo site_url('admin/project/project_image/' . $project['id']); ?>">Images</a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/project/add_edit_project/' . $project['id']); ?>">Edit</a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/project/delete_project/' . $project['id']); ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>
</table>

<?php } else{
    echo '<div style="margin-top: 20px;">There is no Projects</div>';
}
?>