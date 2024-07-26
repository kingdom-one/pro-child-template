# pro-child-template

A Template repo to help spin up custom child themes for clients quickly.

## Getting Started

1. Update the style.css, package.json and composer.json files to use the client's name.
2. Install the packages with `composer update` and `npm i`.
3. Make any tweaks to the code (see below).
4. Update the screenshot.png file.
5. Update or delete this README.md.

## Configure Pro Theme

1. Use Pro's "Blank" Stack.
2. Install/Define Fonts.
3. Define Colors.
4. Don't update font sizes! They _should_ be generated with this theme's css. (Exceptions will occur).
5. Any CSS or JS that _would_ be defined in Cornerstone's global code should be defined in this theme.

## Configuring the Child Theme

1. Define Colors in `_variables.scss`
2. Define color palette in [`theme.json`](https://developer.wordpress.org/themes/global-settings-and-styles/settings/color/).
3. Write any custom code you need.
4. When you're done, run `npm run build`

## Uploading to WordPress

1. Make sure Pro Theme is installed!
2. Download this zip from Github
3. Install to the Site!

# Changelog

## 0.1.0

-   Init repo!
