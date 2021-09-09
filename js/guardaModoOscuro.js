
// Guarda el modo oscuro de forma local 

const punto__switch = document.querySelector('#punto__switch');
const body = document.querySelector('body');

const $miCheckbox = document.querySelector("#punto__switch");

load();


punto__switch.addEventListener('click', e => { // Lo pasamos a modo oscuro
    body.classList.toggle('darkmode');
    store(body.classList.contains('darkmode'));
    //const $miCheckbox = document.querySelector("#punto__switch");

    //alert("ss"+$miCheckbox.checked);

});

function load(){
    const darkmode = localStorage.getItem('darkmode');
    //alert(darkmode);
    if(!darkmode){ // Modo claro
        store('false');
        $miCheckbox.checked = true;
    } else if(darkmode == 'true'){ // Modo oscuro
        body.classList.add('darkmode');
        $miCheckbox.checked = false;
    }

}

function store(value) {
    localStorage.setItem('darkmode',value);
}

