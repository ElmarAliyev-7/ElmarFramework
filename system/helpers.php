<?php

function view(string $path, array $data = [])
{
    $real_path = 'resources\view\\' . $path;
    if($data) extract($data);
    if(!file_exists($real_path)) return 'View Not Found 404';
    return include $real_path;
}