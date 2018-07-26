<div class="container">
    <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama User</th>
      <th scope="col">Sebagai</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Admin</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Nonaktivkan </button>
        <button type="button" class="btn btn-secondary">Ubah</button>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td width="50%">Jacob</td>
      <td>Admin</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Nonaktivkan </button>
        <button type="button" class="btn btn-secondary">Ubah</button>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Pelatih</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Nonaktivkan </button>
        <button type="button" class="btn btn-secondary">Ubah</button>
        </div>
      </td>
    </tr>
  </tbody>
</table>
<div class="row" style="margin:20px;position:fixed;z-index:9999;bottom:0;right:0;">
        <div class="col-sm-12">
            <center>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"></i>  TAMBAH BARU
                </button>
            </center>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UBAH/TAMBAH USER BARU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>ID Peserta</label>
            <input class="form-control" placeholder="autocomplete" type="text">
            <label>NIK : 028883000007, </label>
            <label>Nama : Jono Indra</label>
        </div>
        <div class="card border-warning mb-3">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleSelect1">Sebagai</label>
            <select class="form-control" id="exampleSelect1">
              <option>Admin</option>
              <option>Pelatih</option>
            </select>
          </div>
          <h4 class="card-title">*Sebagai Admin</h4>
        </div>
      </div>
      <div class="card border-warning mb-3">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleSelect1">Sebagai</label>
            <select class="form-control" id="exampleSelect1">
              <option>Pelatih</option>
              <option>Admin</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Mata latihan</label>
            <select class="form-control" id="exampleSelect1">
              <option>Membekali diri Tentang Kondisi Kerja dan Risiko Kerja</option>
              <option>Menerapkan Prosedur Keselamatan dan Kesehatan Kerja di Tempat Kerja</option>
            </select>
          </div>
          <h4 class="card-title">*Sebagai Pelatih</h4>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>