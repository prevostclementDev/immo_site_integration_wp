const open_popup = document.querySelector('#reservation');
const close_pop_up = document.querySelector('.closePopUp');

const popup = document.querySelector('#pop_up_reservation');

open_popup.onclick = (e) => {

    e.preventDefault();
    popup.classList.add('active');
    body.style.overflow = 'hidden';

}

close_pop_up.onclick = () => {

    popup.classList.remove('active');
    body.style.overflow = 'auto';

}