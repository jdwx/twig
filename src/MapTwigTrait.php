<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use Ds\Map;


trait MapTwigTrait {


    /** @var Map<string, mixed> */
    private readonly Map $map;


    /** @return array<string, mixed> */
    protected function twigValues() : array {
        return $this->map->toArray();
    }


    /**
     * @param Map<string, mixed> $i_map
     * @suppress PhanAccessReadOnlyProperty
     */
    private function twigSetMap( Map $i_map ) : void {
        /** @phpstan-ignore property.readOnlyAssignNotInConstructor */
        $this->map = $i_map;
    }


}