<a href="<?php echo base_url(); ?>admin/service/add_edit_service" class="new-link">Add New Service</a>

<?php if(count($activeServices)){ ?>
<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 120px;">Image</th>   
        <th style="width: 120px;">Title</th>        
        <th style="width: 350px;">Description</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($activeServices as $service) { ?>

        <tr>
            <td style="width: 120px;">
                <img style="width: 100px;" src="<?php echo static_url() . 'files/services/' . $service['image']; ?>" />
            </td>                                    
            <td style="width: 120px;">
                <?php echo $service['title']; ?>
            </td>                       
            <td style="width: 350px;padding-right: 50px;">
                <?php echo substr($service['description'], 0, 200); ?>
            </td>        
            <td>
                <a href="<?php echo site_url('admin/service/add_edit_service/' . $service['id']); ?>">Edit</a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/service/delete_service/' . $service['id']); ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>
</table>

<?php } else{
    echo '<div style="margin-top: 20px;">There is no Services</div>';
}
?>