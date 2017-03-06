# PHPUnit partial mock test lab

## About

This is a test lab for PHPUnit's ability of partial mocks.

## Overview

A partial mock is simply a pattern to alleviate a specific problem in testing with mock objects, that of getting mock
objects into tight corners.

[This](test/UnitTest.php) test case validates PHPUnit's ability to do so.
[SUT](https://phpunit.de/manual/current/en/test-doubles.html) contains two methods, one of which needs to be tested.
However second method creates an unnecessary overhead for this test case and thus has to be mocked in order to isolate
the SUD from side-effects and to separate test case's concerns.

## Dependencies

This project requires following software:
 - PHP ^5.6
 - [Composer](https://getcomposer.org)

## Tested with

This project was tested with the following versions of software:
 - PHP 7.0.13
 - PHPUnit 5.7.15

## Installation

Installs composer dependencies:

```
$ composer install
```

## Usage

Run tests to verify PHPUnit features:

```
$ ./vendor/bin/phpunit --bootstrap vendor/autoload.php ./test
```

## Contribution

Feel free to send PR's, but I feel really sorry for you if you have nothing to do else.

Guidelines:
 - PSR-4 for SUD classes under `Acme` namespace in [src](src) directory.
 - PSR-4 for test case classes under `Acme\Test` namespace in [test](test) directory.

## License

Licensed under MIT License.