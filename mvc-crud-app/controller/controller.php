<?php 
require_once("model/model.php");
class controller extends model 
{
     public function __construct()
     {
        parent :: __construct();
        // fetch data or state in add users state dropdownlist
        $shwstate=$this->selectalldata('tbl_state');
        
        // fetch data or city in add users city dropdownlist
        $shwcity=$this->selectalldata('tbl_city');

        // add users in tbl_users or insert data
        if(isset($_POST["sub"]))
        {
            // file or image uplaod
            $tmp_name=$_FILES["img"]["tmp_name"];
            $path="uploads/users/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $ph=$_POST["phone"];
            $st=$_POST["state"];
            $ct=$_POST["city"];
            $data=array("photo"=>$path,"name"=>$nm,"email"=>$em,"phone"=>$ph,"state_id"=>$st,"city_id"=>$ct);
            $chk=$this->insertalldata('tbl_users',$data);
            if($chk)
            {
                echo "<script>
                alert('Users succefully Added');
                window.location='./';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Somthing went wrong while added users');
                window.location='./';
                </script>";   
            }
        }

        // show all data 
        $shwdata=$this->selectalldata('tbl_users');


        // load view or templates 
        if(isset($_SERVER["PATH_INFO"]))
        {
           switch($_SERVER["PATH_INFO"])
           {
            case '/':
                require_once("index.php");
                require_once("header.php");
                require_once("content.php");
                break;
            default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                break;
           }
        }
    }
}
$obj=new controller;
?>