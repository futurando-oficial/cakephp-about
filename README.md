# About plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

Install Plugin to the Vendors Folder
```
composer require futurando-oficial/cakephp-about
```
Load into cakephp the plugin
```
bin/cake plugin load About
```
Create Table onto de database
```
bin/cake migrations migrate -p About
```
Insert Seeds onto database
```
bin/cake migrations seed -p About
```