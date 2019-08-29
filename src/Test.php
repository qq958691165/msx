<?php


namespace Msx;


class Test
{
    public function test(){
        echo 'msx load ok! [ '.(microtime(true)-LARAVEL_START).' s]';
    }
}
