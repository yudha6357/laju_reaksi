<!DOCTYPE html>
@include('layout.header')
@include('layout.background2')
@include('layout.head')
<html lang="zxx">
        <head>

                <title>Membuat tampilan layout WEB sederhana HTML dan CSS</title>
                <link rel="stylesheet" type="text/css" href="./css/style.css">
            </head>
<body>

        <div class="warpper">
                <div class="judul">
                <h3>ORDE REAKSI </h3>
                </div>
                <div class="contentmateri1">
                    <div class="main">
                        <center><p class="text_content">Persamaan Laju Reaksi </p></center>
                        <br>
                        <p class="text_content3">Hubungan kuantitatif antara perubahan konsentrasi dengan laju reaksi dinyatakan dengan persamaan laju reaksi atau hokum laju reaksi.
                                Hal tersebut tidak dapat diramalkan dari persamaan reaksi keseluruhan.
                                Akan tetapi dapat ditentukan melalui eksperimen. Laju reaksi ditentukan oleh konsentrasi zat pereaksi.
                                Contoh: untuk reaksi P+Q ->R + S, maka laju reaksi ditentuakan oleh konsentrasi zat P dan Q.
                                Persamaan laju reaksinya dituliskan sebagai berikut: V= k[P]<sub>x</sub> [Q]<sub>y</sub>.<br>
                                Keterangan<br>
                                V       = laju reaksi<br>
                                K       = tetapan laju reaksi<br>
                                x       = orde terhadap A<br>
                                y       = orde terhadap B<br>
                                x + y   = orde reaksi total<br>
                        <br>
                        </p>
                        <p class="text_content3">Pada persamaan laju reaksi disimbolkan dengan k. setiap jenis reaksi mempunyai harga tertentu.
                            Jika reaksi berlangsung cepat, maka harga k besar. Begitu pula sebaliknya.
                            Jika reaksi berlangsung lambat, maka harga k kecil.
                            Selain harga k, pada persamaan laju reaksi juga ada orde reaksi. <br>
                    </div>
                </div>
                <div class="contentmateri1">
                        <div class="main">
                            <center><p class="text_content">Menentukan Orde Reaksi </p></center>
                            <br>
                            <p class="text_content3"><em>Orde reaksi  menyatakan pengaruh konsentrasi suatu pereaksi terhadap laju reaksi</em>.
                                 Orde reaksi hanya dapat ditentukan secara eksperimen. J
                                 ika laju suatu reaksi dinyatakan dengan persamaan V= k [A]<sub>x</sub> [B]<sub>y</sub>, maka orde reaksi  terhadap A adalah x,
                                 orde reaksi terhadap B adalah y,
                                 dan orde reaksi keseluruhan merupakan jumlah semua pangkat yang terdapat pada persamaan laju reaksi.
                                 Jadi reaksi total persamaan laju reaksi diatas adalah x+y<br>
                                 Jenis orde reaksi:<br>

                            <br>
                            </p>
                        </div>
                            <div class="main">
                                <div class="gambarmateri2">
                                 <img src="./img/materi/orde_nol.jpg" width="200px" height="200px" alt="">
                            </div>
                            <p class="text_content2">1. Orde nol: laju reaksi tidak tergantung pada konsentrasi maksudnya,
                                perubahan konsentrasi zat tidak mempengaruhi laju reaksi.
                                Persamaan lajunya di tulis v=k[A].
                            </p><br>
                        </div>
                    </div>
                        <div class="main">
                                <div class="gambarmateri2">
                                 <img src="./img/materi/orde_1.jpg" width="200px" height="200px" alt="">
                            </div>
                            <p class="text_content2">2. Orde satu: Laju reaksi berbanding lurus dengan konsentrasi salah satu reaktan.
                                Jika konsentrasi di lipat duakan maka laju raksi juga lipat dua kali.
                                Persamaan reaksinya di tulis v=k[A]<sup>1</sup>
                            </p><br>
                        </div>
                        <div class="main">
                                <div class="gambarmateri2">
                                 <img src="./img/materi/orde_dua.jpg" width="200px" height="200px" alt="">
                            </div>
                            <p class="text_content2">3. Orde dua: jika laju reaksi berbanding lurus dengan kuadrat konsentrasi reaktan,
                                Jika konsentrasi reaktan di lipat duakan maka laju reaksi lipat 2 = 4 kali.
                                Persamaan lajunya di tulis v=k[A]<sup>2</sup> <br>
                                Orde dua juga bisa didapatkan dari pejumlahan orde reaksi reaktan secara keseluruhan.
                            </p><br>
                    <p class="text_content2">CONTOH SOAL<br>
                        1.	Data percobaan untuk reaksi  2A<sub>(g)</sub> + B<sub>(g)</sub> → 2AB terdapat dalam table berikut:
                       <br>
                        <table border="3" cellpadding="30">
                            <tr bgcolor="yellow">
                                <td>percobaan</td>
                                <td>[A]M</td>
                                <td>[B]M</td>
                                <td>Laju reaksi M/s</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0,50</td>
                                <td>0,50</td>
                                <td>1,6 * 10<sup>-4</sup></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>0,50</td>
                                <td>0,50</td>
                                <td>3,2 * 10<sup>-4</sup></td>
                            </tr>
                            <tr>
                                <td>3</sup></td>
                                <td>1,00</sup></td>
                                <td>1,00</sup></td>
                                <td>3,2 * 10<sup>-4</sup></td>
                            </tr>
                        </table><br>
                        1.	Orde reaksi terhadap A<br>
                        2.	Orde reaksi terhadap B<br>
                        Penyelesaian:<br>
                        a) Orde reaksi terhadap A<br><br>
                        <img src="./img/materi/orde_reaksi_a1.gif" alt=""><br><br>
                        <img src="./img/materi/orde_reaksi_a2.gif" alt=""><br><br>
                        <img src="./img/materi/orde_reaksi_a3.gif" alt=""><br><br>
                        b) Orde reaksi terhadap A<br><br>
                        <img src="./img/materi/orde_reaksi_b1.gif" alt=""><br><br>
                        <img src="./img/materi/orde_reaksi_b2.gif" alt=""><br><br>
                        <img src="./img/materi/orde_reaksi_b3.gif" alt=""><br><br>
                        c) Orde total = 0 + 1 = 1<br>
                        d) Persamaan Laju Reaksi V=k[B]

                    </p>
                        </div>
                    </div>
        </div>

<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
