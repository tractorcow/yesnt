# Yesnt

Provides non-yes boolean logic augmentation

Note: notnt support not currently supported

# installation

`composer require tractorcow/yesnt`

# usage

```php
<?php

require 'vendor/autoload.php';

if (yesnt(true)) {
    echo "um, why are you here?";
} else {
    echo "yes, but not";
}
```