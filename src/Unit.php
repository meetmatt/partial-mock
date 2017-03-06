<?php

namespace Acme;

class Unit
{
    /**
     * This is a method under test which proxies the second method below
     *
     * @return string
     */
    public function underTest()
    {
        return $this->real();
    }

    /**
     * This method is mocked and should never be called
     *
     * @return string
     */
    public function real()
    {
        return 'real';
    }
}