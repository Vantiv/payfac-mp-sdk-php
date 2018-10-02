[![Build Status](https://travis-ci.org/Vantiv/payfac-mp-sdk-php.svg?branch=13.x)](https://travis-ci.org/Vantiv/payfac-mp-sdk-php)
[![codecov](https://codecov.io/gh/Vantiv/payfac-mp-sdk-php/branch/13.x/graph/badge.svg)](https://codecov.io/gh/Vantiv/payfac-mp-sdk-php)


# payfac-mp-sdk-php

The PayFac Merchant Provisioner SDK is a PHP implementation of the [Worldpay](https://developer.vantiv.com/community/ecommerce) PayFac Merchant Provisioner API. This SDK was created to make it as easy as possible to perform operations that allows you to create and update Legal Entities and Sub-merchants, as well as retrieve information about existing Legal Entities and Sub-merchants in near real-time. This SDK utilizes the HTTPS protocol to securely connect to Worldpay. Using the SDK requires coordination with the Vantiv eCommerce team in order to be provided with credentials for accessing our systems.

Each PHP SDK release supports all of the functionality present in the associated PayFac Merchant Provisioner API version (e.g., SDK v13.0.0 supports API v13.0.0). Please see our [documentation](https://developer.vantiv.com/community/ecommerce/pages/documentation) for PayFac Merchant Provisioner API to get more details on what operations are supported.

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
cd payfac-sdk/sdk
php Setup.php
```


#### Using without composer

Add a require for each and every class that's going to be used.

1. Configure the SDK
```bash
cd into payfac-mp-sdk-php
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
git clone git://github.com/Vantiv/payfac-mp-sdk-php.git
php ~/composer.phar install
```


2. Once the SDK is downloaded run our setup program to generate a configuration file.

```bash
cd payfac-mp-sdk-php/lib
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

 // Retrieve information
 $response = $this->legalEntity->getLegalEntity(2018);

// Post new Principal:
$principal = new src\sdk\Principal();
$principalCreateRequest = new LegalEntityPrincipalCreateRequest();
$principalInRequest = new LegalEntityPrincipalType();
$principalInRequest->setTitle("Mr.");
$principalInRequest->setFirstName("First");
$principalInRequest->setLastName("Last");
$principalInRequest->setEmailAddress("abc@gmail.com");
$principalInRequest->setSsn("123450015");
$principalInRequest->setDateOfBirth("1980-10-12");
$address = new PrincipalAddressType();
$address->setStreetAddress1("p2 street address 1");
$address->setStreetAddress2("p2 street address 2");
$address->setCity("Boston2");
$address->setStateProvince("MA");
$address->setPostalCode("01892");
$address->setCountryCode("USA");
$principalInRequest->setAddress($this->address);
$principalInRequest->setStakePercent(100);
$principalCreateRequest->setPrincipal($this->principalInRequest);

$response =  $principal->postPrincipal(2018, $principalCreateRequest);

// Update LegalEntity
$legalEntityUpdate = new LegalEntityUpdateRequest();
$address = new AddressUpdatableType();
$address->setStreetAddress1("LE street address 1");
$address->setStreetAddress2("LE street address 2");
$address->setCity("LE city");
$address->setStateProvince("MA");
$address->setPostalCode("01892");
$address->setCountryCode("USA");
$legalEntityUpdate -> setAddress($address);
$legalEntityUpdate -> setContactPhone("9785550101");
$legalEntityUpdate -> setDoingBusinessAs("Other Name Co.");
$legalEntityUpdate -> setAnnualCreditCardSalesVolume(10000000);
$legalEntityUpdate -> setHasAcceptedCreditCards(true);
$principal = new LegalEntityPrincipalUpdatableType();
$principal -> setPrincipalId(9);
$principal -> setTitle("CEO");
$principal -> setEmailAddress("jdoe@mail.ney");
$principal -> setContactPhone("9785551234");
$principalAddressType = new PrincipalAddressType();
$principalAddressType->setStreetAddress1("p street address 1");
$principalAddressType->setStreetAddress2("p street address 2");
$principalAddressType->setCity("Boston");
$principalAddressType->setStateProvince("MA");
$principalAddressType->setPostalCode("01892");
$principalAddressType->setCountryCode("USA");
$principal -> setAddress($principalAddressType);
$principalBackgroundCheckField = new PrincipalBackgroundCheckFieldsType();
$principalBackgroundCheckField -> setFirstName("p first");
$principalBackgroundCheckField -> setLastName("p last");
$principalBackgroundCheckField -> setSsn("123459876");
$dateTime = new \DateTime("1980-10-12");
$principalBackgroundCheckField -> setDateOfBirth($dateTime);
$principalBackgroundCheckField -> setDriversLicense("892327409832");
$principalBackgroundCheckField -> setDriversLicenseState("MA");
$principal -> setBackgroundCheckFields($principalBackgroundCheckField);
$legalEntityBackgroundCheckFieldsType = new LegalEntityBackgroundCheckFieldsType();
$legalEntityBackgroundCheckFieldsType -> setLegalEntityName("Company Name");
$legalEntityBackgroundCheckFieldsType -> setLegalEntityType("INDIVIDUAL_SOLE_PROPRIETORSHIP");
$legalEntityBackgroundCheckFieldsType -> setTaxId("123456789");
$legalEntityUpdate -> setBackgroundCheckFields($legalEntityBackgroundCheckFieldsType);
$legalEntityUpdate -> setLegalEntityOwnershipType("PUBLIC");
$legalEntityUpdate -> setYearsInBusiness("10");

$response = $this->legalEntity->putLegalEntity(2010,$legalEntityUpdate);

```

NOTE: you may have to change the path to match that of your filesystems.  

## Versioning
For the versions available, see the [tags on this repository](https://github.com/vantiv/payfac-mp-sdk-java/tags). 

## Changelog
For the list of changes, check out the [changelog](https://github.com/Vantiv/payfac-mp-sdk-java/blob/13.x/CHANGELOG.md)

## Authors

* [**Ajjunesh Raju**](https://github.com/Ajjunesh)
* [**Chen Chang**](https://github.com/cc6980312)
* [**Kartik Dave**](https://github.com/davekartik24)

See also the list of [contributors](https://github.com/vantiv/payfac-mp-sdk-java/contributors) who participated in this project.

## License
This project is licensed under the MIT License - see the [LICENSE](https://github.com/Vantiv/payfac-mp-sdk-java/blob/13.x/LICENSE.md) file for details

## Examples
More examples can be found in [Functional and Unit Tests](https://github.com/Vantiv/payfac-mp-sdk-php/tree/master/src/test/functional)

## Support
Please contact [Vantiv eCommerce](https://developer.vantiv.com/community/ecommerce) to receive valid merchant credentials in order to run tests successfully or if you require assistance in any way.  Support can also be reached at sdksupport@Vantiv.com
