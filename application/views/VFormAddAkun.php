        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('Welcome/AddAkun'); ?>" method="post">
              <div class="box-body">
<!--==========================================================================================================================-->
           
<!--==========================================================================================================================-->
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="name" name="nama">
                  </div>
                </div>
<!--==========================================================================================================================-->
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="username" name="username">
                  </div>
                </div>
<!--==========================================================================================================================-->
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="password" name="password">
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