<?php

namespace ExaOwl\Fibonacci\Interfaces;

use GMP;

interface Strategy
{
    /**
     * TODO
     *
     * @return \GMP
     */
    public function calculate(): GMP;
}