# PHPOData
A cleaner OData SDK for PHP.

## Original
This is a fork of the original code available at http://odataphp.codeplex.com. I have not yet had a chance to do the proper work for attribution for my contribution so the license file is included from the original. My intent was to submit my changes to the original project but contact has yet to be made and it is more expedient to simply get this out here.

A year out, I still haven't had success contacting the folks on the CodePlex project but I also haven't updated the license.

## Fixes
My changes primarily:

* fix the various directory issues with the original project
* remove the dependence upon global constants and php.ini configuration entries
* update the template to generate proxy files that fit my coding style
	* not quite PEAR style but sensible...
	* generally aligns with [WordPress standards](http://make.wordpress.org/core/handbook/coding-standards/php/)
	* removes closing `?>` tags to prevent extraneous whitespace being injected into your project's output

## Other Notes

This version expects that you check this out to a PHP include directory as “OData” (including ./) this is the assumption the proxy generator (PHPDataSvcUtil.php) makes so the generated file include statement is `require_once 'OData/Context/ObjectContext.php'`.


Within the library all of the include statements have been rewritten to be fullpaths such that no additional configuration is needed (though this does litter the global namespace with one variable `$PHPOData_Path`).