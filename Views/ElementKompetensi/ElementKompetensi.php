<div class="container-fluid body-content">
    
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-12">
            <center>
                <span class="badge badge-pill badge-dark" style="background: #1BBC9B;padding: 10px;font-size:14px;">
                    <i class="fas fa-book"></i> 
                    Element Kompetensi
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
            <th scope="col">KODE_EK</th>
            <th scope="col">KOMPETENSI</th>
            </tr>
        </thead>
        <tbody style="cursor: pointer;" onclick="location.href='kriteriaunitkerja';">
            <tr>
              <th>1</th>
              <td>Membina lingkungan kerja dan mengenal adat istiadat, peraturan, perundangan</td>
            </tr>
            <tr>
              <th>2</th>
              <td>Memahami bahaya perdagangan manusia, psikotropika, dan tindak kriminal</td>
            </tr>
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH EK(Element Kompetensi)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Nama Kompetensi</label>
            <input class="form-control" placeholder="Tulis Nama Kompetensi" type="text">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>