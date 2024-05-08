<?php

use Illuminate\Support\Str;

/**
 *
 * @deprecated 该方法废弃，请使用 to_standard_object_name
 * 获取标准对象名称
 * @param string $objectName
 * @return string
 */
function get_standard_object_name(string $objectName)
{
    $words = explode("_", \Illuminate\Support\Str::snake($objectName));
    foreach ($words as &$word) {
        $word = \Illuminate\Support\Str::ucfirst(\Illuminate\Support\Str::singular($word));
    }
    return implode("", $words);
}

/**
 *
 * 将对象名称转换为 单数
 * @param string $objectName
 * @return string
 */
function to_standard_object_name(string $objectName)
{
    $words = explode("_", \Illuminate\Support\Str::snake($objectName));
    foreach ($words as &$word) {
        $word = \Illuminate\Support\Str::ucfirst(\Illuminate\Support\Str::singular($word));
    }
    return implode("", $words);
}

/**
 *
 *  转换为蛇形复数
 * @param string $targetString 目标字符串
 * @return string
 */
function to_snake_plural(string $targetString)
{
    return Str::plural(Str::snake($targetString, "_"));
}