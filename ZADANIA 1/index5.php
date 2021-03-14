<?php
function triangle()
{
    $a=1;
    $h=2;
    echo "Pole trójkąta to:".($a*$h)/2;
}
function rectangle()
{
    $a=1;
    $b=2;
    echo "Pole trójkąta to:".($a*$b);
}
function trapeze()
{
    $a=1;
    $b=2;
    $h=3;
    echo "Pole trójkąta to:".(($a+$b)*$h)/2;
}
    $figure="trapeze";
    switch ($figure)
    {
        case "triangle":
            triangle();
            break;
        case "rectangle":
            rectangle();
            break;
        case "trapeze":
            trapeze();
            break;
        default:
            echo "No choice";
    }
?>