# Plivo bundle

This bundle creates a Symfony wrapper service for the official Plivo PHP helper library

## Installation

```bash
composer require invit/plivo-bundle
```

Also, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Invit\PlivoBundle\InvitPlivoBundle(),
    );
}
```

Configure the application with the credentials you find on the [plivo dashboard](https://manage.plivo.com/dashboard/).

``` yaml
// app/config/config.yml:
invit_plivo:
    auth:
        auth_id:      "xxxxx"
        auth_token:   "yyyyy"
```

## Example

```php
$this->get('invit.plivo')->play([
    'call_uuid' => 'cf5fe5ff-9952-yyyy-xxxx-b75ff490ffff',
    'urls' => 'https://s3-eu-west-1.amazonaws.com/waitsongbucket/wait.mp3',
    'loop' => 'true',
    'mix' => 'false',
    'legs' => 'both'
]);
```
