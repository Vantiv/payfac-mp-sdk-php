[![Build Status](https://travis-ci.org/Vantiv/cnp-chargeback-sdk-php.svg?branch=2.x)](https://travis-ci.org/Vantiv/cnp-chargeback-sdk-php)
[![codecov](https://codecov.io/gh/Vantiv/cnp-chargeback-sdk-php/branch/2.x/graph/badge.svg)](https://codecov.io/gh/Vantiv/cnp-chargeback-sdk-php)


# payfac-mp-sdk-php

The PayFac Merchant Provisioner SDK is a PHP implementation of the [Worldpay](https://developer.vantiv.com/community/ecommerce) PayFac Merchant Provisioner API. This SDK was created to make it as easy as possible to perform operations that allows you to create and update Legal Entities and Sub-merchants, as well as retrieve information about existing Legal Entities and Sub-merchants in near real-time. This SDK utilizes the HTTPS protocol to securely connect to Worldpay. Using the SDK requires coordination with the Vantiv eCommerce team in order to be provided with credentials for accessing our systems.

Each Java SDK release supports all of the functionality present in the associated PayFac Merchant Provisioner API version (e.g., SDK v13.0.0 supports API v13.0.0). Please see our [documentation](https://developer.vantiv.com/community/ecommerce/pages/documentation) for PayFac Merchant Provisioner API to get more details on what operations are supported.

This SDK is implemented to support the PHP programming language and is created by Worldpay. Its intended use is for PayFac API operations with Worldpay.

## Getting Started

These instructions will help you get started with using the SDK.


## Dependencies
Up to date list available at [Packagist](https://packagist.org/packages/vantiv/payfac-sdk)


### Setup

#### Using with composer

If you are using a composer to manage your dependencies, you can do the following in your project directory:

1. Install the composer using command

```bash
curl -sS https://getcomposer.org/install | php
```

2. Install dependencies using the command
```bash
php composer.phar install
```

3. Configure the SDK
```bash
cd cnp/sdk
php Setup.php
```


#### Using without composer

Add a require for each and every class that's going to be used.

1. Configure the SDK
```bash
cd into cnp/sdk
php Setup.php
```

2. Add the cnp folder and require the path for your file
3. run your file 
```bash
php your_file
```


#### Clone Repo

1. Install the Vantiv eCommerce PHP SDK from git. 

```bash
git clone git://github.com/Vantiv/cnp-chargeback-sdk-php.git
php ~/composer.phar install
```


2. Once the SDK is downloaded run our setup program to generate a configuration file.

```bash
cd cnp-chargeback-sdk-php/lib
php Setup.php
```

Running the above commands will create a configuration file in the lib directory. 


3. Create a symlink to the SDK

```bash
ln -s /path/to/sdk /var/www/html/nameOfLink
```

### Configuration
List of configuration parameters along with their values can be found [here](https://gist.github.com/VantivSDK/8b7dd606230ec65b36eba457df4443de).

## Usage example

```php

 // Retrieve information about a chargeback
$chargebackRetrieval = new cnp\sdk\ChargebackRetrieval();
$response = $chargebackRetrieval->getChargebacksByDate("2018-01-01");

// You may also use a tree-oriented style to get the response values:
$chargebackRetrieval = new cnp\sdk\ChargebackRetrieval($treeResponse = true);
$response = $chargebackRetrieval->getChargebackByCaseId("12345000");

// Update chargeback case
$chargebackUpdate = new cnp\sdk\ChargebackUpdate();
$chargebackUpdate->representCase("12345000", "Note on activity", $representment_amount = 1000);

// Manage supporting documents for chargeback case
$chargebackDocument = new cnp\sdk\ChargebackDocument();
$chargebackDocument->uploadDocument("12345000", "invoice.pdf");

```

```bash
 php your_sample_name
```

NOTE: you may have to change the path to match that of your filesystems.  

If you get an error like:
```bash
PHP Fatal error:  require_once(): Failed opening required '/home/user/git/cnp-chargback-sdk-php/../lib/Chargeback.php' (include_path='.:/usr/share/pear:/usr/share/php') in /home/user/git/cnp-chargback-sdk-php/foo.php on line 2
```
You need to change the second line of your script to load the real location of Chargeback.php

## Versioning
For the versions available, see the [tags on this repository](https://github.com/vantiv/payfac-mp-sdk-java/tags). 

## Changelog
For the list of changes, check out the [changelog](https://github.com/Vantiv/payfac-mp-sdk-java/blob/13.x/CHANGELOG.md)

## Authors

* [**Ajjunesh Raju**](https://github.com/Ajjunesh)
* [**Kartik Dave**](https://github.com/davekartik24)

See also the list of [contributors](https://github.com/vantiv/payfac-mp-sdk-java/contributors) who participated in this project.

## License
This project is licensed under the MIT License - see the [LICENSE](https://github.com/Vantiv/payfac-mp-sdk-java/blob/13.x/LICENSE.md) file for details

## Examples
More examples can be found in [Functional and Unit Tests](https://github.com/Vantiv/payfac-mp-sdk-java/tree/13.x/src/test/java/com/mp/sdk)

## Support
Please contact [Vantiv eCommerce](https://developer.vantiv.com/community/ecommerce) to receive valid merchant credentials in order to run tests successfully or if you require assistance in any way.  Support can also be reached at sdksupport@Vantiv.com
