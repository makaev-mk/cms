<?php

namespace Engine;


class Cms
{
    /**
     * @var
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    public function run()
    {
        echo 'Hello World';
    }
}
