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


// A continuacion pelifuncion1
const p1 = document.querySelector('.pelifuncion1')
const m1 = document.querySelector('.modalp1')
const c1 = document.querySelector('.closep1')


p1.addEventListener('click', (e) => {
    e.preventDefault();
    m1.classList.add('modal-showp1');
})

c1.addEventListener('click', (e) => {
    e.preventDefault();
    m1.classList.remove('modal-showp1');
})

// A continuacion pelifuncion2
const p2 = document.querySelector('.pelifuncion2')
const m2 = document.querySelector('.modalp2')
const c2 = document.querySelector('.closep2')


p2.addEventListener('click', (e) => {
    e.preventDefault();
    m2.classList.add('modal-showp2');
})

c2.addEventListener('click', (e) => {
    e.preventDefault();
    m2.classList.remove('modal-showp2');
})

// A continuacion pelifuncion3
const p3 = document.querySelector('.pelifuncion3')
const m3 = document.querySelector('.modalp3')
const c3 = document.querySelector('.closep3')


p3.addEventListener('click', (e) => {
    e.preventDefault();
    m3.classList.add('modal-showp3');
})

c3.addEventListener('click', (e) => {
    e.preventDefault();
    m3.classList.remove('modal-showp3');
})

// A continuacion pelifuncion4
const p4 = document.querySelector('.pelifuncion4')
const m4 = document.querySelector('.modalp4')
const c4 = document.querySelector('.closep4')


p4.addEventListener('click', (e) => {
    e.preventDefault();
    m4.classList.add('modal-showp4');
})

c4.addEventListener('click', (e) => {
    e.preventDefault();
    m4.classList.remove('modal-showp4');
})

// A continuacion pelifuncion5
const p5 = document.querySelector('.pelifuncion5')
const m5 = document.querySelector('.modalp5')
const c5 = document.querySelector('.closep5')


p5.addEventListener('click', (e) => {
    e.preventDefault();
    m5.classList.add('modal-showp5');
})

c5.addEventListener('click', (e) => {
    e.preventDefault();
    m5.classList.remove('modal-showp5');
})

// A continuacion pelifuncion6
const p6 = document.querySelector('.pelifuncion6')
const m6 = document.querySelector('.modalp6')
const c6 = document.querySelector('.closep6')


p6.addEventListener('click', (e) => {
    e.preventDefault();
    m6.classList.add('modal-showp6');
})

c6.addEventListener('click', (e) => {
    e.preventDefault();
    m6.classList.remove('modal-showp6');
})

// A continuacion pelifuncion7
const p7 = document.querySelector('.pelifuncion7')
const m7 = document.querySelector('.modalp7')
const c7 = document.querySelector('.closep7')


p7.addEventListener('click', (e) => {
    e.preventDefault();
    m7.classList.add('modal-showp7');
})

c7.addEventListener('click', (e) => {
    e.preventDefault();
    m7.classList.remove('modal-showp7');
})

// A continuacion pelifuncion8
const p8 = document.querySelector('.pelifuncion8')
const m8 = document.querySelector('.modalp8')
const c8 = document.querySelector('.closep8')


p8.addEventListener('click', (e) => {
    e.preventDefault();
    m8.classList.add('modal-showp8');
})

c8.addEventListener('click', (e) => {
    e.preventDefault();
    m8.classList.remove('modal-showp8');
})

// A continuacion pelifuncion9
const p9 = document.querySelector('.pelifuncion9')
const m9 = document.querySelector('.modalp9')
const c9 = document.querySelector('.closep9')


p9.addEventListener('click', (e) => {
    e.preventDefault();
    m9.classList.add('modal-showp9');
})

c9.addEventListener('click', (e) => {
    e.preventDefault();
    m9.classList.remove('modal-showp9');
})

const click3 = document.querySelector('.butaca');
const but = document.querySelector('.modalb');
const cbut = document.querySelector('.close1');


click3.addEventListener('click', (e) => {
    e.preventDefault();
    but.classList.add('modalb-show');
})

cbut.addEventListener('click', (e) => {
    e.preventDefault();
   but.classList.remove('modalb-show');
})


const clickc = document.querySelector('.botn');
const comp = document.querySelector('.modalc');
const ccomp = document.querySelector('.close1');
const clickv = document.querySelector('.custom-button');


clickc.addEventListener('click', (e) => {
    e.preventDefault();
   but.classList.remove('.modalb-show');
   comp.classList.add('modalc-show');
})
clickv.addEventListener('click', (e) => {
    e.preventDefault();
   comp.classList.remove('.modalc-show');
   but.classList.add('modalb-show');
})

cbut.addEventListener('click', (e) => {
    e.preventDefault();
   comp.classList.remove('modalc-show');
})
compeli1.addEventListener('click', (e) => {
    e.preventDefault();
    as.classList.add('modal1-show');
})
