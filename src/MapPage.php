<?php


declare( strict_types = 1 );


namespace JDWX\Web\Twig;


use Ds\Map;
use Twig\Environment;


/**
 * Allows populating a Twig template with a Map that can be
 * modified externally up until rendering occurs.
 */
class MapPage extends AbstractPage {


    /** @param Map<string, mixed> $map */
    public function __construct( Environment $env, string $stTemplate, private readonly Map $map ) {
        parent::__construct( $env, $stTemplate );
    }


    /**
     * @inheritDoc
     */
    protected function values() : array {
        return $this->map->toArray();
    }


}
