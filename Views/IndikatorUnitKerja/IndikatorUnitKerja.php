<div class="container-fluid body-content">
    
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-12">
            <center>
                <span class="badge badge-pill badge-dark" style="background: #1BBC9B;padding: 10px;font-size:14px;">
                    <i class="fas fa-book"></i> 
                    Indikator Unit Kerja
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
            <th scope="col">KODE_IUK</th>
            <th scope="col">INDIKATOR UNIT</th>
            <th scope="col">TIPE</th>
            </tr>
        </thead>
        <tbody style="cursor: pointer;">
            <tr>
              <th>1</th>
              <td>Dapat menerapkan paham keagamaan dan toleransi beragama tanpa meninggalkan faham keagamaan yang dianut</td>
              <th>T (Teori)</th>
            </tr>
            <tr>
              <th>2</th>
              <td>Mampu menerapkan paham keagamaan dan toleransi beragama tanpa meninggalkan faham keagamaan yang dianut</td>
              <th>P (Prilaku)</th>
            </tr>
            <tr>
              <th>3</th>
              <td>Harus toleran dan taat asas</td>
              <th>S (Sikap)</th>
            </tr>
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH IUK(INDIKATOR UNIT KERJA)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Nama Indikator</label>
            <input class="form-control" placeholder="Tulis Indikator" type="text">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>