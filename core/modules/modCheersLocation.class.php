<?php
/* Copyright (C) 2026 */

require_once DOL_DOCUMENT_ROOT.'/core/modules/DolibarrModules.class.php';

class modCheersLocation extends DolibarrModules
{
	public function __construct($db)
	{
		$this->db = $db;

		$this->numero = 500123;
		$this->rights_class = 'cheerslocation';
		$this->family = 'other';
		$this->module_position = '90';
		$this->name = preg_replace('/^mod/i', '', get_class($this));
		$this->description = 'Starter module for Cheers Location';
		$this->descriptionlong = 'Starter module for Cheers Location. No business objects are defined yet.';
		$this->version = '1.0.0';
		$this->const_name = 'MAIN_MODULE_CHEERSLOCATION';
		$this->picto = 'generic';

		$this->langfiles = array('cheerslocation@cheerslocation');
		$this->config_page_url = array('setup.php@cheerslocation');
		$this->dirs = array();
		$this->depends = array();
		$this->requiredby = array();
		$this->conflictwith = array();
		$this->module_parts = array();
		$this->const = array();
		$this->rights = array();
		$this->menu = array();
	}

	public function init($options = '')
	{
		return $this->_init(array(), $options);
	}

	public function remove($options = '')
	{
		return $this->_remove(array(), $options);
	}
}
