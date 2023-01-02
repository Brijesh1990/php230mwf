<?php 
/* what is variables : A variables is just like a container where we stored an information about data i.e called variables.

           or

 A variable is used to stored information about data i.e called variables 
 A variables is denoted in php by $ symbols

       ex: $a=10;
           $b=54.54545;
           $c="brijesh"
           $name='brijesh'; 


  Rules of variables :
  
            a) variables doesn not assign or start with numebrs

                     ex: 7$a=10; //wrong way

             b) A variables does not provides space 
             
                      ex: $a b=10;


              c) A variable does not start with special charcter 
              
                     
                        ex: %a=10;  $a=10;   
       

               d) A variable does not start with undescore 
               
                        ex: _$a=10;


*/
$name='brijesh';
$ab=10;
$a_b=15454;
$$a=25445;
echo $name.$ab."<br>".$a_b."<br>".$$a;


?>