<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php $this->load->view('template/head') ?>

<body>

<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href=""><img src="images/logo.png" alt="" /></a></div>
    
    <div class="sidebarSep mt0"></div>
    
    <?php $this->load->view('template/navigation') ?>


<!-- Right side -->
<div id="rightSide">
	<!-- Top fixed navigation -->
    <?php $this->load->view('template/fixed_nav') ?>
    
    <!-- Title area -->
    <?php $this->load->view('template/title_area'); ?>
    
    <div class="line"></div>
    
    <!-- Page statistics and control buttons area -->
    <?php $this->load->view('template/statistic'); ?>
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Note -->
        <?php $this->load->view('template/note'); ?>
        
        <!-- Chart -->
        <?php $this->load->view('template/widgets/chart'); ?>
        
        <!-- Widgets -->
        <div class="widgets">
            <div class="oneTwo">
            
                <!-- Partners list widget -->
                <?php $this->load->view('template/widgets/partner_list'); ?>
            
                <!-- Website stats widget -->
                <?php $this->load->view('template/widgets/web_stat'); ?>
            
                <!-- Latest update widget -->
                <?php $this->load->view('template/widgets/last_update'); ?>
        
        	<!-- 2 columns widgets -->
            <div class="oneTwo">
            
                <!-- Search -->
                <?php $this->load->view('template/widgets/search'); ?>
            
                <!-- Purchase info widget -->
                <?php $this->load->view('template/widgets/purchase'); ?>                
        
                <!-- New users widget -->
                <?php $this->load->view('template/widgets/new_user'); ?>
                
            	<!-- My tasks table widget -->
                <?php $this->load->view('template/widgets/task_table'); ?>
                <div class="clear"></div>

            </div>
            <div class="clear"></div>
        </div>
    	
        <!-- Events calendar -->
        <?php $this->load->view('template/widgets/events'); ?>
    
        <!-- Media table -->
        <?php $this->load->view('template/widgets/media_table'); ?>
    
    	<!-- Dynamic table -->
        <?php $this->load->view('template/widgets/dynamic_table'); ?>
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">copyright @ dps.gapura.co.id</div>
    </div>

</div>

<div class="clear"></div>

</body>
</html>