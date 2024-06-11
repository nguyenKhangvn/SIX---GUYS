var btnPayment = document.querySelector('.btn__address-add--color');
var modal = document.querySelector('.modal-edit');
var iconClose = document.querySelector('.auth-form__close-icon');
var btnCpl = document.querySelector('.auth-form__btn');
function toggleModal() {
    modal.classList.toggle('hide');
}

btnPayment.addEventListener('click', toggleModal);

iconClose.addEventListener('click', toggleModal);
btnCpl.addEventListener('click', toggleModal);