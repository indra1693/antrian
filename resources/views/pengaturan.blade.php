@extends('layout-antrian.main')
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
@endsection
@section('content')
<div class="container pt-5">
  <!-- tampilkan pesan selamat datang -->
  {{-- <div class="alert alert-light d-flex align-items-center mb-5 justify-content-center"  role="alert" style="opacity: 0.6;"> --}}
      {{-- <i class="bi-info-circle text-success me-3 fs-3"></i> --}}
      <div class="text-center mb-5" style="color: white;">
         <h2><strong>Pengaturan Ruangan</strong></h2>
      </div>
  {{-- </div> --}}

  <div class="row gx-5">
      <!-- link halaman nomor antrian -->
      <div class="col-xl-20 mb-4">
          <div class="card border-0 shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center mb-2 mb-md-3" style="
            margin-top: 10px; margin-left: 10px; margin-right: 10px; ">
              <span>
                <Strong>Data Ruangan</Strong><br>
                <label for="label-ruangan" style="font-size: x-small;">Total Ruangan Tersedia : </label>
              </span>
              <span>
                <a href="#" class="btn btn-info rounded-pill px-3 py-2 text-white" data-bs-toggle="modal" data-bs-target="#addItemModal"> 
                  <strong>+ Tambah Ruangan</strong>
                </a>
              </span>
            </div>
            <div class="card-body">
              
              <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Ruangan</th>
                        <th>Jam Oprasional</th>
                        <th>Status</th>
                        <th>Akasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                    </tr>
                </tbody>
            </table>

            </div>
          </div>
      </div>

  </div>

  <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addItemModalLabel">Add New Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addItemForm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script>
  new DataTable('#example');
</script>  
@endsection