# Taurus SDK for PHP - Version 1

[![Apache 2 License](https://img.shields.io/packagist/l/aws/aws-sdk-php.svg?style=flat)](http://aws.amazon.com/apache-2-0/)

The **Taurus SDK for PHP** makes it easy for developers to access [Amazon Web Services][aws] in their PHP code. You can
get started in minutes by downloading a single zip or gzip file from our [latest release][latest-release].

Jump To:

* [Getting Started](#Getting-Started)
* [Quick Examples](#Quick-Examples)
* [More Examples](#More Examples)

## Getting Started

1. **Sign up for Taurus** – Before you begin, you need to sign up for an Taurus account and retrieve
   your [Taurus credentials][docs-signup].
1. **Minimum requirements** – To run the SDK, your system will need to meet the minimum requirements, including
   having **PHP >= 5.5**. We highly recommend having it compiled with the cURL extension and cURL 7.16.2+ compiled with
   a TLS backend (e.g., NSS or OpenSSL).
1. **Install the SDK** – Download the single zip or gzip file from our latest release site and unzip the source code to
   your project.
1. **Using the SDK** – The best way to become familiar with how to use the SDK is to read the [User Guide][docs-guide].
   The
   [Getting Started Guide](#Getting-Started) will help you become familiar with the basic concepts.

## Quick Examples

### Create an Taurus client

```php
<?php
require 'taurus/TaurusClient.php';
use Silot\TaurusClient;

// Instantiate an Taurus client.
$taurus = new TaurusClient(self::$apiKey, self::$serverUrl);
```

### List Invoices

```php
<?php
// List invoices
try {
    $result = $taurus->listInvoice();
} catch (Exception $e) {
    echo "There was an error.\n";
}
```

## More Examples

For more examples, please refer to [More Examples][docs-more-examples]

[latest-release]: https://github.com/silotrd/taurus-sdk-php/releases

[docs-signup]: https://mc.silot.ai/

[docs-guide]: http://k8s-azure.silot.tech:40015/

[docs-quickstart]: https://mc.silot.ai/

[docs-more-examples]: https://github.com/silotrd/taurus-sdk-php/blob/main/src/examples/TaurusExamples.php