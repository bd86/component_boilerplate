<?php

defined('_JEXEC') or die('Restricted');

jimport('joomla.application.component.view');

class BoilerPlateViewBoilerPlate extends JView 
{
	function display($tpl=NULL)
	{
		$this->msg = $this->get('Data');
		
		if(count($err=$this->get('Errors'))){
			JLog::add(implode('<br/>',$err),JLog::WARNING,'jerror');
			return false;
		}
		
		parent::display($tpl);
	}
}