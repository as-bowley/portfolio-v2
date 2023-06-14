import domReady from '@roots/sage/client/dom-ready';
import initBarba from '@scripts/barba';

/**
 * Application entrypoint
 */
domReady(async () => {
  initBarba();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
