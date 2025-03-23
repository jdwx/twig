<?php


declare( strict_types = 1 );


namespace JDWX\Web\Twig;


use JDWX\Web\HtmlPage;
use Twig\Environment;
use Twig\TemplateWrapper;


abstract class AbstractPage extends HtmlPage {


    private readonly TemplateWrapper $template;


    public function __construct( Environment $env, string $stTemplate, ?string $i_nstDefaultLanguage = null ) {
        parent::__construct( $i_nstDefaultLanguage );
        if ( ! str_contains( $stTemplate, '.' ) ) {
            $stTemplate = $stTemplate . '.html';
        }
        if ( ! str_contains( $stTemplate, '.twig' ) ) {
            $stTemplate .= '.twig';
        }
        $this->template = $env->load( $stTemplate );
    }


    /** @return iterable<string> */
    protected function content() : iterable {
        return $this->template->stream( $this->values() );
    }


    /** @return array<string, mixed> */
    abstract protected function values() : array;


}
