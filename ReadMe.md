# PHPOData
A cleaner OData SDK for PHP.

## Original
This is a fork of the original code available at http://odataphp.codeplex.com. I have not yet had a chance to do the proper work for attribution for my contribution so the license file is included from the original. My intent was to submit my changes to the original project but contact has yet to be made and it is more expedient to simply get this out here.

## Fixes
My changes primarily:

* fix the various directory issues with the original project
* remove the dependence upon global constants and php.ini configuration entries
* update the template to generate proxy files that fit my coding style
	* not quite PEAR style but sensible...
	* removes closing ?> tags to prevent extraneous whitespace being injected into your project's output