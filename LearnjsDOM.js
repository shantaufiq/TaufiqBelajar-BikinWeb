// Dom Selection
// document.getElementById() -> element
const judul = document.getElementById('judul')
judul.style.color = 'orange'; 
judul.style.textAlign = 'center';
judul.style.background = 'green';
judul.innerHTML = 'learn Javascript';

// documen.getElementsByTagName() -> HTMLCollection
const p = document.getElementsByTagName('p');
p[1].style.background = 'lightgreen'

for( let i = 0; i < 4; i++ ) {
    p[i].style.backgroundColor = 'lightgreen';
}

const h1 = document.getElementsByTagName('h1') [0];
h1.style.color = 'orange';

// document.getElementsByClassName() -> HTMLCollection
const p1 = document.getElementsByClassName('p1') [0];
p1.style.fontSize = '20px';
p1.innerHTML = 'paragraf pertama';

// document.querySelector() -> element
const p4 = document.querySelector('#secdua p');
p4.style.color = 'yellow';
p4.innerHTML = 'ini dari javascript'

const li3 = document.querySelector('section#secdua ul li:nth-child(3)');
li3.style.background = 'black';
li3.style.color = 'red';
li3.style.textAlign = 'center';

// document,querySelectorAll() -> Nodelist
// const p = document.querySelectorAll('p');
// for( let i = 0; i < p.length; i++ ) {
   // p[i].style.fontFamily = 'timesNewRoman';
// }

// const sectionsecdua = document.getElementById('secdua');
// const p4 = sectionsecdua.querySelector('p');
// p4.style.textAlign = 'center';
