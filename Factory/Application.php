<?php

namespace Factory;

include './AbstractFactories/IFormFactory.php';
include './AbstractProducts/IButtonElement.php';
include './ConcreteFactories/ChromeFormFactory.php';
include './ConcreteFactories/FireFoxFormFactory.php';
include './ConcreteProducts/ChromeButtonElement.php';
include './ConcreteProducts/FireFoxButtonElement.php';
include './ConcreteFactories/FormFactoryCreator.php';

use Factory\ConcreteFactories\FormFactoryCreator;

/**
 * Application class
 * @author afym
 */
class Application
{

    public function main()
    {
        try {
            $browser = $this->getBrowser();
            $formFactory = FormFactoryCreator::getFactory($browser);
            echo $formFactory->createButtonElement()->render();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    private function getBrowser()
    {
        $browser = $_SERVER['HTTP_USER_AGENT'];

        if (preg_match('/Firefox/i', $browser)) {
            return 'FireFox';
        } else if (preg_match('/Chrome/i', $browser)) {
            return 'Chrome';
        } else {
            throw new \Exception('Unknow browser');
        }
    }

}

// Implementation
$application = new Application();
$application->main();
