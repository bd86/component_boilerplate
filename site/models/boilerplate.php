<?php

defined('_JEXEC') or die('Restricted');

jimport('joomla.application.component.model');

class BoilerPlateModelBoilerPlate extends JModel
{
	protected $data;
	
	public function getData()
	{
		if(empty($this->data)){
			$this->data = 'Hello World!';	
		}
		return $this->data;
	}
}