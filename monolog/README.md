# Rollbar PHP Examples: Monolog

This project is an example of how to set up error reporting with Rollbar through
Monolog for your PHP application.

*Note:* Currently `PsrHandler` incorrectly reports exception objects logged with `log` method as strings instead of objects. This will cause your `log`-reported errors to be interpretted in Rollbar as message strings. The preferred way to use Rollbar with Monolog is through `RollbarHandler` class, however, at the moment, it's outdated. Pull request [Sync RollbarHandler with the latest changes rollbar/rollbar package](https://github.com/Seldaek/monolog/pull/1042) with a fix is awaiting merging into Monolog package. This issue has been originally brought up in [Log->error($e) has different info than throw the exception and let error_reporting handle it](https://github.com/rollbar/rollbar-php/issues/275).

## Installation

1. `cp config/secret.example.php config/secret.php`
2. Fill out `config/secret.php` with your Rollbar server-side access token. 

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing
To run the example: `composer test`
