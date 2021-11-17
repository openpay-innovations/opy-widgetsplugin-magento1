<img src="https://static.openpay.com.au/brand/logo/openpay_logo_transparent.svg" width="170" alt="Openpay Logo">

Introduction
---------

### Objectives and Target Audience

This guide describes the process of installing and configuring the Openpay Widget / Extension to Magento 1.8.X and 1.9.x. You should have an existing Magento installed.

Widgets explain how Openpay is a flexible, interest-free payment method. It showcases the minimum and maximum order value, allowing the user to choose an option to pay weekly or fortnightly, over available months.


### What is Openpay Widget?

Openpay Widgets is a Magento Extension with a predefined set of configuration options.

### Placement of the Widgets

Openpay Widget plugin is a set of widgets, when installed and activated will show the widgets on the following pages:

- Info Belt – Top section of the HomePage
- Product Catalog / Listing Page
- Product Detail Page
- Cart Page
- Checkout Page
- Landing Page

Compatibility
---------
- PHP 5.6 or later
- Magento 1.8.x to 1.9.X


Requirements
---------
- At least 5.6 or the later version of PHP
- cURL extension for PHP
- JSON extension for PHP
- Multibyte String extension for PHP
- Magento should be pre-installed on your web server. The extension has been tested on Magento version 1.8.x to 1.9.X
- SSL: A valid security certificate is required to work over a secure channel (HTTPS) from the Magento Admin Panel or while submitting the form data from the storefront. Self-signed SSL certificates are not supported
- Curl (version 7.20.0 - 7.4.0)


Installation
---------


#### Important note

Please make sure you have already installed the Openpay payment plugin to make the widgets work as expected.

Admin Setup
---------

In the backend, expand `System -> Configuration -> Payment methods -> Openpay Widget`

To set up `Openpay Widgets`, fill out the fields as per your Openpay account configuration. (This information will be provided by your Openpay Ecommerce Manager or Account Manager).

Check with Openpay / Ecommerce Manager for your Plan Tiers configuration.