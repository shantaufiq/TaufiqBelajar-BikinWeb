
var jumlahAngkot = 10;
var angkotBeroprasi = 6;
var nomorAngkot = 1;

for ( nomorAngkot ; nomorAngkot <= jumlahAngkot; nomorAngkot++ ) {
    
    if( nomorAngkot <= angkotBeroprasi && nomorAngkot !== 5 ) {
        console.log('Angkot NO. ' + nomorAngkot + ' beroprasi dengan baik.');
    } else if ( nomorAngkot === 8 || nomorAngkot === 10 || nomorAngkot === 5 ) {~
        console.log('Angkot NO. ' + nomorAngkot + ' sedang lembur.');
    } else {
        console.log('Angkot NO. ' + nomorAngkot + ' tidak beroprasi dengan baik.');
    }
}

// ! -------------------------------------------------------------------------------

// var angka = prompt ('masukkan angka: ');

// if ( angka % 2 === 0 ) {
//     alert( angka + ' adalah bilangan genap');
// } else if ( angka % 2 === 1 ) {
//     alert( angka + ' adalah bilangan ganjil');
// } else {
//     alert('yang anda masukkan bukan angka bos !!!')
// }