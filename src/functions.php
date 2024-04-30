<?php

function get_standard_object_name(string $objectName)
{
    $words = explode("_", \Illuminate\Support\Str::snake($objectName));
    foreach ($words as &$word) {
        $word = \Illuminate\Support\Str::ucfirst(\Illuminate\Support\Str::singular($word));
    }
    return implode("", $words);
}