# Rollbar PHP Examples: Laravel: Simple Automatic Logging

This will show you the most basic use case for Rollbar PHP Laravel. It just
automatically reports a problem we caused in the application to Rollbar service.

## Installation
1. `composer install`.
2. Provide your Rollbar server side access token in `.env`.

## Steps used in this example
1. `laravel install simple-automatic-logging && cd simple-automatic-logging`.
2. Added `"test": "vendor/bin/phpunit"` to the `scripts` section of `composer.json` for consistency with other examples.
3. `composer require rollbar/rollbar-laravel`.
4. Added Rollbar's test server side access token to `.env` under environment variable `ROLLBAR_TOKEN`.
5. No need to add `RollbarServiceProvider` in `config/app.php` since `rollbar/rollbar-laravel` supports auto-discovery.
6. `composer test`.

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing
To run the example: `composer test`
