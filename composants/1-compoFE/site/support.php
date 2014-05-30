<?php
defined('_JEXEC') or die('Restricted access');
 
// recupere une instance du controller prefixé par le nom du composant
$controller = JControllerLegacy::getInstance('support');
 
// execute la tache demandée
$input = JFactory::getApplication()->input;
$task = $input->get('task', 'cmd');
$controller->execute($task);
 
// execute la redirection prévue par le controleur
$controller->redirect();
