# Disable NUX

Disable NUX is a WordPress plugin which disables the "New User Experience" block editor overlay.

<img width="327" alt="Screen Shot 2020-09-12 at 3 11 51 PM" src="https://user-images.githubusercontent.com/1779930/93003158-60290300-f50a-11ea-8ad0-40f414e64786.png">

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
