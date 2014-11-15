<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (isset($page_title)) ? $page_title : '';?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>layout/css/alfa.css"/>
</head>

<body>
<div id="wrapper">
	<div id="header">
    	<a href="<?php echo base_url();?>" class="logo-with-slogan"></a>
                
        <a href="" class="download-brochure"></a>
        <div class="social-network-links">
        	<a href=""><img src="<?php echo base_url();?>layout/images/fb-icon.png" width="16" height="16" /></a>
            <a href=""><img src="<?php echo base_url();?>layout/images/twitter-icon.png" width="16" height="16" /></a>
        </div>
    </div>
    
    <div id="menu">
    	<ul class="menu-list">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="menu-separator">|</li>
            <li><a href="<?php echo base_url();?>about-us">About Company</a></li>
            <li class="menu-separator">|</li>
            <li><a href="<?php echo base_url();?>service">Services</a></li>
            <li class="menu-separator">|</li>
            <li><a href="<?php echo base_url();?>project">Projects</a></li>
            <li class="menu-separator">|</li>
            <li><a href="<?php echo base_url();?>licences-certificates">Licences & Certificates</a></li>
            <li class="menu-separator">|</li>
            <li><a href="<?php echo base_url();?>contact-us">Contact Us</a></li>
        </ul>
    </div>
    
    <div id="container">
    	<?php echo $content;?>
    </div>
    
    <div style="clear: both;height: 15px;"></div>
    <div id="footer">&copy; Copyright 2014</div>
</div>
</body>
</html>
