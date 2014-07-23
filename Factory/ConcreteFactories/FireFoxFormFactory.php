<?php

namespace Factory\ConcreteFactories;

use Factory\AbstractFactories\IFormFactory;
use Factory\ConcreteProducts\FireFoxButtonElement;

/**
 * A concrete form factory for fire fox browser
 *
 * @author Frank
 */
class FireFoxFormFactory implements IFormFactory
{

    public function createButtonElement()
    {
        return new FireFoxButtonElement();
    }

}
