<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Tests;


use Ds\Map;
use JDWX\Twig\MapTwigStream;
use JDWX\Twig\Tests\Shims\TwigTestCase;
use PHPUnit\Framework\Attributes\CoversClass;


#[CoversClass( MapTwigStream::class )]
final class MapTwigStreamTest extends TwigTestCase {


    public function testToString() : void {
        $map = new Map();
        $twig = new MapTwigStream( self::newTestEnvironment(), 'test', $map );
        $map->put( 'name', 'Foo' );
        self::assertEquals( 'Hello, Foo!', (string) $twig );
    }


}
