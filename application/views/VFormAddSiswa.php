        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
              <div class="box-body">
<!--==========================================================================================================================-->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="No. Induk" name="nis">
                  </div>
                </div>
<!--==========================================================================================================================-->
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="nama">
                  </div>
                </div>
<!--==========================================================================================================================-->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <div><select type="text" class="form-control" id="inputEmail3" name="jk">
					        <option>L</option>
					        <option>P</option>
					        </select>
					</div>           
                  </div>
                </div>
<!--==========================================================================================================================-->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                    <div><select type="text" class="form-control" id="inputEmail3" name="keterangan">
					        <option>Hadir</option>
					        <option>Sakit</option>
					        <option>Izin</option>
					        <option>Alfa</option>
					        </select>
					</div>           
                  </div>
                </div>
<!--==========================================================================================================================-->
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" value="Simpan" class="btn btn-info pull-right">Simpan</button>
              </div>
          </form>
      </div>
  </div>