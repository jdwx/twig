<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Tests;


use JDWX\Twig\AbstractStream;
use JDWX\Twig\StaticTwigStream;
use JDWX\Twig\Tests\Shims\TwigTestCase;
use JDWX\Twig\TwigHelper;
use PHPUnit\Framework\Attributes\CoversClass;


require_once __DIR__ . '/Shims/TwigTestCase.php';


#[CoversClass( AbstractStream::class )]
#[CoversClass( StaticTwigStream::class )]
final class StaticTwigStreamTest extends TwigTestCase {


    public function testToString() : void {
        $twig = new StaticTwigStream( self::newTestEnvironment(), 'test', [ 'name' => 'World' ] );
        self::assertSame( 'Hello, World!', strval( $twig ) );
    }


    public function testToStringForStringTemplate() : void {
        $env = TwigHelper::forStrings();
        $twig = new StaticTwigStream( $env, 'Hello, {{ name }}!', [ 'name' => 'World' ] );
        self::assertSame( 'Hello, World!', strval( $twig ) );
    }


}
