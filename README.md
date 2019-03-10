# Disable NUX

Disable NUX is a WordPress plugin which disables the "New User Experience" tooltips present in the WordPress administrative experience starting with the block editor introduced in WordPress 5.0.

![Disable NUX](https://cldup.com/vM5FHAQ6Ob.png)

## Installation

Download and extract the [zip archive](https://github.com/aduth/g-debugger/archive/master.zip) to a `disable-nux` folder in your WordPress installation `wp-content/plugins`.

Alternatively, as a single-file plugin, it can be downloaded directly and placed within the [`mu-plugins` directory](https://codex.wordpress.org/Must_Use_Plugins) of a site.

```
mkdir -p wp-content/mu-plugins && curl https://raw.githubusercontent.com/aduth/wp-disable-nux/master/index.php > wp-content/mu-plugins/disable-nux.php
```

## Usage

Tooltips are disabled as long the plugin is activated.

## License

Copyright 2019 Andrew Duthie

Released under the [GPLv2 or later License](https://www.gnu.org/licenses/gpl-2.0.html).
