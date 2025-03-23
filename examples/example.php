<?php


declare( strict_types = 1 );


require_once __DIR__ . '/../vendor/autoload.php';


use Ds\Map;
use JDWX\Web\Twig\MapPage;
use JDWX\Web\Twig\StaticPage;
use JDWX\Web\Twig\TwigHelper;


class ErrorPage extends StaticPage {


    /** @param array<string, mixed> $i_rValues */
    public function __construct( string $name, array $i_rValues = [] ) {
        # Give it the path to your error templates.
        $env = TwigHelper::forDirectory( __DIR__ . '/templates/' );
        parent::__construct( $env, $name, $i_rValues );
    }


    /** @param array<string, mixed> $i_rValues */
    public static function get( string $name, array $i_rValues = [] ) : string {
        return ( new self( $name, $i_rValues ) )->render();
    }


}


/** @suppress PhanTypeSuspiciousEcho */
( function () : void {

    echo "\n";

    $env = TwigHelper::forDirectory( __DIR__ . '/templates/' );
    $page = new StaticPage( $env, 'static', [ 'name' => 'World' ] );
    echo $page, "\n\n";

    $map = new Map();
    $page = new MapPage( $env, 'map', $map );
    $map->put( 'name', 'Galaxy' );
    echo $page, "\n\n";

    echo ErrorPage::get( 'error404', [ 'return_url' => '/' ] ), "\n\n";

} )();