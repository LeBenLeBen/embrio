# Embrio

Embrio is a bare WordPress theme ready to customize. No stylesheet, no useless markup, just the bare minimum.

## Features

📂 Nice folders structure

🔑 Basic theme setup

* Load locales, scripts & stylesheets
* Request HTML5 markup
* Load editor stylesheet
* …

🌟 Gulp

* Sass compilation
* JavaScript concat & uglify
* BrowserSync proxy to watch and live reload into the browser
	
## Setup

If you already have a WordPress instance working, clone or download the repository. If you’re starting from scratch, I recommand you to use the [YeoPress](https://github.com/wesleytodd/YeoPress), the Yeoman WordPress generator.

Node.js with NPM are required to use Gulp and its plugins. Once you’re ready, run the following command in the theme root folder:

```
npm install
```

While it downloads the Internets, edit the file `gulpfile.js` and change the BrowserSync `proxy` parameter to match the URL of your local WordPress installation.

Now that you’re ready, run the following command to watch & reload the files:

```
npm start
```

glhf

## License
Distributed under the MIT License.