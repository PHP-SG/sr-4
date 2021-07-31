# PSG SR 4 Flexible Layered DI App Standard
PHP is a language of flexibilty.  Why shouldn't our apps be based on a flexible standard - make the framework account for flexibility, and allow the users to have flexibility in the code they write.

By this standard:
-	wares shall have a `process` method
-	wares (middle, front, back, ...) shall expect injected dependencies into both `__construct` and `process`
-	For HTTP Apps:
	-	framework shall allow injection for all Sr1 factories and  `Pgs\Sr1\ResponseInterface`, `Pgs\Sr1\ServerRequestInterface`, `Pgs\Sr4\ExitResponseInterface`
	-	output of wares can include, not limited to, `Pgs\Sr1\ResponseInterface`, `Pgs\Sr1\ServerRequestInterface`, `Pgs\Sr4\ExitResponseInterface`
		-	framework shall integrated these into the response and request
-	framework shall implement
	-	->get() for retrieving a named service
	-	->set() for adding a named service
	-	->call() for calling something with dependency injection.  This can include constructing a class, by providing just the class name.
	-	->data() for retrieving and setting data
		-	->data(key): retrieve
		-	->data(key, value): set

Because interfaces do not allow defining only the presense of a method, the fulfillment of the standard is left up to the programmer (a method defined with no arguments in an interface then requires implementers to make all arguments optional).

## Flow
See [SR-2](https://github.com/PHP-SG/sr-2)

## SR 2 Variances
-	the parameters and returns are not specified in the interface.  This is to allow the framework to accept a variety of returns, including PSR 7 an SR-1 returns, and then integrate those returns
-	Coreware now has an interface.  It can still be injected as a closure
-	Corewars array.  It is now possible to have multiple corewares.
	-	if you want to remove all coreware:
```php
$App->remove(Coreware::class)
```
