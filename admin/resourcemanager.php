<?php

defined( '_JEXEC' ) or die();

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_respurcemanager')) 
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$document = JFactory::getDocument();
$document->addStyleDeclaration('.icon-48-resourcemanager {background-image: url(../media/com_resourcemanager/images/resourcemanager_64.png);}');

jimport('joomla.application.component.controller');

$controller = JController::getInstance('ResourceManager');

$controller->execute(JRequest::getCMD('task'));

$controller->redirect();