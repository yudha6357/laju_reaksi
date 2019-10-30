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
        <b>MASUKAN BILANGAN % :</b><br/>
        <input type="text" name="p" value=""/><br/>
        <b>MASUKAN BILANGAN &rho;:</b><br/>
        <input type="text" name="r" value=""/><br/>
        <b>MASUKAN BILANGAN mr:</b><br/>
        <input type="text" name="mr" value=""/><br/>
        <b>MASUKAN BILANGAN Ketetapan:</b><br/>
        <input type="text" name="10" value="10" disabled="true" /><br/>
        <input type="button" value="=" onClick="hitung()" />
        <input type="button" value="CLEAR" onClick="resetForm()" /><br>
        </div>



        <script language="JavaScript" type="text/javascript">
            function hitung(){

                var myForm = document.form1;
                var M=eval(myForm.M.value);
                var p=eval(myForm.p.value);
                var r=eval(myForm.r.value);
                var mr=eval(myForm.mr.value);
                if (M == null) {
                    var M = (p * r *10) / mr ;
                    myForm.M.value = M;
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

	</body>
</html>
