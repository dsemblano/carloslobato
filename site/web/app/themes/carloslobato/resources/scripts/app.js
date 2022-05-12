import {domReady} from '@roots/sage/client';
import 'flowbite/dist/flowbite.js';


/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

/* Validation Events for changing response CSS classes */
document.addEventListener( 'wpcf7invalid', function( event ) {
    $('.wpcf7-response-output').addClass('alert alert-danger');
}, false );
document.addEventListener( 'wpcf7spam', function( event ) {
    $('.wpcf7-response-output').addClass('alert alert-warning');
}, false );
document.addEventListener( 'wpcf7mailfailed', function( event ) {
    $('.wpcf7-response-output').addClass('alert alert-warning');
}, false );
document.addEventListener( 'wpcf7mailsent', function( event ) {
    $('.wpcf7-response-output').addClass('bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3');
}, false );
