<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use JDWX\Twig\Environments\EnvironmentInterface;
use JDWX\Twig\Environments\FileEnvironment;
use JDWX\Twig\Environments\StringEnvironment;


final class TwigHelper {


    /** @param array<string, mixed> $i_rOptions */
    public static function forDirectory( string $i_stDirectory, array $i_rOptions = [] ) : EnvironmentInterface {
        return new FileEnvironment( $i_stDirectory, $i_rOptions );
    }


    /** @param array<string, mixed> $i_rOptions */
    public static function forStrings( array $i_rOptions = [] ) : EnvironmentInterface {
        return new StringEnvironment( $i_rOptions );
    }


}
