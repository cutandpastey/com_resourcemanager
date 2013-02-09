<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');

class ResourceManagerViewSplash extends JView {
    
    function display($tpl = null) {

        //$items = $this->get('Items');
        //$pagination = $this->get('Pagination');
 
        if (count($errors = $this->get('Errors'))) 
        {
                JError::raiseError(500, implode('<br />', $errors));
                return false;
        }
        // Assign data to the view
        //$this->items = $items;
        //$this->pagination = $pagination;

        $this->settings = $this->get('Settings');
        
        //add the toolbar
        $this->addToolBar();

        // Display the template
        parent::display($tpl);
        
        $this->setDocument();
        
    }

    protected function addToolBar() {
        JToolBarHelper::title(JText::_('Resource Manager for Joomla'));
        JToolBarHelper::preferences('com_resourcemanager');
    }
    
    protected function setDocument() {
        $document = JFactory::getDocument();
	$document->setTitle(JText::_('Resource Manager for Joomla'));
    }
}