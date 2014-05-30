<?php
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.modellist');
 
/**
 * Composant frontend de liste des enregistrements
 */
class SupportModelTickets extends JModelList
{
	/**
	 * Methode pour peupler des parametres a partir de la session
	 *
	 * @param   string  $ordering   (optionnel) champ de tri
	 * @param   string  $direction  (optionel) sens du tri (asc|desc)
	 *
	 * @return  void
	 *
	 * @since   12.2
	 */
	protected function populateState($ordering = 'ordering', $direction = 'ASC')
	{
		$app = JFactory::getApplication();

		// informations de pagination de la liste
		$limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'), 'uint');
		$this->setState('list.limit', $limit);

		$limitstart = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $limitstart);

		// informations du tri de la liste
		$orderCol = $app->input->get('filter_order', $ordering);
		$this->setState('list.ordering', $orderCol);

		$listOrder = $app->input->get('filter_order_Dir', $direction);
		$this->setState('list.direction', $listOrder); 
	}

	/**
	 * Methode pour construire la requete SQL de la liste des enregistrements
	 *
	 * @return	string	une chaine contenant la requete SQL
	 * @since	1.6
	 */
	protected function _getListQuery()
	{
		// Create a new query object.
		$query	= $this->_db->getQuery(true);

		// Select required fields from the table.
		$query->select('*');
		$query->from($this->_db->quoteName('#__ticket'));

		// tri des colonnes
		$orderCol = $this->getState('list.ordering', 'id');
		$orderDirn = $this->getState('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		return $query;
	}
}
