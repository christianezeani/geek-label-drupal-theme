# GeekLabel Drupal Theme
GeekLabel is a fully responsive Drupal 7 theme, highly customizable and easy to use. Fits many screen resolutions from small mobile devices to large desktops. 

It uses SCSS, HTML5, and Gulp for all tasks.

## Getting Started
To begin using this theme, follow the steps below to get started:
1. Clone the repo: `git clone https://github.com/christianezeani/geek-label-drupal-theme.git`
2. Navigate into the project folder: `cd geek-label-drupal-theme`
3. Install nodejs dev dependencies for Gulp: `npm install`

## Modifying the Source Files
After following the steps listed above, run `gulp start` or `npm start` before modifying the contents of the `./src` folder. 

### What it does
* Compiles the SCSS files in `src/scss` folder into `theme/assets/css/geeklabel.css`, and minifies the output into `theme/assets/css/geeklabel.min.css`.
* Compiles the Javascript (ES6) files in `src/scss` folder into `theme/assets/js/geeklabel.js` and minifies the output into `theme/assets/js/geeklabel.min.js`.
* Watches the SCSS and JS files for changes and recompiles new changes.

### Note
Do not modify any of the following files:
* `theme/assets/css/geeklabel.css`
* `theme/assets/css/geeklabel.min.css`
* `theme/assets/js/geeklabel.js`
* `theme/assets/js/geeklabel.min.js`

Changes made to the above listed files would be overwritten during the `gulp build` process.

## Building the theme
Build the theme's javascript and CSS using `gulp build` or `npm run build`.

Once the build process is complete a new zip archive, ready for installation on your Drupal 7 site, is generated and written to `build/geeklabel.zip`.

## Browser Support
* IE 9+
* Firefox (latest)
* Chrome (latest)
* Safari (latest)
* Opera (latest)

## Credits
* [SASS / SCSS](https://sass-lang.com)
* [Gulp](https://gulpjs.com)

