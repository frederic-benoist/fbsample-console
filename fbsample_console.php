<?php
/**
 * 2007-2018 Frédéric BENOIST
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 *  @author    Frédéric BENOIST
 *  @copyright 2013-2018 Frédéric BENOIST <https://www.fbenoist.com/>
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_')) {
     exit;
}

class FbSample_Console extends Module
{
    public function __construct()
    {
        $this->name = 'fbsample_console';
        $this->version = '1.7.0';
        $this->author = 'Frederic BENOIST';
        $this->tab = 'others';
        $this->bootstrap = true;
        $this->ps_versions_compliancy = array(
            'min' => '1.7.4',
            'max' => _PS_VERSION_
        );
        parent::__construct();
        $this->displayName = $this->l('Sample console command Module ');       
        $this->description = $this->l('Add console command with PrestaShop 1.7 module.');
    }
}
