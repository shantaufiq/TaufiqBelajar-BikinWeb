// Dom Selection
//-- document.getElementById() -> element --
// const judul = document.getElementById('judul')
// judul.style.color = 'orange'; 
// judul.style.textAlign = 'center';
// judul.style.background = 'green';
// judul.innerHTML = 'learn Javascript';

// //-- documen.getElementsByTagName() -> HTMLCollection --
// const p = document.getElementsByTagName('p');
// p[1].style.background = 'lightgreen'

// for( let i = 0; i < 4; i++ ) {
//     p[i].style.backgroundColor = 'lightgreen';
// }

// const h1 = document.getElementsByTagName('h1') [0];
// h1.style.color = 'orange';

// //-- document.getElementsByClassName() -> HTMLCollection --
// const p1 = document.getElementsByClassName('p1') [0];
// p1.style.fontSize = '20px';
// p1.innerHTML = 'paragraf pertama';

// //-- document.querySelector() -> element --
// const p4 = document.querySelector('#secdua p');
// p4.style.color = 'yellow';
// p4.innerHTML = 'ini dari javascript'

// const li3 = document.querySelector('section#secdua ul li:nth-child(3)');
// li3.style.background = 'black';
// li3.style.color = 'red';
// li3.style.textAlign = 'center';

//-- document,querySelectorAll() -> Nodelist --
// const p = document.querySelectorAll('p');
// for( let i = 0; i < p.length; i++ ) {
   // p[i].style.fontFamily = 'timesNewRoman';
// }

// const sectionsecdua = document.getElementById('secdua');
// const p4 = sectionsecdua.querySelector('p');
// p4.style.textAlign = 'center';

//-- DOM MANIPULATION ELEMENT --

// //-element.innerHTML-
// const judul = document.getElementById('judul')
// judul.innerHTML = '<em>Learn Javascript</em>';

// //-element.syle.propertiCss-
// const a = document.getElementsByTagName('a');
// a[0].style.textDecoration = 'none';

// //-set atribute-
// judul.setAttribute('name', 'awal')

// //-classList-
// document.body.classList.toggle('biru-muda')

//-- MANIPULATION NODE --

//-buat elemen baru-
const pBaru = document.createElement('p');
const teksPBaru = document.createTextNode('New Paragraf');
//-simpan tulisan ke dalam paragraf/disatuin-
pBaru.appendChild(teksPBaru);

//-simpan pBaru di akhir Section satu-
const sectionSatu = document.getElementById('secsatu');
sectionSatu.appendChild(pBaru);

const liBaru = document.createElement('Li');
const teksLibaru = document.createTextNode('this is new');
liBaru.appendChild(teksLibaru);

const ul = document.querySelector('section#secdua ul');
const li2 = ul.querySelector('li:nth-child(2)')

ul.insertBefore(liBaru, li2);

// //-parentNode.removeChild-
// const link = document.getElementsByTagName('a') [0];
// sectionSatu.removeChild(link);

// //-parentNode.replaceChild-
// const sectionB = document.getElementById('secdua');
// const p4 = sectionB.querySelector('p');

// const h2Baru = document.createElement('h2')
// const teksH2Baru = document.createTextNode('New Normal')

// h2Baru.appendChild(teksH2Baru)

// sectionB.replaceChild(h2Baru, p4)

// -- DOM EVENTS --
const button = document.getElementsByTagName('button') [0];
button.addEventListener('click', function() {
   button.style.background = 'blue';
});
button.addEventListener('click', function() {
   alert('sure, you will be a programmer');
});

const p4 = document.querySelector('section#secdua p');
p4.addEventListener('click', function() {
   const ul = document.querySelector('section#secdua ul');
   const newli = document.createElement('li');
   const teksnewli = document.createTextNode('item baru');
   newli.appendChild(teksnewli);
   ul.appendChild(newli);
});

// -- DOM TRAVERSAL --
