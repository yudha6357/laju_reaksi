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
                            <form action="{{ route('tambahdata')}}" method="POST" >
                                    @csrf
                                    SOAL :<br>
                                    <div  id="soal" ></div>
                                    <br/><br/>
                                    A : <input type="text" name="A"><br/><br/>
                                    B : <input type="text" name="B"><br/><br/>
                                    C : <input type="text" name="C"><br/><br/>
                                    D : <input type="text" name="D"><br/><br/>
                                    E : <input type="text" name="E"><br/><br/>
                                    <input type="submit" value="proses">
                                </form>

                    </p>
        </div>
    <!--====== Javascripts & Jquery ======-->
    <script src="/js/jquery.js"></script>
	{{--  <script src="/js/jquery-3.2.1.min.js"></script>  --}}
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
