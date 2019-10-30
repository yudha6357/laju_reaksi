<!DOCTYPE html>
@include('layout.header')
@include('layout.background2')
@include('layout.head')
<html lang="zxx">

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
    <div class="panel">

        <form name="form1" action="" method="post">
        <div align="center">   KALKULATOR   </div>
        <div align="center">============================</div>
        <center><b>MASUKAN BILANGAN M:</b><br/>
        <input type="text" name="M" value=""/><br/>
        <b>MASUKAN BILANGAN m:</b><br/>
        <input type="text" name="m" value=""/><br/>
        <b>MASUKAN BILANGAN mr:</b><br/>
        <input type="text" name="mr" value=""/><br/><br>
        <b>MASUKAN BILANGAN v:</b><br/>
        <input type="text" name="v" value=""/><br/>
        <b>MASUKAN BILANGAN Ketetapan:</b><br/>
        <input type="text" name="1000" value="1000" disabled="true" /><br/>
        <input type="button" value="=" onClick="hitung()" />
        <input type="button" value="CLEAR" onClick="resetForm()" /><br>
        <input type="text" name="hasil" disabled="true" /></center><br/>
        </div>



        <script language="JavaScript" type="text/javascript">
            function hitung(){

                var myForm = document.form1;
                var M=eval(myForm.M.value);
                var m=eval(myForm.m.value);
                var mr=eval(myForm.mr.value);
                var v=eval(myForm.v.value);
                if (M == null) {
                    var M = (m / mr) *(1000/v)  ;
                    myForm.M.value = M;

                }
                if (m == null) {
                        var m = (M * mr) / (1000 / v) ;
                        myForm.m.value = m;
                }

            }
                function resetForm(){
                document.form1.reset();
                }
            </script>



   	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>

	</body>
</html>
