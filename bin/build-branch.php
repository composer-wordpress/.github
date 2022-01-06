<?php

class WordPressPackage
{
  protected array $package = [
    'name' => null,
    'type' => 'wordpress-core',
    'description' => 'WordPress is web software you can use to create a beautiful website or blog.',
    'keywords' => [
      'wordpress',
      'blog',
      'cms'
    ],
    'homepage' => 'https://wordpress.org/',
    'version' => null,
    'license' => 'GPL-2.0-or-later',
    'authors' => [
      [
        'name' => 'WordPress Community',
        'homepage' => 'https://wordpress.org/about/'
      ]
    ],
    'require' => [
      'php' => '>=7.4',
      'roots/wordpress-core-installer' => '^1.0'
    ],
    'provide' => [
      'wordpress/core-implementation' => null
    ],
    'suggest' => [
      'ext-curl' => 'Performs remote request operations.',
      'ext-dom' => 'Used to validate Text Widget content and to automatically configuring IIS7+.',
      'ext-exif' => 'Works with metadata stored in images.',
      'ext-fileinfo' => 'Used to detect mimetype of file uploads.',
      'ext-hash' => 'Used for hashing, including passwords and update packages.',
      'ext-imagick' => 'Provides better image quality for media uploads.',
      'ext-json' => 'Used for communications with other servers.',
      'ext-libsodium' => 'Validates Signatures and provides securely random bytes.',
      'ext-mbstring' => 'Used to properly handle UTF8 text.',
      'ext-mysqli' => 'Connects to MySQL for database interactions.',
      'ext-openssl' => 'Permits SSL-based connections to other hosts.',
      'ext-pcre' => 'Increases performance of pattern matching in code searches.',
      'ext-xml' => 'Used for XML parsing, such as from a third-party site.',
      'ext-zip' => 'Used for decompressing Plugins, Themes, and WordPress update packages.',
    ],
    'support' => [
      'issues' => 'https://core.trac.wordpress.org/',
      'forum' => 'https://wordpress.org/support/',
      'wiki' => 'https://codex.wordpress.org/',
      'irc' => 'irc://irc.freenode.net/wordpress',
      'source' => 'https://core.trac.wordpress.org/browser',
      'docs' => 'https://developer.wordpress.org/',
      'rss' => 'https://wordpress.org/news/feed/'
    ],
    'dist' => [
      'url' => null,
      'type' => 'zip'
    ],
    'source' => [
      'url' => 'git://develop.git.wordpress.org/wordpress.git',
      'type' => 'git',
      'reference' => null
    ]
  ];

  public function __construct(
    public string $releaseType = 'full'
  ) {
    $this->package['name'] = 'composer-wordpress/' . $releaseType;
  }

  public function for(string $version, string $zipURL): self
  {
    $this->package['version'] = $version;
    $this->package['provide']['wordpress/core-implementation'] = $version;
    $this->package['source']['reference'] = $version;
    $this->package['dist']['url'] = $zipURL;

    return $this;
  }

  /**
   * @param array $package
   * @param string $path
   * @return bool|int
   */
  protected function write(string $path)
  {
    $json_options = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES;

    return file_put_contents(
      $path,
      json_encode($this->package, $json_options)
    );
  }

  public function build(string $dir): bool
  {
    return (bool) $this->write("${dir}/composer.json");
  }
}
