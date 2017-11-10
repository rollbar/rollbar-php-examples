# Rollbar PHP Examples: Laravel: Custom Data

How to add dynamic custom data to Rollbar logs in your Laravel application. 

## Installation
1. `composer install`.
2. Provide your Rollbar server side access token in `.env`.

## Usage
1. Either `composer test`.
2. Or navigate to `/welcome`.
3. Verify the custom data is available in the item reported in your Rollbar dashboard.

## Steps used in this example

1. `laravel install simple-logging && cd simple-logging`.
2. Added `"test": "vendor/bin/phpunit"` to the `scripts` section of `composer.json` for consistency with other examples.
3. `composer require rollbar/rollbar-laravel`.
4. Added Rollbar's test server side access token to `.env` under environment variable `ROLLBAR_TOKEN`.
5. No need to add `RollbarServiceProvider` in `config/app.php` since `rollbar/rollbar-laravel` supports auto-discovery.
6. Modified route `/welcome` to report custom data to Rollbar.
10. `composer test`.

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing
To run the example: `composer test`
