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
        <td width="<?php echo BOX_WIDTH; ?>" valign="top" class="left-colum">
            <?php require DIR_WS_INCLUDES.'column_left.php'; ?>
        </td>

        <td class="boxCenter" width="100%" valign="top">
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
            $multislider_smarty = new Smarty();
            $multislider_smarty->compile_dir = DIR_FS_CATALOG.'templates_c';

            $_view = (isset($_GET['view']) ? $_GET['view'] : 'start');

            include DIR_FS_DOCUMENT_ROOT.'multislider/view/'.$_view.'.php';

            echo $multislider_smarty->fetch(DIR_FS_CATALOG.'multislider/tpl/backend/'.$_view.'.tpl');
            ?>
        </td>
    </tr>
</table>