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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../multislider/css/backend.css">

    <style>
        /* fixing stupid CSS-Rules from Gambio */
        .pageHeading {
            height: 40px;
        }
        .leftmenu_head {
            height: 30px;
        }
        .boxCenter {
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
    include DIR_WS_INCLUDES.'header.php';
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../multislider/js/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>var site_url = '<?php echo xtc_href_link('multislider.php'); ?>';</script>
<script src="../multislider/js/ajaxfileupload.js"></script>
<script src="../multislider/js/backend.js"></script>
<?php
    include DIR_FS_DOCUMENT_ROOT.'multislider/backend.php';
    include DIR_WS_INCLUDES.'footer.php';
?>
</body>
<?php include DIR_WS_INCLUDES.'application_bottom.php';