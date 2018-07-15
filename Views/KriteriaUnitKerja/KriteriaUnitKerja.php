<div class="container-fluid body-content">
    
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-12">
            <center>
                <span class="badge badge-pill badge-dark" style="background: #1BBC9B;padding: 10px;font-size:14px;">
                    <i class="fas fa-book"></i> 
                    Kriteria Unit Kerja
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
            <th scope="col">KODE_KUK</th>
            <th scope="col">KRITERIA UNIT</th>
            </tr>
        </thead>
        <tbody style="cursor: pointer;" onclick="location.href='indikatorunitkerja';">
            <tr>
              <th>1</th>
              <td>Paham keagamaan dan toleransi beragama diterapkan tanpa meninggalkan paham keagamaan yang dianut</td>
            </tr>
            <tr>
              <th>2</th>
              <td>Kehidupan sehari-hari disesuaikan dengan pola kehidupan di lingkungan tempat kerja</td>
            </tr>
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH KUK(KRITERIA UNIT KERJA)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Nama Kriteria</label>
            <input class="form-control" placeholder="Tulis Kriteria Unit" type="text">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>