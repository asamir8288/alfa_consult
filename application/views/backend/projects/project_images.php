<?php echo form_open_multipart($post_url); ?>
<ul id="form_list"> 
    <li>
        <label for="image">Image:</label>
        <input type="file" name="userfile" id="image" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])) : ''; ?>
   </li>    
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/project">Cancel</a>
    </li>
</ul>
<?php echo form_close(); ?>

<div>
    <?php foreach($projectImages as $img) { ?>
    <div class="project_img">
        <a href="<?php echo site_url('admin/project/delete_project_image/' . $img['id'] . '/' . $img['project_id']);?>">Delete</a>
        <img src="<?php echo static_url() . 'files/projects/' . $img['image'];?>" style="width: 215px;height: 161px;" />
    </div>
    
    <?php } ?>
</div>

