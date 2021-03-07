<?php
/**
 * Application File
 * php version 7.4.2
 *
 * @category Core_Class
 * @package  SimplePHP
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU Gene
 * @link     https://github.com/chamodyawimansha/SimplePHP
 */

namespace SimplePHP\Framework\Core;

/**
 * Application Class - Initiates the application
 * php version 7.4.2
 *
 * @category Core_Class
 * @package  SimplePHP
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU Gene
 * @link     https://github.com/chamodyawimansha/SimplePHP
 */
class Application
{
    /**
     * Implements the constructors
     * and autoload files.
     */
    public function __construct() 
    {
        /**
         *  Declaring folder paths
         */
        define("DS", DIRECTORY_SEPARATOR);
        define("ROOT", getcwd(). DS); // Root folder "/var/www/website_folder/"

        define("APP_FOLDER", ROOT . 'App' . DS);
        define("FRAMEWORK_FOLDER", ROOT . "Framework" . DS);
        define("PUBLIC_FOLDER", APP_FOLDER . "public" . DS);

        define("CONFIG_FOLDER", APP_FOLDER . "config" . DS);
        define("CONTROLLER_FOLDER", APP_FOLDER . "controllers" . DS);
        define("MODEL_FOLDER", APP_FOLDER . "models" . DS);
        define("VIEW_FOLDER", APP_FOLDER . "views" . DS);

        define("CORE_FOLDER", FRAMEWORK_FOLDER . "core" . DS);
        define("DATABASE_FOLDER", FRAMEWORK_FOLDER . "database" . DS);
        define("LIBS_FOLDER", FRAMEWORK_FOLDER . "libraries" . DS);
        define("HELPERS_FOLDER", FRAMEWORK_FOLDER . "helpers" . DS);


        



        // Stating session.
        session_start();
    }

    /**
     * Require the  Controller
     * 
     * @return Null
     */
    public function init()
    {
        echo (FRAMEWORK_FOLDER);
    }

    /**
     * Autoload classes
     * 
     * @return Null
     */
    private function _autoload()
    {

    }

    /**
     * Run when Applicati
     */
    public function __destruct()
    {
        session_destroy();
    }

}
  