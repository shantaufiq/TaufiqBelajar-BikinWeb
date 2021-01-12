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
