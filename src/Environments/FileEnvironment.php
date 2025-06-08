<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Environments;


use Twig\Loader\FilesystemLoader;


readonly class FileEnvironment extends AbstractEnvironment {


    /** @param array<string, mixed> $i_rOptions */
    public function __construct( string $i_stDirectoryPath, array $i_rOptions = [] ) {
        $loader = new FilesystemLoader( $i_stDirectoryPath );
        parent::__construct( $loader, $i_rOptions );
    }


    protected function name( string $name ) : string {
        if ( ! str_contains( $name, '.' ) ) {
            $name = $name . '.html';
        }
        if ( ! str_contains( $name, '.twig' ) ) {
            $name .= '.twig';
        }
        return parent::name( $name );
    }


}
