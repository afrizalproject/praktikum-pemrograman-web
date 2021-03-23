function kalkulator() {

    // Muhammad Afrizal Rizky Widyanto (19650048)
    // Kelas: Pemrograman Web F

    //variable angka satu
    var angkaSatu = parseInt(document.getElementById("angkaSatu").value);

    //variable angka dua
    var angkaDua = parseInt(document.getElementById("angkaDua").value);

    //variable operasi aritmatik
    var op = document.getElementById("op").value;

    //variable angka hasil
    var hasil = document.getElementById("hasil");

    //variable untuk menampung angka satu dan angka dua
    var total;


    var proses = angkaSatu / angkaDua;
    if (angkaSatu % angkaDua == 0) {
        total = "Hasil : " + proses;
    } else {
        total = "Hasil : " + (angkaSatu % angkaDua);
    }

    document.calculator.hasil.value = total;
}