<?php

namespace Factory\ConcreteFactories;

use Factory\AbstractFactories\IFormFactory;
use Factory\ConcreteProducts\ExplorerButtonElement;

/**
 * A concrete form factory for google chrome browser
 * 
 * @author afym
 */
class ExplorerFormFactory implements IFormFactory
{
    public function createButtonElement()
    {
        return new ExplorerButtonElement();
    }

}
