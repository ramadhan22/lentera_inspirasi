<?php $this->load->view('backend/header') ?>
<!-- Main content starts -->
<div class="content">

<?php $this->load->view('backend/sidebar') ?>

  	  	<!-- Main bar -->
  	<div class="mainbar">
<?php $this->load->view('backend/page_heading'); ?>
	    <!-- Matter -->

	    <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <?php echo anchor(base_url().'backend/laporan/tambah', '<div class="btn btn-sm btn-default">Tambah Laporan</div>'); ?>
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Daftar Laporan</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                  <div class="widget-content">
                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Bulan</th>
                          <th>Deskripsi</th>
                          <th>Link</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        foreach ($baris as $row) :
                        $no++;
                        $button_delete = anchor('backend/laporan/hapus/'.$row->id,'<i class="icon-remove icon-white"></i> Hapus', array('class' => 'btn btn-danger btn-small', 
                                                                    'title' => 'Hapus',
                                                                    'onclick' => "return confirm('Anda yakin ingin menghapus?')")
                                                        );
                        $button_edit = anchor('backend/laporan/ubah/'.$row->id,'<i class="icon-edit"></i> Ubah',array('class' => 'btn btn-small', 
                                                  'title' => 'Ubah')
                                                );
                          ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $row->date ?></td>
                          <td><?php echo $row->remarks ?></td>
                          <td><a href="<?php echo base_url().'uploads/laporan/'.$row->link ?>">Download</a></td>
                          <td><div class="btn-group"><?php echo $button_edit.$button_delete; ?></div></td>
                          
                        </tr>

                          <?php
                        
                        endforeach;
                       ?>
                      </tbody>
                    </table>
                  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Confirm Delete
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete this picture?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a href="#" class="btn btn-danger danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-foot">
                      <?php echo $links ?>
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>
              </div>      
          </div>  
        </div>
		  </div>

		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->
<?php $this->load->view('backend/footer') ?>