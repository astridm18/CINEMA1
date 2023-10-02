const click1 = document.querySelector('.regist');
const as = document.querySelector('.modal1');
const closeModal1 = document.querySelector('.close1');
//modal registro 

const click = document.querySelector('.login');
const os = document.querySelector('.modal2');
const closeModal = document.querySelector('.close1');
// modal inicio sesion 

const cambior = document.querySelector('.cambio-mod');
const cambioi = document.querySelector('.cambio-mod2');
// switch para modales registro e inicio 

const tick = document.querySelector('.ticket')
//modal cuando des click a ticket sin estar registrado

const compeli1 = document.querySelector('.compeli1')
const compeli2 = document.querySelector('.compeli2')
const compeli3 = document.querySelector('.compeli3')

const func1 = document.querySelector('.func1')


click1.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.add('modal1-show');
})

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.remove('modal1-show');
})

click.addEventListener('click', (e) => {
    e.preventDefault();
    os.classList.add('modal2-show');
})

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    os.classList.remove('modal2-show');
})

cambior.addEventListener('click', (e) => {
    e.preventDefault();
    os.classList.remove('modal2-show');
    as.classList.add('modal1-show');
})

cambioi.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.remove('modal1-show');
    os.classList.add('modal2-show');
})

tick.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.add('modal1-show');
})

compeli1.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.add('modal1-show');
})
compeli2.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.add('modal1-show');
})
compeli3.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.add('modal1-show');
})
func1.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.add('modal1-show');
})
