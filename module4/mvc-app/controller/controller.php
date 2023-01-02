<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        // logic load here for applications
        parent:: __construct();

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contactus.php");
                    require_once("footer.php");
                    break;
                case '/mens-products':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("products.php");
                    require_once("footer.php");
                    break;

                    
                case '/womens-products':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("products.php");
                    require_once("footer.php");
                    break;

                    
                case '/product-details':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("productsdetails.php");
                    require_once("footer.php");
                    break;

                    
                case '/create-account':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                    
                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                    
                case '/viewcart':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("cart.php");
                    require_once("footer.php");
                    break;

                default:
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("404.php");
                require_once("footer.php");
                break;   
            }
        }

    }
}

$obj=new controller;
?>