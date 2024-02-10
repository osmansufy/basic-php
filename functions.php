<?php
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}
function urlIs($url)
{
    return ($_SERVER['REQUEST_URI'] === $url);
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
