
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">KELAS XI RPL 1</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">     
               <a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>" class="btn btn-success">Add +</a>     
                <thead>
                <tr>
					<th>NIS</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Keterangan</th>
                </tr>
			<?php
			if(!empty($DataSiswa))
			{
				foreach($DataSiswa as $ReadDS)
				{
			?>

			<tr>
				<td><?php echo $ReadDS->nis; ?></td>
				<td><?php echo $ReadDS->nama; ?></td>
				<td><?php echo $ReadDS->jk; ?></td>
				<td><?php echo $ReadDS->keterangan; ?></td>
				<td>
					<a href="<?php echo site_url('Welcome/DataSiswa/'.$ReadDS->nis.'/view') ?>"class="btn btn-info">Update</a>
					<a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nis) ?>" class="btn btn-danger">Delete</a>
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