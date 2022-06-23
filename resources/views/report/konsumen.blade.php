
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SI.SUPPLIER ITU</title>
    <style>
        * {
    --success: #1cc88a;
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    h1 {
        text-align: center;
    }
    table {
        border-collapse: collapse;
    }
    thead {
        background-color:#1cc88a;
        color: white;
    }
    .table-data {
        text-align: center;
    }
    th,
    td {
        border: 1px solid black;
        padding: 5px 20px;
    }

    body {
        font-size: 10px;
        margin: 2.5cm 2cm 2cm 2cm;
    }

    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 1.5cm;
        width: 100%;
    }

    </style>
</head>

<body>
    <header class="sidebar-brand d-flex align-items-center justify-content-center" >
    
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-truck" style="font-size: 40px"></i>
            </div>
            <div class="brand"><h1 class="text-center">Supplier Bahan Makanan ITU</h1>
            </div>
        
    </header>

    
    <main>
        {{-- <div style="page-break-after:auto;"> --}}
        <div class="containter">
            <h4>Data Konsumen</h4>
            <table class="table-data">
                <thead class="">
                    <tr>
                        <th>No</th>
                        <th>ID Konsumen</th>
                        <th>Nama Konsumen</th>
                        <th>Contact</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($data as $k)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{$k->id_konsumen}}</td>
                            <td >{{ $k->nama_konsumen}}</td>
                            <td>{{$k->contact}}</td>
                            <td >{{ $k->alamat}}</td>
                        </tr>
                        @php
                        $i++;
                         @endphp
                        @endforeach
                </tbody>
            </table> <!-- Table closed -->
        </div>
        
    </main>
</body>
</html>
