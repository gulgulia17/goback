# goback 💯

[![Packagist License][badge_license]](LICENSE)
[![For PHP][badge_php]][link-github-repo]
![Scrutinizer Code Quality][badge_quality]
[![Github Issues][badge_issues]][link-github-issues]
![Github Stars][badge_stars]
![Github Forks][badge_forks]
[![Packagist][badge_package]][link-packagist]
[![Packagist Release][badge_release]][link-packagist]
[![Packagist Downloads][badge_downloads]][link-packagist]

This package provides you with a simple goback button to use on your blade files. It will let you focus on the development and will handle the back button functionality.

## Installation

Via Composer

```bash
$ composer require gulgulia17/goback
```
## Instructions
Now in your blade file use it like this

```php
  {!! Helper::goBack() !!}
```
this will generate a button using bootstrap classes and in case you don't want to use bootstrap you can pass ``` false ``` as a parameter 

like this ->

```php
  {!! Helper::goBack(false) !!}
```

## License

The MIT Public License. Please see [LICENSE](LICENSE) for more information.

[badge_php]:         https://img.shields.io/badge/PHP-7%20to%208.x-orange.svg
[badge_issues]:      https://img.shields.io/github/issues/gulgulia17/goback
[badge_release]:     https://img.shields.io/packagist/v/gulgulia17/goback
[badge_quality]:     https://img.shields.io/scrutinizer/g/gulgulia17/goback.svg
[badge_downloads]:   https://img.shields.io/packagist/dt/gulgulia17/goback
[badge_package]:     https://img.shields.io/badge/package-gulgulia17/goback-blue.svg
[badge_license]:     https://img.shields.io/github/license/gulgulia17/goback
[badge_stars]:       https://img.shields.io/github/stars/gulgulia17/goback
[badge_forks]:       https://img.shields.io/github/forks/gulgulia17/goback

[link-author]:        https://github.com/gulgulia17
[link-github-repo]:   https://github.com/gulgulia17/goback
[link-github-issues]: https://github.com/gulgulia17/goback/issues
[link-contributors]:  https://github.com/gulgulia17/goback/graphs/contributors
[link-packagist]:     https://packagist.org/packages/gulgulia17/goback
