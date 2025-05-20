[![PHP](https://github.com/yisraeldov/bhbst/actions/workflows/php.yml/badge.svg)](https://github.com/yisraeldov/bhbst/actions/workflows/php.yml)[![HTMX](https://img.shields.io/badge/HTMX-36C?logo=htmx&logoColor=fff)](#)

Please see [Assignement Details](./Assignment.md), part of has already
been done, feel free to improve on what was already completed, but
keep the same ideas and tools.


# Install

## Nix

If you want to use nix you can install [Nix](https://nixos.org/download/#download-nix) and then run `nix-shell`

This will give all the tools and the PHP version that I have installed.

## Composer

If you did not install nix, besure that composer is installed then 

``` shell
composer i
```

# Run the test server

You can run the test server on port `8080` with

``` shell
php -S localhost:8080
```

Then visit the test server <http://localhost:8080>


# Provides 2 classes for custom reordering of Paragrahps


## Task 1


``` php
	$reorder = new ParagraphReordererByLen();
	$reorderedText = $reorder->reorder($originalText);
```


## Task 2
``` php
	$reorder = new ParagraphReordererCustomAlapha();
	$reorderedText = $reorder->reorder($originalText);
```

See the [test cases](./tests/) and [E2E Tests](./cypress/e2e/)



# TODO 
- [X] Add an API to call the methods
- [X] Make a simple UI
 - [ ] Style the UI
 - [ ] More advanced UI with React
- [X] Add documentation on how to run server
- [X] Add documentation on installing dependecies. 
