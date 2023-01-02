<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
    public function __construct()
    {

        parent :: __construct();
        // load your admin  templates
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("login.php");
                    break;
                case '/admin-dashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                    break;
                case '/admin-addcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcategory.php");
                    require_once("footer.php");
                    break;

                case '/admin-managecategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecategory.php");
                    require_once("footer.php");
                    break;
                default:
                require_once("index.php");
                require_once("404.php");
                    break;    
            }
        } 
    }
}

$obj=new admincontroller;
?>