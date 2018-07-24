<div class="container-fluid body-content">
    
     <h4>KURIKULUM</h4>
    <br>

    <table class="table table-bordered table-hover table-striped">
        <thead style="background: #22313F;color:#fff;">
            <tr>
            <th scope="col">KODE KURIKULUM</th>
            <th scope="col">PBK</th>
            </tr>
        </thead>
        <tbody style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal2">
              <tr>
              <th>A1234</th>
              <td>Pendidikan Bahasa Inggris untu Public Area Attendant</td>
            </tr>
            <tr>
              <th>B1234</th>
              <td>(BELUM ADA)</td>
            </tr>
        </tbody>
    </table>
    
    <div class="row" style="margin:20px;position:absolute;z-index:9999;bottom:0;right:0;">
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PILIH MATA LATIHAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <input type="text" class="form-control" placeholder="Cari mata latihan">
            <br>
            <br>
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action">
					Membekali diri Tentang Kondisi Kerja dan Risiko Kerja
					<span class="badge badge-pill badge-dark" style="background: #1BBC9B;padding: 10px;">
						<i class="fas fa-check"></i> 
					</span>
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Menerapkan Prosedur Keselamatan dan Kesehatan Kerja di Tempat Kerja
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Menerapkan Prosedur Keselamatan dan Kesehatan Kerja di Tempat Kerja
					<span class="badge badge-pill badge-dark" style="background: #1BBC9B;padding: 10px;">
						<i class="fas fa-check"></i> 
					</span>
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Menerapkan Prosedur Keselamatan dan Kesehatan Kerja di Tempat Kerja
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Menerapkan Prosedur Keselamatan dan Kesehatan Kerja di Tempat Kerja
				</a>

			  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PBK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <input type="text" class="form-control" placeholder="Cari PBK">
        <br>
        <br>
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            Pendidikan Bahasa Inggris untu Public Area Attendant
        </a>
        <a href="#" class="list-group-item list-group-item-action">
           Pendidikan Bahasa Arab untu Public Area Attendant
            <span class="badge badge-pill badge-dark" style="background: #1BBC9B;padding: 10px;">
                <i class="fas fa-check"></i> 
            </span>
        </a>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>