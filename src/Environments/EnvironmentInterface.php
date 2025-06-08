<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Environments;


use Twig\TemplateWrapper;


interface EnvironmentInterface {


    public function load( string $name ) : TemplateWrapper;


    /** @param array<string, mixed> $rData */
    public function render( string $name, array $rData = [] ) : string;


}