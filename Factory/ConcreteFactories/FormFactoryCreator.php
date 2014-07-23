<?php

namespace Factory\ConcreteFactories;

/**
 * Concrete form factory
 * 
 * @author afym
 */
class FormFactoryCreator
{
    /**
     * Gets the factory from browser
     * 
     * @param string $browser 
     * @return \Factory\AbstractFactories\IFormFactory
     */
    public static function getFactory($browser)
    {
        $baseClass = "\Factory\ConcreteFactories\%browser%FormFactory";
        $className = str_replace('%browser%', $browser, $baseClass);

        return new $className;
    }

}
