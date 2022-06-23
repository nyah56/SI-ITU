@extends('layouts.main')
@section('container')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
     </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow h-10 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $produk }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-carrot fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pesanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pesan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stok-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Persediaan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $persediaan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Konsumen-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Konsumen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $konsumen }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Content Row -->

    <div class="row m-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tentang Kami</h1>
         </div>
        <div class="card-group">
            <div class="card">
              <img src="img/da1.jpg" class="card-img-top" height="200px" alt="...">
              <div class="card-body">
                <h5 class="card-title">Produk Kami</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, consequuntur?</p>
              </div>
              
            </div>
            <div class="card">
              <img src="img/da2.jpg" class="card-img-top" height="200px" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gudang Kami</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, distinctio!</p>
              </div>
              
            </div>
            <div class="card">
              <img src="img/da3.jpg" class="card-img-top" height="200px" alt="...">
              <div class="card-body">
                <h5 class="card-title">Beragam Bahan Makanan</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, error?</p>
              </div>
              
            </div>
          </div>
            
          </div>
        
        
    </div>
@endsection
