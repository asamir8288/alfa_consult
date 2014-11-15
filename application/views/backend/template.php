<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/css/alfa.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/css/form.css"/>

        <?php echo $_styles; ?>
        <?php echo $_scripts; ?>
    </head>

    <body>
        <div id="wrapper">
            <div id="header">
                <a href="" class="logo-with-slogan"></a>
            </div>

            <div id="menu">
                <ul class="menu-list">
                    <li><a href="<?php echo site_url('admin/dashboard');?>">Home</a></li>
                    <li class="menu-separator">|</li>
                    <li><a href="<?php echo site_url('admin/site/about_us');?>">About Company</a></li>
                    <li class="menu-separator">|</li>
                    <li><a href="<?php echo site_url('admin/service');?>">Services</a></li>
                    <li class="menu-separator">|</li>
                    <li><a href="<?php echo site_url('admin/project');?>">Projects</a></li>
                    <li class="menu-separator">|</li>
                    <li><a href="<?php echo site_url('admin/site/licences_certificates');?>">Licences & Certificates</a></li>
                    <li class="menu-separator">|</li>
                    <li><a href="<?php echo site_url('admin/site/contact_us');?>">Contact Us</a></li>

                    <?php
                    $is_loggedin = $this->session->userdata('is_login');
                    if ($is_loggedin) {
                        ?>
                    <li style="margin-left: 305px;">
                            <a href="<?php echo base_url();?>admin/login/logout">Logout</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div id="container">
                <?php echo $content; ?>
            </div>

            <div style="clear: both;height: 15px;"></div>
        </div>
    </body>
</html>
