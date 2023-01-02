<?php 
// switch : switch is used to check multiple case if case is true it executed otherwise default is executed

// switch(condition)
// {
//     case '1':
//         statements;
//         break;
        
//     case '2':
//         statements;
//         break;
        
//     case '3':
//         statements;
//         break;
        
//     default :
//         statements;
//         break;
// }

$grade="A";
switch($grade)
{
    case 'A':
            echo "<h1>You are topper students &#9786 </h1>";
            break;
        
    case 'B':
        echo "<h1>You are average students &#9786 </h1>";
        break;
    
    case 'C':
        echo "<h1>You are failed students &#9785 </h1>";
        break;

    default:
    echo "<h1>Sorry your grade is not found try with admin </h1>";
    break;

    
}

?>