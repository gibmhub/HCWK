Webseite des Heidelberger Symposiums
====================================

Site dependencies are managed using [Bower](http://bower.io) and declared in `bower.json`. Run `bower install` to install all dependencies.

A `config-secret.php` is required to provide the following variables:

	$env = VI_ENV_DEBUG | VI_ENV_RELEASE
	$baseurl = "http://base.u.rl"
	$basedir = "/path/to/root"
	$mysql_server, $mysql_username, $mysql_password, $mysql_database
	$paypal_merchant_id, $paypal_merchant_id_sandbox
	$paypal_use_sandbox = true | false
	$sofortueberweisung_configkey = '__userID__:__projectID__:__APIKey__'

Site structure is managed by the VIPagemap class, see documentation for the [VIWebFramework](https://github.com/knly/VIWebFramework/).
