<?php
function censorship_machine($sentence)
{
    $dictionary = array("kurka");
    foreach ($dictionary as $word)
    {
        $size = strlen($word);
        $censorship='';
        for ($j = 0; $j < $size; $j++)
            $censorship .= '*';

        $sentence = str_replace($word,$censorship,$sentence);
    }
    return $sentence;
}
echo censorship_machine("kurka wodna");
?>
