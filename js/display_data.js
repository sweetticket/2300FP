/* Would use this for the "gallery" part. Uses packery.js. */

$( document ).ready(function() {

var $container = $('#container');
// init
$container.packery({
  isInitLayout: false,
  itemSelector: '.item_container',
  gutter: 7
});

var container = document.querySelector('#container');
var pckry = new Packery( container, {
  // options
  itemSelector: '.item_container',
  gutter: 7
});

});