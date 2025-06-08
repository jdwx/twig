<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Environments;


use Shapecode\Twig\Loader\StringLoader;


readonly class StringEnvironment extends AbstractEnvironment {


    /** @param array<string, mixed> $i_rOptions */
    public function __construct( array $i_rOptions = [] ) {
        $loader = new StringLoader();
        parent::__construct( $loader, $i_rOptions );
    }


}
