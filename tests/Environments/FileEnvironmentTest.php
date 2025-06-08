<?php


declare( strict_types = 1 );


namespace JDWX\Twig\Tests\Environments;


use JDWX\Twig\Environments\AbstractEnvironment;
use JDWX\Twig\Environments\FileEnvironment;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Twig\TemplateWrapper;


#[CoversClass( AbstractEnvironment::class )]
#[CoversClass( FileEnvironment::class )]
final class FileEnvironmentTest extends TestCase {


    public function testLoadForFullFilename() : void {
        $env = new FileEnvironment( __DIR__ . '/../templates' );
        self::assertInstanceOf( TemplateWrapper::class, $env->load( 'test.html.twig' ) );
    }


    public function testLoadForHtmlOnly() : void {
        $env = new FileEnvironment( __DIR__ . '/../templates' );
        self::assertInstanceOf( TemplateWrapper::class, $env->load( 'test.html' ) );
    }


    public function testLoadForTag() : void {
        $env = new FileEnvironment( __DIR__ . '/../templates' );
        self::assertInstanceOf( TemplateWrapper::class, $env->load( 'test' ) );
    }


    public function testRender() : void {
        $env = new FileEnvironment( __DIR__ . '/../templates' );
        self::assertSame( 'Hello, file!', $env->render( 'test.html.twig', [ 'name' => 'file' ] ) );
    }


}
