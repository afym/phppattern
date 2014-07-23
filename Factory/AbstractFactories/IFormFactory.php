<?php

namespace Factory\AbstractFactories;

/**
 * The abstract factory
 * 
 * @author afym
 */
interface IFormFactory
{
    /**
     * Returns a new Button Element
     * 
     * @return \Factory\AbstractProducts\IButtonElement
     */
    public function createButtonElement();
}
