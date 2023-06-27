let modal = document.querySelector('.modal');

let contents_name = document.querySelector('.contents-name');
let contents_comment = document.querySelector('.comment');
let contents_address = document.querySelector('.contents-address');
let contents_price = document.querySelector('.contents-price');
let price = Number(contents_price.value);

let modal_name = document.querySelector('.modal-inner-name');
let modal_content = document.querySelector('.modal-inner-content');
let modal_address = document.querySelector('.modal-inner-address');
let modal_price = document.querySelector('.modal-inner-price');

function open_modal() {
    if(contents_name.value == "" || contents_comment.value == "" || contents_address.value == "" || contents_price.value == "") {
        alert('형식에 맞게 입력해주세요');
    }
    else {
        modal.style.display = 'block';
        modal_name.textContent = contents_name.value;
        modal_content.textContent = contents_comment.value;
        modal_address.textContent = contents_address.value;
        modal_price.textContent = `${contents_price.value}원`;
    }
}

function close_modal() {
    modal.style.display = 'none';
}

function formatPhoneNumber() {
    const Num = document.querySelector(".contents-price");
    const NumValue = Num.value;
    const numbersOnly = NumValue.replace(/[^0-9]/g, "");
    if(numbersOnly == "") {
        Num.value = "";
    }
    else {
        Num.value = Number(numbersOnly).toLocaleString();
    }
}