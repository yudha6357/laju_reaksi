<!DOCTYPE html>
@include('layout.header')
@include('layout.background2')
@include('layout.head')
<html lang="zxx">
        <head>
                <link rel="stylesheet" type="text/css" href="./css/style.css">
            </head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
        <div class="loader"></div>
    </div>
               <div class="panel-body">
                 <br>
                <button onclick="window.location.href='{{ url('input_soal') }}'" class="site-btn" type="soal" >Tambah</button>
                <br>
                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                    <thead>

                        <tr>
                            <th>NO</th>
                            <th>SOAL</th>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                            <th>E</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($soal as $li)
                            <tr>
                                <td>{{ $li->id }}</td>
                                <td>{{ $li->soal }}</td>
                                <td>{{ $li->A }}</td>
                                <td>{{ $li->B }}</td>
                                <td>{{ $li->C }}</td>
                                <td>{{ $li->D }}</td>
                                <td>{{ $li->E }}</td>
                                <td>
                                        <a href="update_soal/{{ $li->id }}" class="btn btn-warning">Edit</a>
                                        <a href="hapus/{{ $li->id }}" class="btn btn-danger">Hapus</a>
                                    </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
    <!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
