<?php
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.view');
 
/**
 * Vue HTML du composant
 */
class SupportViewTickets extends JViewLegacy
{
	protected $tickets;
	
	// surcharge de la methode display de la class JViewLegacy
	function display($tpl = null) 
	{
		// Récupération des données.
		$this->state		= $this->get('State');
		$this->tickets		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');

		// Controle des erreurs
		if (count($errors = $this->get('Errors'))) {
			JError::raiseWarning(500, implode("\n", $errors));

			return false;
		}

		// Affiche la vue
		parent::display($tpl);
	}
}
