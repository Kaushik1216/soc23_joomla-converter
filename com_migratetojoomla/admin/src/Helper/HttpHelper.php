<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_migratetojoomla
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


namespace Joomla\Component\MigrateToJoomla\Administrator\Helper;
 
use Joomla\CMS\Factory;
use Joomla\CMS\Http\HttpFactory;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects
 

class HttpHelper
{	
    /**
     * Method to check Enter http url connection
     * 
     * @return boolean True on success
     * 
     * since
     */
    public function testhttpconnection($url = NULL) {
        
        $app   = Factory::getApplication();

        $http = HttpFactory::getHttp();
        
        $response = $http->get($url);

        $statusCode = $response->code;
        
        if($statusCode==200) {
            $app->enqueueMessage("Http Connection Succesesfully" , 'success');
        }else{
            $app->enqueueMessage("Http Connection Unsuccesesfully" , 'warning');
        }

        return ($statusCode==200);

    }
    
}?>