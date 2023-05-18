import './bootstrap';
// import 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js';
import './init_alpine';
import './modules/paypal-checkout'
import Splide from '@splidejs/splide';

 
  

  if (document.getElementById('testimonials-carousel')) {
    new Splide('#testimonials-carousel', {
        type: 'loop',
       autoplay: true,
        rewind: true,
        rewindSpeed: 1000,
    }).mount();
  }
  
  if (document.getElementById('main-slider')) {
    var splide = new Splide( '#main-slider', {
      pagination: true,
      autoplay: true,
      type: 'loop',
        rewind: true,
        rewindSpeed: 1000,
    } );
  
    
  var thumbnails = document.getElementsByClassName( 'thumbnail' );
  var current;
  
  for ( var i = 0; i < thumbnails.length; i++ ) {
    initThumbnail( thumbnails[ i ], i );
  }
  
  function initThumbnail( thumbnail, index ) {
    thumbnail.addEventListener( 'click', function () {
      splide.go( index );
    } );
  }
  
  splide.on( 'mounted move', function () {
    var thumbnail = thumbnails[ splide.index ];
  
    if ( thumbnail ) {
      if ( current ) {
        current.classList.remove( 'is-active' );
      }
  
      thumbnail.classList.add( 'is-active' );
      current = thumbnail;
    }
  } );
  
  splide.mount();
  }
 
