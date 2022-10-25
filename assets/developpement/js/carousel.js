/* ################################## */
/*        CAROUSEL PAGE BIEN          */
/* ################################## */

const all_image = document.querySelectorAll('.carousel_image img');
const container = document.querySelector('.carousel_image');
const change_btn = document.querySelector('.change__mage_carousel');

window.onload = () => {
    
    let active = 0;
    let img_nb = all_image.length;
    let img_width = all_image[0].clientWidth;

    let scrollPosX = img_width * active;

    window.onresize = () => {

        img_width = all_image[0].clientWidth;
        scrollPosX = img_width * active;

    }

    change_btn.onclick = () => {

        if ( scrollPosX == img_width * (img_nb - 1) ) {

            container.scrollTo(0,0);
            active = 0;

        } else {

            active++;
            container.scrollTo( img_width * active , 0 );

        }

        scrollPosX = img_width * active;

    }

}