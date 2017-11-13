# Rollbar PHP Examples: Laravel: Simple Logging

This will show you the most basic use case for Rollbar PHP Laravel. 
AutomaticTest shows Rollbar's default automatic error logging. ManualTest shows
Rollbar's invoked logging.

## Installation
1. `composer install`.
2. Provide your Rollbar server side access token in `.env`.

## Usage
1. Either `composer test`.
2. Or navigate to `/automatic`, `/manual` and `/context` paths of your example application.

## Steps used in this example

1. `laravel install simple-logging && cd simple-logging`.
2. Added `"test": "vendor/bin/phpunit"` to the `scripts` section of `composer.json` for consistency with other examples.
3. `composer require rollbar/rollbar-laravel`.
4. Added Rollbar's test server side access token to `.env` under environment variable `ROLLBAR_TOKEN`.
5. No need to add `RollbarServiceProvider` in `config/app.php` since `rollbar/rollbar-laravel` supports auto-discovery.
6. Added a route `/automatic` that throws an exception which should result in the exception being reported in the Rollbar service.
7. Added `tests/Feature/AutomaticTest.php`.
8. Added a route `/manual` that throws an exception which should result in the exception being reported in the Rollbar service.
9. Added `tests/Feature/ManualTest.php`.
10. Added a route `/context` that throws an exception with custom data which should result in the exception being reported in the Rollbar service.
11. Added `tests/Feature/ContextTest.php`.
12. Added `resources/views/automatic.blade.php`.
12. Added `resources/views/manual.blade.php`.
12. Added `resources/views/context.blade.php`.
13. Modified `resources/views/welcome.blade.php`.
14. `composer test`.

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing
To run the example: `composer test`
