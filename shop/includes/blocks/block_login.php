<?php
/* ----------------------------------------------------------------------
   $Id: block_login.php,v 1.1 2007/06/07 11:55:41 r23 Exp $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2014 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce

   IMPORTANT NOTE:

   This script is not part of the official osC distribution
   but an add-on contributed to the osC community. Please
   read the README and  INSTALL documents that are provided 
   with this file for further information and installation notes.

   login_box.php -   Version 1.0
   This puts a login request in a box with a login button.
   If already logged in, will not show anything.

   Modified to utilize SSL to bypass Security Alert
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

  /** ensure this file is being included by a parent file */
  defined( 'OOS_VALID_MOD' ) or die( 'Direct Access to this location is not allowed.' );

  if ($oEvent->installed_plugin('down_for_maintenance')) return false;

  $login_block = 'false';
  if ( ($sFile != $aFilename['login']) && ($sFile != $aFilename['create_account'])) {
    if (!isset($_SESSION['customer_id'])) {
      $login_block = 'true';
      $smarty->assign('block_login_heading', $block_heading);
    }
  }
  $smarty->assign('login_block', $login_block);

