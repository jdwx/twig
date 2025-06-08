<?php


declare( strict_types = 1 );


namespace JDWX\Twig;


use JDWX\Stream\StringableStreamInterface;
use JDWX\Stream\StringableStreamTrait;
use JDWX\Twig\Environments\EnvironmentInterface;


abstract class AbstractStream implements StringableStreamInterface {


    use StringableStreamTrait;
    use TwigTrait;


    public function __construct( EnvironmentInterface $env, string $stTemplate ) {
        $this->twigSetTemplate( $env, $stTemplate );
    }


    public function stream() : iterable {
        yield from $this->twigStream();
    }


}
