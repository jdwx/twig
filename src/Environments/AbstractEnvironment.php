<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Environments;


use Twig\Environment;
use Twig\Loader\LoaderInterface;
use Twig\TemplateWrapper;


abstract readonly class AbstractEnvironment implements EnvironmentInterface {


    protected Environment $env;


    /** @param array<string, mixed> $i_rOptions */
    public function __construct( LoaderInterface $i_loader, array $i_rOptions = [] ) {
        $this->env = new Environment( $i_loader, $i_rOptions );
    }


    public function load( string $name ) : TemplateWrapper {
        return $this->env->load( $this->name( $name ) );
    }


    public function render( string $name, array $rData = [] ) : string {
        return $this->env->render( $this->name( $name ), $rData );
    }


    protected function name( string $name ) : string {
        return $name;
    }


}
