# twig

A very thin module for integrate Twig templates into other modules.

## Installation

You can require it directly with Composer:

```bash
composer require jdwx/twig
```

Or download the source from GitHub: https://github.com/jdwx/twig.git

## Requirements

This module requires PHP 8.3, Twig 3.0 or later, and jdwx/web 2.0 or later.

## Usage

This module provides a simple interface for integrating Twig templates into the HtmlPage class provided by jdwx/web. The AbstractPage class can be subclassed to provide values when the template is rendered. The StaticPage class allows values to be provided when the page is instantiated. The MapPage class binds a Map that can be updated at any time.

Here is a basic usage example of using the StaticTwigStream class:

```php
    $env = TwigHelper::forDirectory( __DIR__ . '/templates' );

    $twig = new StaticTwigStream( $env, 'example', [ 'name' => 'Static' ] );
    echo $twig, "\n"; # "Hello, Static!"
```

and the MapTwigStream class:

```php
    $map = new Map();
    $twig = new MapTwigStream( $env, 'example', $map );
    $map->put( 'name', 'Map' );
    echo $twig, "\n"; # "Hello, Map!"
```

## Stability

This module is relatively new and has not been extensively deployed in production yet, but the interface should be relatively stable. There's really not a lot to it; this module exists mainly to keep from introducing Twig as a dependency where it's not needed.

## History

This module was loosely adapted from an existing codebase in early 2025.
