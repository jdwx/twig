<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Tests\Environments;


use JDWX\Twig\Environments\AbstractEnvironment;
use JDWX\Twig\Environments\StringEnvironment;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Twig\TemplateWrapper;


#[CoversClass( AbstractEnvironment::class )]
#[CoversClass( StringEnvironment::class )]
final class StringEnvironmentTest extends TestCase {


    public function testLoad() : void {
        $env = new StringEnvironment();
        self::assertInstanceOf( TemplateWrapper::class, $env->load( 'Hello, {{ name }}!' ) );
    }


    public function testRender() : void {
        $env = new StringEnvironment();
        self::assertSame(
            'Hello, string!',
            $env->render( 'Hello, {{ name }}!', [ 'name' => 'string' ] )
        );
    }


}
