
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Akun</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">     
               <a href="<?php echo site_url('Welcome/VFormAddAkun'); ?>" class="btn btn-success">Add +</a>     
                <thead>
                <tr>
					<th>KD</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
                </tr>
			<?php
			if(!empty($Register))
			{
				foreach($Register as $ReadDS)
				{
			?>

			<tr>
				<td><?php echo $ReadDS->kd_login; ?></td>
				<td><?php echo $ReadDS->nama; ?></td>
				<td><?php echo $ReadDS->username; ?></td>
				<td><?php echo $ReadDS->password; ?></td>
				<td>
					<a href="<?php echo site_url('Welcome/Register/'.$ReadDS->kd_login.'/view') ?>"class="btn btn-info">Update</a>
					<a href="<?php echo site_url('Welcome/DeletAkun/'.$ReadDS->kd_login) ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>

			<?php		
				}
			}
			?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>