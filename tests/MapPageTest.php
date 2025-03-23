<?php


declare( strict_types = 1 );


use Ds\Map;
use JDWX\Web\Twig\MapPage;
use JDWX\Web\Twig\TwigHelper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;


#[CoversClass( MapPage::class )]
final class MapPageTest extends TestCase {


    public function testRender() : void {
        $map = new Map();
        $page = new MapPage( TwigHelper::forDirectory( __DIR__ . '/templates/' ), 'test', $map );
        $page->setTitle( 'TEST_TITLE' );
        $map->put( 'name', 'world' );
        $stPage = strval( $page );
        self::assertStringContainsString( '<title>TEST_TITLE</title>', $stPage );
        self::assertStringContainsString( '<body>Hello, world!</body>', $stPage );

        $map->put( 'name', 'galaxy' );
        self::assertStringContainsString( '<body>Hello, galaxy!</body>', strval( $page ) );
    }


}
