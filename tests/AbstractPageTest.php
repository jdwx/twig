<?php


declare( strict_types = 1 );


use JDWX\Web\Twig\AbstractPage;
use JDWX\Web\Twig\TwigHelper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Twig\Environment;


#[CoversClass( AbstractPage::class )]
final class AbstractPageTest extends TestCase {


    public function testConstructForFullName() : void {
        $page = $this->newAbstractPage(
            function () {
                return [ 'name' => 'world' ];
            },
            'test.html.twig'
        );
        self::assertStringContainsString( 'Hello, world!', strval( $page ) );
    }


    public function testConstructForHtmlName() : void {
        $page = $this->newAbstractPage(
            function () {
                return [ 'name' => 'galaxy' ];
            },
            'test.html'
        );
        self::assertStringContainsString( 'Hello, galaxy!', strval( $page ) );
    }


    public function testConstructForString() : void {
        $env = TwigHelper::forStrings();
        $page = $this->newAbstractPage(
            function () {
                return [ 'name' => 'multiverse' ];
            },
            'Hello, {{ name }}!',
            $env
        );
        self::assertStringContainsString( 'Hello, multiverse!', strval( $page ) );
    }


    public function testConstructForTagOnly() : void {
        $page = $this->newAbstractPage(
            function () {
                return [ 'name' => 'universe' ];
            },
            'test'
        );
        self::assertStringContainsString( 'Hello, universe!', strval( $page ) );
    }


    private function newAbstractPage( callable $i_fnCallback, string $i_stTemplate, ?Environment $i_env = null ) : AbstractPage {
        if ( ! $i_env ) {
            $i_env = TwigHelper::forDirectory( __DIR__ . '/templates/' );
        }
        return new class( $i_env, $i_stTemplate, $i_fnCallback ) extends AbstractPage {


            /** @var callable */
            private $fnCallback;


            public function __construct( Environment $env, string $stTemplate, callable $i_fnCallback ) {
                parent::__construct( $env, $stTemplate );
                $this->fnCallback = $i_fnCallback;
            }


            protected function values() : array {
                return ( $this->fnCallback )();
            }


        };
    }


}
