<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use JDWX\Twig\Environments\EnvironmentInterface;
use Stringable;
use Twig\TemplateWrapper;


trait TwigTrait {


    private readonly TemplateWrapper $template;


    /** @return iterable<string|Stringable> */
    public function twigStream() : iterable {
        yield from $this->template->stream( $this->twigValues() );
    }


    /** @return array<string, mixed> */
    abstract protected function twigValues() : array;


    /** @suppress PhanAccessReadOnlyProperty */
    private function twigSetTemplate( EnvironmentInterface $env, string $i_stTemplate ) : void {
        /** @phpstan-ignore property.readOnlyAssignNotInConstructor */
        $this->template = $env->load( $i_stTemplate );
    }


}