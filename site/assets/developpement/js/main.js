const btn_open_nav = document.querySelector('.header_burger');
const btn_close_nav = document.querySelector('.closeNavigation');
const nav = document.querySelector('#navigation');

const element_to_anime = document.querySelectorAll('.openAnimate');

const body = document.querySelector('body');

let active_nav = false;

document.addEventListener('DOMContentLoaded', () => {

    btn_open_nav.onclick = () => {

        if ( active_nav == false ) {

            active_nav = true;

            nav.classList.add('open');
            body.style.overflow = "hidden";
    
            nav_apparition(element_to_anime , ()=>{

                active_nav = false;

            });

        }

    }

    btn_close_nav.onclick = () => {

        if ( active_nav == false ) {

            active_nav = true;

            nav_apparition(element_to_anime , ()=>{

                active_nav = false;
                nav.classList.remove('open');
                body.style.overflow = "auto";

            });

        }

    }

})

const nav_apparition = ( element_to_anime , callback ) => {

    setTimeout(()=>{

        baseTime = 0;

        element_to_anime.forEach(element => {
            
            setTimeout(()=>{

                element.classList.toggle('open');

            },baseTime);

            baseTime+=80;

        });

        setTimeout(()=>{

            callback();

        },baseTime);

    },350)

}
