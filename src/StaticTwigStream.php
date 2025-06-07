<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use Twig\Environment;


class StaticTwigStream extends AbstractStream {


    use StaticTwigTrait;


    /** @param array<string, mixed> $rValues */
    public function __construct( Environment $env, string $stTemplate, array $rValues = [] ) {
        parent::__construct( $env, $stTemplate );
        $this->twigSetValues( $rValues );
    }


}
