# Rollbar PHP Examples

A number of example apps using Rollbar PHP.

## List of examples

- [transformer](https://github.com/rollbar/rollbar-php-examples/tree/master/transformer): setting up a custom transformer which modifies the payload before sending it to Rollbar
- [laravel](https://github.com/rollbar/rollbar-php-examples/tree/master/laravel): all of the Laravel examples are grouped in this directory
    - [simple-logging](https://github.com/rollbar/rollbar-php-examples/tree/master/laravel/simple-logging): this is the most simple, out-of-the-box logging Rollbar provides automatically and by manually invoking the log methods

## Installation

Each example contains a README.md file of it's own with instructions how to set up the example app.

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing
Each project contains the `example.php` file which is the main entrypoint to the example application. It can be invoked using `composer test`.
