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
//		$memStart = JProfiler::getInstance('Application')->getMemory();        
//		$cachable = true;

		// Get the document object.
//		$document = JFactory::getDocument();

		// affectation de la vue fourni en paramètre
		$vName = $this->input->get('view', 'tickets');
		$this->input->set('view', $vName);
		
		//trace de DEBUG :
//		JFactory::getApplication()->enqueueMessage("ctrl::display : view=".$vName, 'info');                                                                         
//		JLog::add("ctrl::display : view=".$vName, JLog::INFO, 'jerror');
//		JProfiler::getInstance('Application')->mark('Support Controller view = ' . $vName);        
		

//		chapitre securité
//		$safeurlparams = array('catid'=>'INT', 'id'=>'INT', 'cid'=>'ARRAY', 'year'=>'INT', 'month'=>'INT', 'limit'=>'UINT', 'limitstart'=>'UINT',
//			'showall'=>'INT', 'return'=>'BASE64', 'filter'=>'STRING', 'filter_order'=>'CMD', 'filter_order_Dir'=>'CMD', 'filter-search'=>'STRING', 'print'=>'BOOLEAN', 'lang'=>'CMD');
//		parent::display($cachable, $safeurlparams);

		parent::display($cachable, false);

//		$memEnd = JProfiler::getInstance('Application')->getMemory();        
//		JProfiler::getInstance('Application')->mark('Support Controller memory : ' . round($memStart/1048576, 3) . ' / '.round($memEnd/1048576, 3) . ' Ko');        

		return $this;
	}
}
