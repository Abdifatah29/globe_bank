
<?php

function setUrlPath(string $script_path)
{

    if ($script_path[0] != '/') {
        $script_path = '/' . $script_path;
    }

    return WWW_ROOT . $script_path;
}

/*
@param string $string
@return string
*/

function eUrl(string $string)
{
    return urlencode($string);
}

/*
@param string $string
@return string
*/
function dUrl(string $string)
{
    return urldecode($string);
}

/*
@param string $string
@return string
*/
function htmlChars(string $string)
{
    return htmlspecialchars($string);
}
