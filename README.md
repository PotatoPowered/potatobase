# Potatobase
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE) 
[![Travis](https://img.shields.io/travis/PotatoPowered/potatobase.svg?style=flat-square)](https://travis-ci.org/PotatoPowered/potatobase) 
[![Codecov](https://img.shields.io/codecov/c/github/PotatoPowered/potatobase.svg?style=flat-square)](https://codecov.io/github/PotatoPowered/potatobase) 
[![Scrutinizer](https://img.shields.io/scrutinizer/g/PotatoPowered/potatobase.svg?style=flat-square)](https://scrutinizer-ci.com/g/PotatoPowered/potatobase/) 
[![Packagist](https://img.shields.io/packagist/dt/potatopowered/potatobase.svg?style=flat-square)](https://packagist.org/packages/potatopowered/potatobase)

## Description
Potatobase will be an extension of the CakePHP Migrations which is an extension of Phinx migration. This wrapper tool allows us to define standards and other database migration specific standards to be used in the Potato Powered Software applications.

## Installation
Add Potatobase to your composer file either manually (not recommended) or with composer

```
composer require potatopowered/potatobase
```

You can load the plugin using the shell command:

```
bin/cake plugin load Potatobase
```

Or you can manually add the loading statement in the config/boostrap.php file of your applications

```
Plugin::load('Potatobase');
```