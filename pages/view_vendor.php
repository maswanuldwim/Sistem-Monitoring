<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Laporan Vendor</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <div class="row">
                                        <div class="col-lg-6">Tabel Laporan Vendor</div>
                                        <div class="col-lg-6">
                                            <a href="export/export_vendor.php">
                                                <button style="margin: 0px 0px;float:right" type="button" class="btn btn-warning">Export Data Vendor</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table dataTables-example table-striped table-bordered table-hover">
                                        <thead>
                    <tr>
                    <th style="text-align:center;">No</th>
		<th style="text-align:center;">Nama Vendor</th>
		<th style="text-align:center;">Nama Pelanggan</th>
        <th style="text-align:center;">Tanggal Pasang</th>
		<th style="text-align:center;">Foto Dokumentasi</th>
		<th style="text-align:center;">Volume Tiang 9m</th>
		<th style="text-align:center;">Volume Tiang 11m</th>
		<th style="text-align:center;">Volume Tiang 13m</th>
		<th style="text-align:center;">Keterangan</th>
		<th style="text-align:center;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOPSI&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    </tr>
                </thead>
                <tbody>
     <?php
            $result = mysql_query("SELECT * FROM beranda WHERE vendor='$username' ORDER BY tgl_pasang DESC");
            $no=1;
            while($data = mysql_fetch_array($result)){
                ?>
        
                <tr>
       <td style="text-align: center"><?php echo $no ?></td>
	   <td style="text-align: center"><?php echo $data['vendor'] ?></td>
       <td style="text-align: center"><?php echo $data['nama_pelanggan'] ?></td>
        <td style="text-align: center"><?php echo $data['tgl_pasang'] ?></td>
		<?php echo "<td><img src='config/images/".$data['foto_dokumentasi']."' width='100' height='100'></td>"?>
		<td style="text-align: center"><?php echo $data['v_9m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_11m'] ?></td>
		<td style="text-align: center"><?php echo $data['v_13m'] ?></td>
		<td style="text-align: center"><?php echo $data['keterangan'] ?></td>
		<td style="width:150px;text-align: center;">
		 <?php echo"<a class='btn btn-info btn-sm' href='?pages=editpelanggan_vendor&edit=true&id=$data[no]'><i class='glyphicon glyphicon-edit icon-white'></i></a>"?>
		</td>
    </tr>
            <?php $no++; } ?>
    </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>