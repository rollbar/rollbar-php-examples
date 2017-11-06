# Rollbar PHP Examples: Custom Data

Here we will set up persistent custom data in the `RollbarLogger` object which
will be attached to all reported messages.
## Installation

1. `cp config/secret.example.php config/secret.php`
2. Fill out `config/secret.php` with your Rollbar server-side access token. 

## Steps used in this example
1. Set up `rollbar/rollbar` as a dependency with `composer require rollbar/rollbar`.
2. Create the `ExampleDataObject` class to be stored as custom data.
3. Set up data in a `ExampleDataObject` instance in `example.php`.
4. Save a reference to the `ExampleDataObject` instance in `RollbarLogger`'s custom data.
5. Add custom data to `RollbarLogger` dynamically.
6. Send a message to Rollbar and verify that the the `ExampleDataObject` instance data has been received by Rollbar.

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing
To run the example: `composer test`
