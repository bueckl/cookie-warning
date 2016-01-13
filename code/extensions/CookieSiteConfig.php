<?php 

class CookieSiteConfig extends DataExtension {
     
    private static $db = array(
        'CookieWarning' => 'HTMLText'
    );
 	
	// private static $defaults = array(
	// 	'CookieWarning' => 'This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies';
	// );
	//
    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.CookieWarning", new HTMLEditorField("CookieWarning", "Cookie Warning Text"));
    }
	
}