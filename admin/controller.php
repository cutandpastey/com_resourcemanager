<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');


class ResourceManagerController extends JController {
    
    function display($cachable = false) {

        JRequest::setVar('view', JRequest::getCmd('view', 'Splash'));
        parent::display($cachable);
        
    }
    
}