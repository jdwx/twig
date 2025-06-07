<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use Stringable;
use Twig\Environment;
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
    private function twigSetTemplate( Environment $env, string $i_stTemplate ) : void {
        if ( ! str_contains( $i_stTemplate, '.' ) ) {
            $i_stTemplate = $i_stTemplate . '.html';
        }
        if ( ! str_contains( $i_stTemplate, '.twig' ) ) {
            $i_stTemplate .= '.twig';
        }
        /** @phpstan-ignore property.readOnlyAssignNotInConstructor */
        $this->template = $env->load( $i_stTemplate );
    }


}