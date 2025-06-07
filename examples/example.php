<?php


declare( strict_types = 1 );


use Ds\Map;
use JDWX\Twig\MapTwigStream;
use JDWX\Twig\StaticTwigStream;
use JDWX\Twig\TwigHelper;


require_once __DIR__ . '/../vendor/autoload.php';


/** @suppress PhanTypeSuspiciousEcho */
( function () : void {

    $env = TwigHelper::forDirectory( __DIR__ . '/templates' );

    $twig = new StaticTwigStream( $env, 'example', [ 'name' => 'Static' ] );
    echo $twig, "\n"; # "Hello, Static!"

    $map = new Map();
    $twig = new MapTwigStream( $env, 'example', $map );
    $map->put( 'name', 'Map' );
    echo $twig, "\n"; # "Hello, Map!"


} )();