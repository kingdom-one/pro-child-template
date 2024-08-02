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

## 0.3.0

-   Remove Core Patterns
-   Disable Block Locking UI for non-admin users.
-   Register Kingdom One pattern with basic php file.

## 0.2.2

-   Add max-width and content sizes for Cornerstone with WordPress variables (generated by theme.json)
-   Add `1.25rem (20px)` gutters to the site

## 0.2.1

-   bug fixes

## 0.2.0

-   Added reduced Bootstrap Utility classes (opt-in) CSS file
-   Imported Normalize.css to `reset.scss`
-   Updated all CSS custom properties to use the ones generated by `theme.json` instead of re-declaring in scss file
-   Updated theme.json to make use of new custom lineHeight property to `core/paragraph` and `core/headings` blocks

## 0.1.1

-   Add typography that affects both Cornerstone prefixed elements and regular elements.
-   Init bootstrap sass partials to figure out what to break apart / borrow for minimal utility class generation.

## 0.1.0

-   Init repo!
