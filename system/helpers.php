<?php

function view(string $path, array $data = [])
{
    if($data) extract($data);
    if(!file_exists($path)) return 'View Not Found 404';
    return include $path;
}