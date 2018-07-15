<div class="container-fluid body-content">
    
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-12">
            <center>
                <span class="badge badge-pill badge-dark" style="background: #1BBC9B;padding: 10px;font-size:14px;">
                    <i class="fas fa-book"></i> 
                    Unit Kompetensi (Mata Latihan)
                </span>
            </center>
        </div>
    </div>

    
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-12">
            <center>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"></i>  TAMBAH BARU
                </button>
            </center>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped">
        <thead style="background: #22313F;color:#fff;">
            <tr>
            <th scope="col">SEQ_ID</th>
            <th scope="col">KODE_UK</th>
            <th scope="col">MATA LATIHAN</th>
            </tr>
        </thead>
        <tbody style="cursor: pointer;" onclick="location.href='elementkompetensi';">
            <tr>
            <th>1</th>
            <td>T.9007.001.002.02</td>
            <td>Membekali diri Tentang Kondisi Kerja dan Risiko Kerja</td>
            </tr>
            <tr>
            <th>2</th>
            <td>T.9007.001.003.02</td>
            <td>Menerapkan Prosedur Keselamatan dan Kesehatan Kerja di Tempat Kerja</td>
            </tr>
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH UK(UNIT KOPETENSI) BARU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Nama Latihan</label>
            <input class="form-control" placeholder="Tulis Nama Latihan" type="text">
        </div>
         <div class="form-group">
            <label>Kode Unit</label>
            <input class="form-control" placeholder="Masukan kode Unis" type="text">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>