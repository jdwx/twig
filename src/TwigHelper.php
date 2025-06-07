<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use Shapecode\Twig\Loader\StringLoader;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


final class TwigHelper {


    /** @param array<string, mixed> $i_rOptions */
    public static function forDirectory( string $i_stDirectory, array $i_rOptions = [] ) : Environment {
        $loader = new FilesystemLoader( $i_stDirectory );
        return new Environment( $loader, $i_rOptions );
    }


    /** @param array<string, mixed> $i_rOptions */
    public static function forStrings( array $i_rOptions = [] ) : Environment {
        $loader = new StringLoader();
        return new Environment( $loader, $i_rOptions );
    }


}
