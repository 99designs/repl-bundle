REPL bundle
===========


Provides a `repl` command for the Symfony console, powered by [Boris][boris].


Installation
------------

Add as a development dependency to [composer.json][composer]:

```json
{
  "require-dev": {
    "99designs/repl-bundle": "0.0.*@dev"
  }
}
```

Register the bundle in `app/AppKernel.php`:

```php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // all your run-time bundles
        );

        if ($this->getEnvironment() == 'dev') {
            $bundles[] = new NinetyNine\Bundle\ReplBundle();
        }

        return $bundles;
    }
}
```


Usage
-----

Run via the Symfony console:

```sh
app/console repl
```

The following variables are imported into the global namespace:

 * `$kernel`: Application kernel
 * `$container`: The DI container


 [boris]: https://github.com/d11wtq/boris
 [composer]: http://getcomposer.org/
