# Rollbar PHP Examples: TagsTransformer

This project is an example of how to set up a custom transformer to modify the payload sent by the PHP SDK to match
what is expected from our beta LaunchDarkly integration. The integration is expecting the feature flag key to be sent
as a tag object in the `tags` section of the payload. By following this example, you should be able to do just that.

## Steps used in this example

1. Set up `rollbar/rollbar` as a dependency with `composer require rollbar/rollbar`.

2. Create your transformer class in `src/TagsTransformer.php` which implements `TransformerInterface`. Create your data class which implements `Data` (found in `src/TagsTransformer.php`).

3. Implement `transform` method in your `TagsTransformer` with desired business logic. Make sure you return the $payload object from this method.

4. Set up Rollbar with your `TagsTransformer` class in `example.php` using `transformer` configuration option.

5. Set your API token into the environment. On Mac/Linux/UNIX, try `export ROLLBAR_TOKEN=the-access-token`. On Windows CMD, use set `ROLLBAR_TOKEN="the-access-token"`. For Windows PowerShell, use `$env:ROLLBAR_TOKEN="the-access-token"`.

6. Run `composer test` and verify that the extra data is sent under the `tags` key in Rollbar.

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

## Testing

To run the example:

Make sure to set your Rollbar API access token in the ROLLBAR_TOKEN environment variable in step 5 and then run: `composer test`.
