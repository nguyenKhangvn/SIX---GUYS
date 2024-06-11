var btnReview = document.querySelectorAll('.btn-order-option--active');
var modal = document.querySelector('.modal-edit');
var iconClose = document.querySelector('.auth-form__close-icon');
var btnCpl = document.querySelector('.cmt-btn-complete');
function toggleModal() {
    modal.classList.toggle('hide');
}

btnReview.forEach(btn => {
    if (btn.textContent.trim() === "Đánh giá") {
        btn.addEventListener('click', toggleModal);
    }
});

iconClose.addEventListener('click', toggleModal);
btnCpl.addEventListener('click', toggleModal);
