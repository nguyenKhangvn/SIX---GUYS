//Name edit
var btnNameEdit = document.querySelector('.info__user-detail-item:first-child .info-edit-btn');
var modal = document.querySelector('.modal-edit');
var btnAgree = document.querySelector('.auth-form__btn');
var iconClose = document.querySelector('.auth-form__close-icon');

function toggleModal() {
    modal.classList.toggle('hide');
}
btnNameEdit.addEventListener('click', toggleModal);

btnAgree.addEventListener('click', function(){
    var newName = document.querySelector('.form-edit__input--name').value;
    document.querySelector('.detail-item-text').textContent = newName;
    document.querySelector('.avatar__name').textContent = newName;
}, toggleModal);
btnAgree.addEventListener('click', toggleModal);

iconClose.addEventListener('click', toggleModal);

//Email edit
var btnEmailEdit = document.querySelector('.info__user-detail-item:nth-child(2) .info-edit-btn');
var modal2 = document.querySelector('.modal-edit2');
var btnAgree2 = document.querySelector('.auth-form__btn2');
var iconClose2 = document.querySelector('.auth-form__close-icon2');

function toggleModal2() {
    modal2.classList.toggle('hide');
}

btnEmailEdit.addEventListener('click', toggleModal2);

btnAgree2.addEventListener('click', function(){
    var newEmail = document.querySelector('.form-edit__input--email').value;
    document.querySelector('.info__user-detail-item:nth-child(2) .detail-item-text').textContent = newEmail;
}, toggleModal2);
btnAgree2.addEventListener('click', toggleModal2);

iconClose2.addEventListener('click', toggleModal2);

//NumberPhone edit
var btnPhoneEdit = document.querySelector('.info__user-detail-item:nth-child(3) .info-edit-btn');
var modal3 = document.querySelector('.modal-edit3');
var btnAgree3 = document.querySelector('.auth-form__btn3');
var iconClose3 = document.querySelector('.auth-form__close-icon3');

function toggleModal3() {
    modal3.classList.toggle('hide');
}

btnPhoneEdit.addEventListener('click', toggleModal3);

btnAgree3.addEventListener('click', function(){
    var newPhone = document.querySelector('.form-edit__input--phone').value;
    document.querySelector('.info__user-detail-item:nth-child(3) .detail-item-text').textContent = newPhone;
}, toggleModal3);
btnAgree3.addEventListener('click', toggleModal3);

iconClose3.addEventListener('click', toggleModal3);


//Password edit
var btnPassEdit = document.querySelector('.info__user-detail-item:last-child .info-edit-btn');
var modal4 = document.querySelector('.modal-edit4');
var btnAgree4 = document.querySelector('.auth-form__btn4');
var iconClose4 = document.querySelector('.auth-form__close-icon4');

function toggleModal4() {
    modal4.classList.toggle('hide');
}

btnPassEdit.addEventListener('click', toggleModal4);

btnAgree3.addEventListener('click', function(){
    var newPass = document.querySelector('.form-edit__input--pass:last-child').value;
    document.querySelector('.info__user-detail-item:nth-child(5) .detail-item-text').textContent = newPass;
}, toggleModal4);
btnAgree4.addEventListener('click', toggleModal4);

iconClose4.addEventListener('click', toggleModal4);











