<?php
/* -------------------------------------------------------------------------------------
* 	ID:						                Id: multislider.php
* 	zuletzt geaendert von:	                Author: Daniel Siekiera
* 	Datum:					                Date: 09.09.14 12:41
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

require 'includes/application_top.php';
include DIR_FS_DOCUMENT_ROOT.'multislider/action.php';
 
?>
<!doctype html>
<html <?php echo HTML_PARAMS; ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['language_charset']; ?>">
    <title>Multislider - Edit</title>
        
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../multislider/css/backend.css">

    <style>
        /* fixing stupid CSS-Rules from Gambio */
        <?php if($_new_version === true){ ?>
        
			.gx-compatibility .main-page-content .boxCenterWrapper {
	        	margin-top: 12px !important;
	        }
	        .gx-compatibility .main-page-content a.btn {
		        height: auto !important;
		        min-width: 1px !important;
	        }
	        .gx-compatibility .breakpoint-small {
		        max-width: 100% !important;
	        }
	        .gx-container .panel h4 {
		        margin-bottom: 0;
		        font-size: 1.2em;
	        }
	        .gx-compatibility .main-page-content .pageHeading:first-child {
		        z-index: 100;
	        }
	        .message_stack_container {
		    	display: none !important;   
	        }
	        
        <?php } else { ?>
        	
        	.pageHeading {
	            height: 40px;
	        }
	        .leftmenu_head {
	            height: 30px;
	        }
	        .boxCenter {
	            padding: 10px;
	        }
        	
        <?php } ?>
    </style>
</head>
<body>
<?php
    include DIR_WS_INCLUDES.'header.php';
?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<?php if($_new_version === false){ ?>
<script src="../multislider/js/jquery-ui.min.js"></script>
<?php } ?>
<script>var site_url = '<?php echo xtc_href_link('multislider.php'); ?>';</script>
<script src="../multislider/js/ajaxfileupload.js"></script>
<script src="../multislider/js/backend.js"></script>
<?php	
    include DIR_FS_DOCUMENT_ROOT.'multislider/backend.php';
    include DIR_WS_INCLUDES.'footer.php';
?>
</body>
<?php include DIR_WS_INCLUDES.'application_bottom.php';
