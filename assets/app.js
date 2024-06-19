/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

import '@splidejs/splide/css';
import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

import PhotoSwipeLightbox from 'photoswipe/lightbox';
import "photoswipe/style.css";
import PhotoSwipe from 'photoswipe';

const splide = document.getElementsByClassName('splide');
if (splide.length != 0) {
    new Splide( '.splide', {
        arrows: false,
        speed: 2000,
        type: "loop"
    } ).mount( { AutoScroll } );
}

document.addEventListener("DOMContentLoaded", () => {
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#gallery',
        children: 'a',
        pswpModule: PhotoSwipe
    });
    
    lightbox.init();
})