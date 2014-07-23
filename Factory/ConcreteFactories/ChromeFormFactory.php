<?php

namespace Factory\ConcreteFactories;

use Factory\AbstractFactories\IFormFactory;
use Factory\ConcreteProducts\ChromeButtonElement;

/**
 * A concrete form factory for google chrome browser
 * 
 * @author afym
 */
class ChromeFormFactory implements IFormFactory
{
    public function createButtonElement()
    {
        return new ChromeButtonElement();
    }

}
