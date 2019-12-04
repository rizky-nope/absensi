        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('Welcome/UpdateAkun'); ?>" method="post">
              <div class="box-body">
<!--==========================================================================================================================-->      
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                  	<input type="hidden" name="kd_login" value="<?php echo $detail['kd_login']; ?>">
                    <input type="text" class="form-control" id="inputEmail3" name="nama" value="<?php echo $detail['nama']; ?>">
                  </div>
                </div>
<!--==========================================================================================================================-->                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">                    
                    <input type="text" class="form-control" id="inputEmail3" name="username" value="<?php echo $detail['username']; ?>">
                  </div>
                </div>          
<!--==========================================================================================================================-->                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">                    
                    <input type="text" class="form-control" id="inputEmail3" name="password" value="<?php echo $detail['password']; ?>">
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