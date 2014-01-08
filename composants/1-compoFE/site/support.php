<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// Get an instance of the controller prefixed by Compo name
$controller = JControllerLegacy::getInstance('Support');
//$controller = JController::getInstance('Support'); //Fatal error: Class 'JController' not found. Besoin du jimport explicite !
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$task = $input->get('task', 'cmd');
$controller->execute($task);
 
// Redirect if set by the controller
$controller->redirect();
