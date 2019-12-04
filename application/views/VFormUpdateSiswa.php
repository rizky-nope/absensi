        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
              <div class="box-body">
<!--==========================================================================================================================-->      
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                  	<input type="hidden" name="nis" value="<?php echo $detail['nis']; ?>">
                    <input type="text" class="form-control" id="inputEmail3" name="nama" value="<?php echo $detail['nama']; ?>">
                  </div>
                </div>
<!--==========================================================================================================================-->                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <div><select type="text" class="form-control" id="inputEmail3" name="jk" value="<?php echo $detail['jk']; ?>">
					        <option>L</option>
					        <option>P</option>
					        </select>
					</div>           
                  </div>
                </div>                
<!--==========================================================================================================================-->                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                    <div><select type="text" class="form-control" id="inputEmail3" name="keterangan" value="<?php echo $detail['keterangan']; ?>">
					        <option>Hadir</option>
					        <option>Sakit</option>
					        <option>Izin</option>
					        <option>Alfa</option>
					        </select>
					</div>           
                  </div>
                </div>
<!--==========================================================================================================================-->                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="btn_simpan" value="Simpan" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>