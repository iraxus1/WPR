<?php
    function Date_of_birth($pesel)
    {
        $year = substr($pesel, 0, 2);
        $month = substr($pesel, 2, 2);
        $day = substr($pesel, 4, 2);

        if ($month <= 12)
        {
            $month = $month;
        }
        elseif ($month <= 32)
        {
            $month = $month - 20;
        }
        elseif ($month <= 52)
        {
            $month = $month - 40;
        }
        elseif ($month <= 72)
        {
            $month = $month - 60;
        }
        elseif ($month <= 92)
        {
            $month = $month - 80;
        }

        $date=mktime(0, 0, 0, $month, $day, $year);
        return date("y-m-d", $date);
    }
    echo Date_of_birth("01323104853");
?>