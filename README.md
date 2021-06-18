REPL bundle
===========


Provides a `repl` command for the Symfony console, powered by [Boris][boris].


Installation
------------

Add as a development dependency to [composer.json][composer]:

```json
composer require --dev 99designs/repl-bundle
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


Issues
------

Boris depends on [PHP's process control extension][pcntl]. Even if this is
installed, you may see errors like this:

```
PHP Warning:  pcntl_fork() has been disabled for security reasons in /my-project/vendor/d11wtq/boris/lib/Boris/Boris.php on line 148
PHP Notice:  fwrite(): send of 1 bytes failed with errno=32 Broken pipe in /my-project/vendor/d11wtq/boris/lib/Boris/EvalWorker.php on line 205
```

If you see these errors, you'll need to edit your PHP CLI configuration
(typically found at `/etc/php5/cli/php.ini`) to allow invocation of the named
functions.


 [boris]: https://github.com/d11wtq/boris
 [composer]: http://getcomposer.org/
 [pcntl]: http://www.php.net/manual/en/book.pcntl.php
