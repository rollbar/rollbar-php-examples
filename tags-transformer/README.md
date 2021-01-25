# Rollbar PHP Examples: LaunchDarklyTransformer

This project is an example of how to set up a custom transformer for Rollbar
reporting for your PHP application. We use this functionality to move data in
the custom object to the root level of the payload under a new key.

## Installation

1. `cp config/secret.example.php config/secret.php`
2. Fill out `config/secret.php` with your Rollbar server-side access token.

## Steps used in this example
1. Set up `rollbar/rollbar` as a dependency with `composer require rollbar/rollbar`.
2. Create your transformer class in `src/TagsTransformer.php` which implements `TransformerInterface`.
3. Implement `transform` method in your `TagsTransformer` with desired business logic. Make sure you return the $payload object from this method.
4. Set up Rollbar with your `TagsTransformer` class in `example.php` using `transformer` configuration option.
5. Run `composer test` and verify that your `tags` data is being sent to Rollbar.

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing
To run the example: `composer test`