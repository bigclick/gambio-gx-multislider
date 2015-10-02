<?php
/* -------------------------------------------------------------------------------------
* 	ID:						            Id: multislider.php (BackEnd)
* 	zuletzt geaendert von:	            Author: Daniel Siekiera
* 	Datum:					            Date: 09.09.14 12:30
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

?>
<table border="0" width="100%" cellspacing="2" cellpadding="2">
    <tr>
        
        <td class="columnLeft2 left-colum" width="<?php echo BOX_WIDTH; ?>" valign="top">
			<table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="1" cellpadding="1" class="columnLeft">
				<?php include DIR_WS_INCLUDES.'column_left.php'; ?>
			</table>
		</td>

        <td class="boxCenter gx-multislider" width="100%" valign="top">
	        <div class="main breakpoint-small">
		        <table border="0" width="100%" cellspacing="0" cellpadding="2" class="gx-container">
					<tr>
						<td width="100%">
				            <?php
				                $_version = file_get_contents(DIR_FS_DOCUMENT_ROOT.'multislider/version.ini');
				            ?>
				            <div class="pageHeading" style="background-image: url('../multislider/img/multislider.png'); padding-left: 40px; padding-top: 13px;"> Multislider v<?php echo $_version; ?></div>
				
				            <p class="text-right">
				                <button class="btn btn-default btn-sm toogle-menu" type="button">
				                    Menü verbergen
				                </button>
				            </p>
				
				            <?php
					        
					        require_once '../includes/classes/Smarty/Smarty.class.php';
					        
				            $multislider_smarty = new Smarty();
				            $multislider_smarty->compile_dir = DIR_FS_CATALOG.'templates_c';
				
				            $_view = (isset($_GET['view']) ? $_GET['view'] : 'start');
				
				            include DIR_FS_DOCUMENT_ROOT.'multislider/view/'.$_view.'.php';
				
				            echo $multislider_smarty->fetch(DIR_FS_CATALOG.'multislider/tpl/backend/'.$_view.'.tpl');
				            ?>
						</td>
					</tr>
		        </table>
	        </div>
        </td>
    </tr>
</table>