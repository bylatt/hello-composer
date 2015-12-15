## Sample composer package

#### Install from github repo
```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/clozed2u/hello-composer.git"
    }
  ],
  "require": {
    "clozed2u/hello-composer": "1.0.0"
  }
}
```

#### Install from packagist.org
```
{
    "require": {
        "clozed2u/hello-composer": "^1.0"
    }
}
```

#### Or one line command with composer require
```
composer require clozed2u/hello-composer=1.0.0
```

#### Usage
```
<?php

require_once __DIR__ . "/vendor/autoload.php";

$hum = new \Hello\Hello();
print $hum->sayAnything("X JAPAN ROCK!!!");
```
