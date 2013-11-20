# [Kanso Theme](http://metamonks.com/kanso-theme/)

Kanso is a minimalistic is a WordPress starter theme based on [HTML5 Boilerplate](http://html5boilerplate.com/), [Bootstrap](http://getbootstrap.com/).
It is a simple fork of the marvelous [Roots Theme](http://roots.io). Check out their documentation for in-depth modifications.

* Source: [https://bitbucket.org/stnwbr/kanso-theme/](https://github.com/stnwbr/Kanso-Theme)
* Home Page: [http://metamonks.com/kanso-theme/](http://metamonks.com/kanso-theme)
* Twitter: [@metamonks](https://twitter.com/metamonks)

## Installation

Download the [ZIP file](#) or clone the git repo - `git clone git://github.com/stnwbr/kanso-theme.git` - and then rename the directory to the name of your theme or website. [Install Grunt](http://gruntjs.com/getting-started), and then install the dependencies for Roots contained in `package.json` by running the following from the Roots theme directory:

```
npm install
```

Reference the [theme activation](http://roots.io/roots-101/#theme-activation) documentation to understand everything that happens once you activate Roots.

## Theme Development

After you've installed Grunt and ran `npm install` from the theme root, use `grunt watch` to watch for updates to your LESS and JS files and Grunt will automatically re-build as you write your code.

## Configuration

Edit `lib/config.php` to enable or disable support for various theme functions and to define constants that are used throughout the theme.

Edit `lib/init.php` to setup custom navigation menus and post thumbnail sizes.

## Documentation

### [Roots Docs](http://roots.io/docs/)

* [Roots 101](http://roots.io/roots-101/) — A guide to installing Roots, the files and theme organization
* [Theme Wrapper](http://roots.io/an-introduction-to-the-roots-theme-wrapper/) — Learn all about the theme wrapper
* [Build Script](http://roots.io/using-grunt-for-wordpress-theme-development/) — A look into the Roots build script powered by Grunt
* [Roots Sidebar](http://roots.io/the-roots-sidebar/) — Understand how to display or hide the sidebar in Roots
