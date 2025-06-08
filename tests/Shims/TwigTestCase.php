<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Tests\Shims;


use JDWX\Twig\Environments\EnvironmentInterface;
use JDWX\Twig\TwigHelper;
use PHPUnit\Framework\TestCase;


class TwigTestCase extends TestCase {


    public static function newTestEnvironment() : EnvironmentInterface {
        return TwigHelper::forDirectory( __DIR__ . '/../templates' );
    }


}
