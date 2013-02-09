<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controlleradmin library
jimport('joomla.application.component.controlleradmin');

/**
 * Colours Controller
 * 
 */

class ResourceManagerControllerSplash extends JControllerAdmin {
    
    public function getModel($name = 'Splash', $prefix = 'ResourceManagerModel') {
        
        $model = parent::getModel($name, $prefix, array('ignore_request' => true));
        return $model;
        
    }
}