# Sage site profile for ProcessWire

This site profile is meant to be used with the ProcessWire CMS. 

## Features

* Sass for stylesheets
* ES6 for JavaScript
* Webpack for compiling assets, optimizing images, and concatenating and minifying files
* Browsersync for synchronized browser testing
* Laravel's Blade as a templating engine

## Requirements

* ProcessWire >= 3.0.43
* PHP >= 5.6.4
* Node.js >= 6.9
* [Yarn](https://yarnpkg.com/en/docs/install)  (like npm, but way faster)

## Installation

1. Copy the `site-sage` directory into your ProcessWire installation

2. Grab all the dependencies: 

~~~bash
cd site-sage/templates # change to templates directory

yarn # get all dependencies. Doesn't work? Check the requirements ;)
~~~

3. Edit configuration in `site-sage/templates/assets/config.json`

4. Is ProcessWire already installed?

***NO:***
* Install ProcessWire regulary and choose `site-sage` as your site profile

***YES:***
* Rename `site-sage` to `site`. You probably have to rename your old site directory
* Go to your backend. Activate the `TemplateEngineBlade` module
* Edit configuration in `site/config.php`
* Remove directory `site/install`
* [Optional] Put the changes from your old site profile to the new one 

## Working with the site profile

To execute all commands, first cd into `site/templates`. From there you can run:

* `yarn start` WATCH for file changes and enable hotreloading
* `yarn build` Build all assets
* `yarn build:production` Build all assets for production
