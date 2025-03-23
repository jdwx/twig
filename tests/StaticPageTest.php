<?php


declare( strict_types = 1 );


use JDWX\Web\Twig\StaticPage;
use JDWX\Web\Twig\TwigHelper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;


#[CoversClass( StaticPage::class )]
final class StaticPageTest extends TestCase {


    public function testToString() : void {
        $sp = new StaticPage(
            TwigHelper::forDirectory( __DIR__ . '/templates/' ),
            'test',
            [ 'name' => 'world' ]
        );
        $sp->setTitle( 'TEST_TITLE' );

        # Check title.
        self::assertStringContainsString( '<title>TEST_TITLE</title>', (string) $sp );

        # Check body.
        self::assertStringContainsString( '<body>Hello, world!</body>', (string) $sp );
    }


}
