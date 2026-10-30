<div>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                <i class="fas fa-warehouse mr-1"></i>
                @yield('title')
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">
                    <i class="fas fa-home mr-1"></i>
                    Dashboard
                </a>
              </li>
              <li class="breadcrumb-item active">
                 <i class="fas fa-warehouse mr-1"></i>
                 @yield('title')
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

      <div class="card">
        <div class="card-header bg-white"
        style="padding: 15px 20px; min-height: 65px;">

          <div class="d-flex justify-content-between align-items-center">
          <div>
            <button type="button" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-1"></i>
                Tambah Data
            </button>
          </div>

          <div class="btn-group dropleft">
            <button type="button"
                    class="btn btn-warning btn-sm dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                <i class="fas fa-print mr-1"></i>
                Cetak
            </button>

          <div class="dropdown-menu">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-file-pdf mr-2 text-danger"></i>
                    Cetak PDF
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-file-excel mr-2 text-success"></i>
                    Export Excel
                </a>
            </div>
        </div>
       </div>
        <div class="card-body">
          DATA BARANG
        </div>
      </div>
    </section>
  </div>
</div>
