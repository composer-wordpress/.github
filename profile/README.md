[Composer](https://getcomposer.org/) is **dependency manager** command line utility and accompanying infrastructure tools. It is made in PHP and for PHP.  
It can help you improve how you **develop, share, make use of, host, and deploy** your [WordPress](https://wordpress.org/) code and whole site stacks.

Checkout [Guide to Composer in WordPress](https://composer.rarst.net/) to read more on benefits it can bring. 

## Usage

```shell
composer require composer-wordpress/<release-type>
```

## Release Types

Name|Official|Packagist|Repository|Themes|Plugins
--|:--:|:--:|:--:|--|--
Full|✅|[`full`](https://packagist.org/packages/composer-wordpress/full)|[`full`](https://github.com/composer-wordpress/full)|[3 latest official](https://wordpress.org/themes/author/wordpressdotorg/)|[Akismet](https://wordpress.org/plugins/akismet/), [Hello Dolly](https://wordpress.org/plugins/hello-dolly/)
New bundled|✅*|[`new-bundled`](https://packagist.org/packages/composer-wordpress/new-bundled)|[`new-bundled`](https://github.com/composer-wordpress/new-bundled)|[3 latest official](https://wordpress.org/themes/author/wordpressdotorg/)|none
No content|✅*|[`no-content`](https://packagist.org/packages/composer-wordpress/no-content)|[`no-content`](https://github.com/composer-wordpress/no-content)|none|none

<small>
  * These builds are made available by WordPress.org but are not extensively documented.
</small>

## Plugins

[WordPress Packagist](https://wpackagist.org/) mirrors the WordPress [plugin](https://plugins.svn.wordpress.org/) and [theme](https://themes.svn.wordpress.org/) directories as a [Composer](https://getcomposer.org/) repository.  
It can be used to easily required any plugins from the [WordPress Plugin Directory](https://wordpress.org/plugins/).

Checkout official documentation on [wpackagist.org](https://wpackagist.org/).
