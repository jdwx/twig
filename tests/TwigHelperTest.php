<?php


declare( strict_types = 1 );


use JDWX\Web\Twig\TwigHelper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;


#[CoversClass( TwigHelper::class )]
final class TwigHelperTest extends TestCase {


    public function testForDirectory() : void {
        $env = TwigHelper::forDirectory( __DIR__ . '/templates/' );
        $st = $env->render( 'test.html.twig', [ 'name' => 'directory' ] );
        self::assertSame( 'Hello, directory!', $st );
    }


    public function testForStrings() : void {
        $env = TwigHelper::forStrings();
        $st = $env->render( 'Hello, {{ name }}!', [ 'name' => 'string' ] );
        self::assertSame( 'Hello, string!', $st );
    }


}
