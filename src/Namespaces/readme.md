# Namespace Sorting

Given a list of fully qualified PHP classes, ie:

```php
Foo\Bar\Zat;
Acme\Foo\Bar;
Aaaaa\Aaaaaaa\Aaaaa\Aaaa\Aaa;
Acme\Foo\Bat;
Acme\AcmeUnit\Test;
Acme\Bar;
Bar;
```

Sort the list by how deeply nested the class is, then by alphabetical order.

I.e. the expected output for the above would be:
```
Bar;
Acme\Bar;
Acme\AcmeUnit\Test;
Acme\Foo\Bar;
Acme\Foo\Bat;
Foo\Bar\Baz;
Aaaaa\Aaaaaaa\Aaaaa\Aaaa\Aaa;
```
