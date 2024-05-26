<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/leftmenu');?>

<?php $yapilacaklar=yapilacaklar::find($this->uri->segment(3)); ?>





<div class="content">
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">				
						<div class="active-member">
							<div class="table-responsive">
								
								<form method="post" action="<?php echo base_url('admin/gorev_duzenle/'.$yapilacaklar->id); ?>" enctype="multipart/form-data">	

									<div class="form-group">
										<label><h4>Görev Adı</h4></label>
										<input type="text" name="adi" value="<?=$yapilacaklar->adi?>" class="form-control">

									</div>	
									<div class="form-group">
										<label><h4>Başlangıç Tarihi</h4></label>
										<input type="date" name="tarih" value="<?=$yapilacaklar->tarih?>"  class="form-control">
									</div>	

									<div class="form-group">
										<label><h4>Bitiş Tarihi</h4></label>
										<input type="date" name="bitistarih" value="<?=$yapilacaklar->bitistarih?>"  class="form-control">
									</div>	
										
										

									<div class="form-group">
										<label><h4>Detay</h4></label>
										<textarea rows="3" name="icerik" class="summernote"> <?=$yapilacaklar->icerik?></textarea>
									</div>
								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-primary">Güncelle</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>                        
		</div>
	</div>




</div>
</div>



<?php $this->load->view('admin/include/footer');?>