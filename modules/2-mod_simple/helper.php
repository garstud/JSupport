<?php
//blocage des accès directs sur ce script
defined('_JEXEC') or die('Accès interdit');

abstract class modSimple2Helper
{
	public static function getList(&$params)
	{
		// recupère la connexion à la BD
		$db = JFactory::getDbo();

		$queryArticles = 'SELECT id, title FROM #__content LIMIT '. (int) $params->get('count');
		$db->setQuery( $queryArticles );
		$items = $db->loadObjectList();

		foreach ($items as &$item) {
			$item->link = JRoute::_('index.php?option=com_content&view=article&id='.$item->id);
		}

		return $items;
	}
}
