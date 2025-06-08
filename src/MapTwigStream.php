<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use Ds\Map;
use JDWX\Twig\Environments\EnvironmentInterface;


class MapTwigStream extends AbstractStream {


    use MapTwigTrait;


    /** @param Map<string, mixed> $map */
    public function __construct( EnvironmentInterface $env, string $stTemplate, Map $map ) {
        parent::__construct( $env, $stTemplate );
        $this->twigSetMap( $map );
    }


}
