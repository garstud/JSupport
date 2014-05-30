<?php
//blocage des accès directs sur ce script
defined('_JEXEC') or die('Accès interdit');

// Inclut les méthodes du script de soutien
require_once dirname(__FILE__).'/helper.php';

$list = modSimple2Helper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_simple2', $params->get('layout', 'default'));
