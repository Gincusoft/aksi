<?php
/*
 * template.php, Mar 31, 2015 9:33:24 PM    
 * 
 * Andedi Tarmadi
 * 
 * 
 * ----------------
 * Tumbas Wiralodra
 * Email : andedi.foss@gmail.com
 * 087829986468
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo-poles.png');?>" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>PoLes - <?php echo $title; ?> </title>
        
        <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-easyui-1.4.1/themes/<?php echo $theme; ?>/easyui.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-easyui-1.4.1/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-easyui-1.4.1/themes/color.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/tumbas.css">
        
        <!--Javascript-->
        <script type="text/javascript" src="assets/scripts/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-easyui-1.4.1/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-easyui-1.4.1/locale/easyui-lang-id.js"></script>
        <script type="text/javascript" src="assets/scripts/tumbas.js"></script>
    </head>
    <body class="easyui-layout">
        <div data-options="region:'north',border:false" class="header">
            <h1><img style="height:50px; margin-top: -10px" src="<?php echo base_url('assets/images/logo-poles.png');?>" align="center"> PoLes <small> ( Point of Sales )</small></h1>
        </div>

        <div data-options="region:'west',split:true,title:'M E N U'" style="width:200px;padding:0px;">
            <div class="easyui-accordion" data-options="multiple:true">
                <?php //echo $menu; ?>
            </div>
        </div>

        <div data-options="region:'center',title:'<?php echo $title; ?>'" style="padding: 10px;">
            <?php $this->load->view($content); ?>
        </div>

        <div data-options="region:'south',border:false" class="footer">Copyleft &copy; <?php echo date('Y'); ?> Tumbas, Inc</div>
        
        <!--Buat Pop Up--> <div id="win"></div> <!--          -->
        
    </body>
</html>