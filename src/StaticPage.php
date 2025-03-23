<?php


declare( strict_types = 1 );


namespace JDWX\Web\Twig;


use Twig\Environment;


/**
 * A template page that is populated with a static array of values
 * at the time of instantiation.
 */
class StaticPage extends AbstractPage {


    /** @param array<string, mixed> $rValues */
    public function __construct( Environment $env, string $stTemplate, private readonly array $rValues ) {
        parent::__construct( $env, $stTemplate );
    }


    /**
     * @inheritDoc
     */
    protected function values() : array {
        return $this->rValues;
    }


}
