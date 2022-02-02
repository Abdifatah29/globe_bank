
<?php

function setUrlPath(string $script_path)
{

    if ($script_path[0] != '/') {
        $script_path = '/' . $script_path;
    }

    return WWW_ROOT . $script_path;
}

function eUrl(string $string)
{
    return urlencode($string);
}

function dUrl(string $string)
{
    return urldecode($string);
}

function htmlChars(string $string)
{
    return htmlspecialchars($string);
}
