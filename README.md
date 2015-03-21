# Parassood_BrowserCacheInvalidator
Magento module to automatically invalidate user's browser cache for front end "skin" files that have been updated.

Before adding a link to a CSS/JS/Image file to the HTML response from Magento, this module appends a uniqe GET parameter(?v=) whose value accounts for the last modified time of the file. Whenever the file is modified,  the value of versioning param changes thereby invalidating the user's browser cache.

**NOTE:** Only the files in the **skin** folder would be versioned by the module.


Tested on:

Enterprise:  1.14.0.1
Community:   1.9.1.0
