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
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
    <div class="warpper">
            <div class="judul">
            <h3>MOLARITAS</h3>
            </div>
            <div class="contentmateri1">
                <div class="main">
                    <center><p class="text_content">
                    Kemolaran </p></center>
                    <br>
                    <p class="text_content3">Molaritas menyatakan jumlah mol zat dalam 1 L larutan,
                        sehingga molaritas yang dinotasikan dengan M, dan dirumuskan sebagai berikut.
                    <img src="./img/materi/rumus_kemolaran.jpg" alt=""><br>
                    Keterangan :<br>
                    M	= molaritas (mol L-1)<br>
                    m	= massa zat terlarut (gram)<br>
                    Mr 	= massa molar (gram/mol)<br>
                    n	=mol zat terlarut (mol)<br>
                    v	= volume larutan (L) <br>
                </p>

                    <p class="text_content2"> Contoh Soal :<br>
                           1. Akuades sebanyak 300ml ditambahkan ke dalam 200ml larutan HCl 0,4 M.
                           berapa molaritas larutan yang terjadi?<br>
                            Diketahui:<br>
                            V1	= 300ml<br>
                            V2	= 200ml<br>
                            M1	= 0,4M<br>
                            Ditanyakan<br>
                            M2  =   ? <br>
                            Penyelesaian: <br>
                            M = 400mol/L . 0,2L = 0,08 mol <br>
                            Volume larutan yang diencerkan = 200ml + 300ml = 500ml = 0,5L <br>
                            <img src="./img/materi/hasil_contoh_kemolaran.gif" alt=""><br>
                       </p>
                     <br>

                    <p class="text_content2">2.	Hitung konsentrasi larutan NaOH yang terbentuk dari pelarutan 2 gram NaOH dalam air hingga volumenya 100Ml (ArH=1, O=16, Na=23)<br>
                            Diketahui : <br>
                            Massa   = 2gram<br>
                            V       = 100ml <br>
                            Mr      = 40 <br>
                            Penyelesaian : <br><br>
                         <img src="./img/materi/penyelesaian_contoh_kemolaran2a.gif" alt=""><br><br>
                         <img src="./img/materi/penyelesaian_contoh_kemolaran2b.gif" alt=""><br><br>
                         <img src="./img/materi/penyelesaian_contoh_kemolaran2c.gif" alt=""><br><br>
                         Untuk menyatakan konsentrasi dapat menggunakan notasi kurung siku, misal konsentrasi larutan HCl dapat ditulis [HCl].
                    </p>
                  <br>
                </div>
            </div>
            <div class="contentmateri1">
                    <div class="main">
                        <center><p class="text_content">
                        Pengenceran </p></center>
                        <br>
                        <p class="text_content3">Pembuatan larutan terkadang tidak berasal dari kristal murninya, tetapi dari larutan pekat.
                            Cara membuatnya disebut pengenceran. Mula-mula larutan pekat ditambahkan zat pelarut sehingga mengubah larutan menjadi lebih encer.
                            Pengenceran menyebabkan volume dan konsentrasi (kemolaran) berubah, tetapi jumlah mol zat terlarut tidak berubah.
                            Oleh karena itu, maka dapat disimpulkan bahwa: <br>
                            <center> n<sub>1</sub> = n<sub>2</sub><br>
                            V<sub>1</sub>. M<sub>1</sub> = V<sub>2</sub> .M<sub>2</sub> </center>
                            Keterangan :<br>
                            V1: volume larutan awal (mL atau L)
                            M1: konsentrasi/molaritas awal (M)
                            V2: volume larutan setelah pengenceran (mL atau L)
                            M2: konsentrasi/molaritas setelah pengenceran (M)

                        Keterangan :<br>
                        M	= molaritas (mol L-1)<br>
                        m	= massa zat terlarut (gram)<br>
                        Mr 	= massa molar (gram/mol)<br>
                        n	=mol zat terlarut (mol)<br>
                        v	= volume larutan (L) <br>
                    </p>

                        <p class="text_content2"> Contoh soal <br>
                                1. Larutan NaCl 1M sebanyak 2L diencerkan dengan akuades hingga kemolarannya menjadi 0,4M.
                                Hitung volume akuades yang harus ditambahkan!<br>
                                Diketahui: <br>
                                V1	= 2L<br>
                                M1	= 1M<br>
                                M2	= 0,4M<br>
                                Ditanyakan<br>
                                V2? <br>
                                Penyelesaian:<br>
                                V<sub>1</sub>. M<sub>1</sub> = V<sub>2</sub> .M<sub>2</sub> <br>
                                2L. 1M = V<sub>2</sub> . 0,4M<br>
                                <img src="./img/materi/jawaban_contoh_pengenceran1.gif" alt=""><br><br>
                           </p>
                         <br>
                      <br>
                    </div>
                </div>
                    <div class="contentmateri1">
                        <div class="main">
                            <center><p class="text_content">
                            Pencampuran </p></center>
                            <br>
                            <p class="text_content3">Pencampuran merupakan penggabungan 2 atau lebih zat yang jenisnya sama, tetapi konsentrasinya berbeda.
                                Pada proses pencampuran beberapa jenis zat berlaku rumus:  <br>
                                <img src="./img/materi/rumus_pencampuran.gif" alt=""><br>
                                <p class="text_content2"> Contoh soal <br>
                                    NaOH 0,5M sebanyak 100ml dicampur dengan 400ml NaOH 0,1M.
                                    Hitung molaritas larutan yang terjadi!<br>
                                    Diketahui :<br>
                                    M1 	= 0,5M <br>
                                    V1  = 100ml<br>
                                    V2 	= 400ml <br>
                                    M2 	= 0,1M<br>
                                    Penyelesaian:<br><br>
                                    <img src="./img/materi/penyelesaian_pencampuran1.gif" alt=""><br><br>
                                    <img src="./img/materi/penyelesaian_pencampuran2.gif" alt="">
                               </p>
                             <br>
                          <br>
                        </div>
                    <div class="contentmateri1">
                            <div class="main">
                                <center><p class="text_content">
                                Massa Jenis </p>
                                <br>
                                <img src="./img/materi/rumus_massa_jenis.gif" alt=""></center>
                                    <p class="text_content2"> Contoh soal :<br>
                                            Asam klorida pekat mengandung 37% massa HCl dan massa jenis 1,19 kg/liter.
                                            Berapakah molaritas larutan asam klorida tersebut? (MrHCl= 36,5) <br>
                                            Diketahui :<br>
                                            Massa jenis: 1,19 <br>
                                            Kadar      : 37% <br>
                                            Mr         : 36,5 <br>
                                            Penyelesaian :<br>
                                        <img src="./img/materi/rumus_massa_jenis.gif" alt=""><br><br>
                                        <img src="./img/materi/penyelesaian_massa_jenis.gif" alt=""><br>
                                        <em>M = 12,06M</em>
                                    </p>
                                 <br>
                              <br>
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
