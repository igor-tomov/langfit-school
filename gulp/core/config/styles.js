// utils
var deepMerge = require('../utils/deepMerge');

// config
var assets = require('./common').paths.assets;

/**
 * Style Building
 * Configuration
 * Object
 *
 * @type {{}}
 */
module.exports = deepMerge({
	paths: {
		watch: [
			assets.src + '/scss/**/*.scss',
			'!' + assets.src + '/scss/**/*_tmp\\d+.scss'
		],
		src:   [
			assets.src + '/scss/*.scss',
			'!' + assets.src + '/scss/**/_*'
		],
		dest:  './',
		clean: './*.{css,map}'
	},

	options: {
		sass: {},
		autoprefixer: {
			overrideBrowserslist: [
				'last 2 version',
				'ie >= 11',
				'IOS >= 7'
			]
		},
		minify: {
			preset: [
				'default',
				{
					discardComments: { removeAll: false }
				}
			]
		}
	}
});
