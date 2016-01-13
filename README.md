# cookie-warning
Display Cookie Warnings on Silverstripe projects

## Requirements
* SilverStripe 3.1.*

## Installation
### Composer
* `composer require "bueckl/silverstripe-cookie-warning": "*"`

### Manual
* Download and copy module in SilverStripe root directory: https://github.com/bueckl/cookie-warning/


## Usage 

1. Add to your Page.php:

public static function CookieWarningShown() {
	$shown = Cookie::get("CookieWarningShown");
	if(!$shown) {
		Cookie::set("CookieWarningShown", true);
		return false;
	}
	return  true;
}

2. Link css archive:

'cookie-warning/css/CookieWarning.css'


3. Add before </html> :

<% include CookieWarning %>
