# Flysystem HTTP Downloader

[![Latest Version](https://img.shields.io/github/release/indigophp/flysystem-http-downloader.svg?style=flat-square)](https://github.com/indigophp/flysystem-http-downloader/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/indigophp/flysystem-http-downloader.svg?style=flat-square)](https://travis-ci.org/indigophp/flysystem-http-downloader)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/indigophp/flysystem-http-downloader.svg?style=flat-square)](https://scrutinizer-ci.com/g/indigophp/flysystem-http-downloader)
[![Quality Score](https://img.shields.io/scrutinizer/g/indigophp/flysystem-http-downloader.svg?style=flat-square)](https://scrutinizer-ci.com/g/indigophp/flysystem-http-downloader)
[![HHVM Status](https://img.shields.io/hhvm/indigophp/flysystem-http-downloader.svg?style=flat-square)](http://hhvm.h4cc.de/package/indigophp/flysystem-http-downloader)
[![Total Downloads](https://img.shields.io/packagist/dt/indigophp/flysystem-http-downloader.svg?style=flat-square)](https://packagist.org/packages/indigophp/flysystem-http-downloader)
[![Dependency Status](https://img.shields.io/versioneye/d/php/indigophp:flysystem-http-downloader.svg?style=flat-square)](https://www.versioneye.com/php/indigophp:flysystem-http-downloader)

**Download any HTTP content to a file.**


## Install

Via Composer

``` bash
$ composer require indigophp/flysystem-http-downloader
```


## Usage

Simple downloader usage:

``` php
use Indigo\Flysystem\Downloader;
use League\Flysystem\Filesystem;
use Ivory\HttpAdapter\HttpAdapterInterface;
use Psr\Http\Message\RequestInterface;

$downloader = new Downloader(new Filesystem, /* HttpAdapterInterface */);

$request = /* RequestInterface */;

$downloader->download($request, 'path/to/file');
```


## Testing

``` bash
$ phpspec run
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/indigophp/flysystem-http-downloader/contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
