<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use Stringable;


trait StaticTwigTrait {


    /** @var array<string, mixed> */
    private array $rValues = [];


    /** @return array<string|Stringable> */
    protected function twigValues() : array {
        return $this->rValues;
    }


    /**
     * @param array<string, mixed> $i_rValues
     * @suppress PhanAccessReadOnlyProperty
     */
    private function twigSetValues( array $i_rValues ) : void {
        $this->rValues = $i_rValues;
    }


}