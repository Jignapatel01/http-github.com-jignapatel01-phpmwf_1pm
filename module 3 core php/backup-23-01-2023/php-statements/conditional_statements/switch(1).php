<?php 
// switch: switch is used to just like if elseif where we check or used multiple conditions at once time in switch we can make a case if condition false dfeault is executed.

// switch (constions) {
//     case 'value':
//         # code...
//         break;
//     case 'value1':
//             # code...
//             break;
//     default:
//         # code...
//         break;
// }

$grade="B";
switch($grade)
{
    case 'A':
        echo "You are topper students &#9786";
        break;
        
    case 'B':
        echo "You are average students &#9786";
        break;

        
    case 'C':
        echo "You are failed students &#9785";
        break;
        
    default:
        echo "Your grade is not found anywhere try to contact with admin";
        break;

}

?>