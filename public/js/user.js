const fade = document.querySelector("#fade");
const modal =  document.querySelector("#modal");
const openModal =  document.querySelector("#openModal");
const closeModal =  document.querySelector("#CloseModal");



async function showUser (id) {
    const res = await fetch(`/master/usuario/${id}`).then(response => response.json())
    modal.innerHTML = res
    fade.classList.toggle('hide')
    modal.classList.toggle('hide')
}

// [openModal, closeModal, fade].forEach(function (el) {
//     el.addEventListener('click', () => {
//         fade.classList.toggle('hide')
//         modal.classList.toggle('hide')
//         closeModal.classList.toggle('hide')
// })
//
// const str = document.querySelector('#iniciais').innerHTML
// document.querySelector('#iniciais2').innerHTML = str.charAt(0)
