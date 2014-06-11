<?php
include __DIR__.'/vendor/autoload.php';
use Lotus\Almari\AliasMapper as AliasMapper;
use MyProject\MyPackage\MyApplication as MyApplication;
use MyProject\MyPackage\MyFacade as MyFacade;
use MyProject\MyPackage\Foo as Foo;
use MyProject\MyPackage\Facade\FooFacade as FooFacade;

$app = new MyApplication();

// Create Foo Class Instance
$foo = new Foo();

// Share $foo as a singeleton
$app->share('foo',$foo);

// Now you can access foo
$foo2 = $app->get('foo');

// Test $foo === $foo2
$identical = $foo===$foo2;

echo '$foo'." is identical with ".'$foo2'." = $identical <br><br>";

// Facading $foo to FooFacade
$aliasMapper = AliasMapper::getInstance();

$alias['FooFacade'] = 'MyProject\MyPackage\Facade\FooFacade';

$aliasMapper->facadeClassAlias($alias);

//Register container to facade
MyFacade::setFacadeContainer($app);

FooFacade::greet("Todi");

