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
        <center><b>MASUKAN BILANGAN V1:</b><br/>
        <input type="text" name="v1" value=""/><br/>
        <b>MASUKAN BILANGAN M1:</b><br/>
        <input type="text" name="m1" value=""/><br/>
        <b>MASUKAN BILANGAN V2:</b><br/>
        <input type="text" name="v2" value=""/><br/>
        <b>MASUKAN BILANGAN M2:</b><br/>
        <input type="text" name="m2" value=""/><br/><br>
        <input type="button" value="=" onClick="hitung()" />
        <input type="button" value="CLEAR" onClick="resetForm()" /><br>
        <input type="text" name="hasil" disabled="true" /></center><br/>
        </div>



        <script language="JavaScript" type="text/javascript">
            function hitung(){

                var myForm = document.form1;
                var v1=eval(myForm.v1.value);
                var m1=eval(myForm.m1.value);
                var v2=eval(myForm.v2.value);
                var m2=eval(myForm.m2.value);
                if (v1 == null) {
                    var v1 = v2 * m2 / m1 ;
                    myForm.v1.value = v1;
                }else if (v1 == "1") {
                        var v1 = v2 * m2;
                        myForm.v1.value = v1;
                     }
                if (m1 == null) {
                        var m1 = v2 * m2 / v1 ;
                        myForm.m1.value = m
                        1;
                }else if (v1 == "1") {
                            var m1 = v2 * m2;
                            myForm.m1.value = m1;
                         }
                if (v2 == null) {
                        var v2 = v1 * m1 / m2 ;
                        myForm.v2.value = v2;
                }else if (v2 == "1") {
                                var v2 = v1 * m1;
                                myForm.v2.value = v2;
                             }
                if (m2 == null) {
                        var m2 = v1 * m1 / v2 ;
                        myForm.m2.value = m2;
                }else if (m2 == "1") {
                        var m2 = v1 * m1;
                        myForm.m2.value = m2;
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
