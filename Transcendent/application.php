<?php 

spl_autoload_register('autoloadClass');

/**
 * Autoload Class
 * 
 * @param string $className
 * @return void
 */
function autoloadClass(string $className): void
{
    $path = explode("\\",$className);
    $startedPath = __DIR__ . '/' . 'Support' . '/' . end($path) . '.php';
    include_once $startedPath; 
}