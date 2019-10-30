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
        <center><b>MASUKAN BILANGAN V2:</b><br/>
        <input type="text" id="a" name="v2" value=""/><br/>
        <b>MASUKAN BILANGAN v1 :</b><br/>
        <input type="text" id="b" name="v1" value=""/><br/>
        <b>MASUKAN BILANGAN n:</b><br/>
        <input type="text" id="c" name="n" value=""/><br/>
        <b>MASUKAN BILANGAN t1:</b><br/>
        <input type="text" name="t1" value=""/><br/>
        <b>MASUKAN BILANGAN t2:</b><br/>
        <input type="text" name="t2" value=""/><br/>
        <b>MASUKAN BILANGAN Kenaikan:</b><br/>
        <input type="text" name="k" value=""/><br/>
        <input type="button" value="=" onClick="hitung()" />
        <input type="button" value="CLEAR" onClick="resetForm()" /><br>
        </div>



        <script language="JavaScript" type="text/javascript">
            function hitung(){

                var myForm = document.form1;
                var v2=eval(myForm.v2.value);
                var v1=eval(myForm.v1.value);
                var n=eval(myForm.n.value);
                var t1=eval(myForm.t1.value);
                var t2=eval(myForm.t2.value);
                var k=eval(myForm.k.value);
                if (v2 == null) {
                    var dt = t2-t1 ;
                    var pkt = dt/k;
                    var v2 = n^pkt ;
                    myForm.v2.value = pkt   ;
                }
                document.getElementById("a").disabled = true;
                document.getElementById("b").disabled = true;
                document.getElementById("c").disabled = true;

            }
                function resetForm(){
                    document.form1.reset();
                    document.getElementById("a").disabled = false;
                    document.getElementById("b").disabled = false;
                    document.getElementById("c").disabled = false;
                }
            </script>


	  </section>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
