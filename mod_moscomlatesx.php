<?php
/**
* @version
* @package MosComLatestX - COAddOns for Mambo & Jommla
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
include_once($GLOBALS['mosConfig_absolute_path'] .'/administrator/components/com_comments/moscom.main.class.php');
global $moscom;
if (!isset($moscom)) $moscom = new MoscomMain();
echo $moscom->showLatestX($params);
?>