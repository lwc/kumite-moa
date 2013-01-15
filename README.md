kumite-moa
==========

Bridge library to back Kumite onto mongoDb via moa

#### Installing
`composer require lwc/kumite-moa`

#### Using
Provide an instance of `MoaStorageAdapter` during the setup of kumite:
```php
<?php

Kumite::setup(array(
  'storageAdapter' => new MoaStorageAdapter(),
  'tests' => function() {
    require_once('path/to/configuration/file.php');
    return $config;
  }
));
```

#### Querying
Query for events and participants via the Moa domain objects, see [99designs/moa](https://github.com/99designs/moa) for details
