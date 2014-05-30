<?php
defined('_JEXEC') or die('Restricted access');
 
/**
 * Controleur principal
 */
class SupportController extends JControllerLegacy
{
	/**
	 * Methode pour afficher une vue
	 *
	 * @param	boolean		si True, alors la vue sera placée en cache
	 * @param	array		tableau des types de paramètres d'url sécurisés, voir {@link JFilterInput::clean()}.
	 *
	 * @return	JController	l'objet du présent controleur.
	 * @since	1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		// affectation de la vue fourni en paramètre
		$vName = $this->input->get('view', 'tickets');
		$this->input->set('view', $vName);
		
		parent::display($cachable, false);

		return $this;
	}
}
