<!DOCTYPE html>
@include('layout.header')
@include('layout.background2')
@include('layout.head')
<html lang="zxx">
        <head>

                <title>Membuat tampilan layout WEB sederhana HTML dan CSS</title>
                <link rel="stylesheet" type="text/css" href="/css/style.css">
                <link rel="stylesheet" type="text/css" href="/css/summernote.css">
            </head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
    </div>
    <div class="warpper">
            <div class="judul">
            <h3>INPUT SOAL</h3>
            </div>
            <div class="contentmateri1">
                <div class="main">
                            <form action="/update_soal/{{ $soal->id }}" method="POST" >
                                    @csrf
                                    SOAL :<br>
                                    <input type="text" id="soal" name="soal" value={{ $soal->soal }}><br>
                                    <br/><br/>
                                    A : <input type="text" name="A" value={{ $soal->A }}><br/><br/>
                                    B : <input type="text" name="B" value={{ $soal->B }}><br/><br/>
                                    C : <input type="text" name="C" value={{ $soal->C }}><br/><br/>
                                    D : <input type="text" name="D" value={{ $soal->D }}><br/><br/>
                                    E : <input type="text" name="E" value={{ $soal->E }}><br/><br/>
                                    <input type="submit" value="proses">
                                </form>

                    </p>
        </div>
    <!--====== Javascripts & Jquery ======-->
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/circle-progress.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/summernote.js"></script>
<script>
        $(document).ready(function() {
            $('#soal').summernote();
          });
</script>
</body>
</html>
