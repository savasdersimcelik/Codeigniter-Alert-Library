# Codeigniter Alert Library
A simple Codeigniter flash messaging library. Compatible only with bootstrap.

## Usage
1- Load the library
```php
$this->load->library('alert');
```
2- Set the flash message
```php
$this->alert->set(array(
	"type" => "success", //required
	"title" => "Success!", //required
	"message" => "Login successful", //required
	"button" => "false", //optionally
	"url" => base_url("home"), //optionally
));
```
2- Set the flash message by notification type
```php
$this->alert->success(array(
	"title" => "Success!", //required
	"message" => "This alert box indicates a successful or positive action.", //required
	"button" => "false", //optionally | TRUE or False
	"url" => base_url("home"), //optionally
));
$this->alert->info(array(
	"title" => "Info!", //required
	"message" => "This alert box indicates a neutral informative change or action.", //required
	"button" => "false", //optionally | TRUE or False
	"url" => base_url("home"), //optionally
));
$this->alert->warning(array(
	"title" => "Warning!", //required
	"message" => "This alert box indicates a warning that might need attention.", //required
	"button" => "false", //optionally | TRUE or False
	"url" => base_url("home"), //optionally
));
$this->alert->danger(array(
	"title" => "Danger!", //required
	"message" => "This alert box indicates a dangerous or potentially negative action.", //required
	"button" => "false", //optionally | TRUE or False
	"url" => base_url("home"), //optionally
));
```
4- Get the flash message with styling 
```php
$this->alert->get();
```
