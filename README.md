# Capo Theme

Capo Theme is a custom WordPress theme that utilizes Laravel Mix for compiling and minifying CSS using Sass 7-1 structure, and JavaScript, with jQuery installed.

# Requirements
Node.js
npm
Laravel Mix

# Installation
Download or clone the theme files to your WordPress themes directory.
In the theme's root directory, run npm install to install all dependencies.

Run npm run dev to compile and minify your CSS and JavaScript files.
Activate the theme in your WordPress dashboard.

# Usage

for watch the changes use command
# npx mix watch

To compile and minify your CSS and JavaScript files use
# npm run production

# Structure
The theme's CSS files are located in the resources/sass directory, with the main file being main.scss. The theme's JavaScript files are located in the resources/js directory, with the main file being app.js.

The compiled and minified files can be found in the css and js directories in the root of the theme.

# License
Capo Theme is licensed under the MIT License.

# Credits
Laravel Mix
Sass
jQuery
node-sass
WordPress
Notes

If you want to use another folder for header and footer, you need to change the path in the functions.php and in the index.php file.
You need to register and enqueue the new style.min.css and app.min.js in the functions.php file.

# Please check the package.json and webpack.mix.js files for more information on how the theme uses Laravel Mix.