<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Tests\Shims;


use JDWX\Twig\TwigHelper;
use PHPUnit\Framework\TestCase;
use Twig\Environment;


class TwigTestCase extends TestCase {


    public static function newTestEnvironment() : Environment {
        return TwigHelper::forDirectory( __DIR__ . '/../templates' );
    }


}
