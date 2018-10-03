# Yesnt

[![Build Status](https://travis-ci.org/tractorcow/yesnt.svg?branch=master)](https://travis-ci.org/tractorcow/yesnt)

Provides non-yes boolean logic augmentation

Note: notnt support not currently supported

# installation

`composer require tractorcow/yesnt`

# usage

```php
<?php

use function TractorCow\Yesnt\yesnt;

require 'vendor/autoload.php';

if (yesnt(true)) {
    echo "um, why are you here?";
} else {
    echo "yes, but not";
}
```
