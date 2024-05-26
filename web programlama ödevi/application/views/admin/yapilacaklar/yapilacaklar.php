<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/leftmenu');?>

<?php $yapilacaklar=yapilacaklar::select(); ?>

<div class="content">
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Görev Ekle</button><br><br>
						
						<div class="active-member">
							<div class="table-responsive">
								
								<table class="table table-xs mb-0">
									<thead>
										<tr>
											<th>Görev Adı</th>
											<th>Tamamlanma Durumu</th>
											<th>Öncelik Durumu</th>
											<th>Başlangıç Tarihi</th>
											<th>Bitiş Tarihi</th>
											<th>İşlemler</th>
											
										</tr>
									</thead>
									<tbody>
										<?php foreach ($yapilacaklar as $key) { ?>	


											<tr>
												<td><?=$key->adi?></td>
												<td>
													<?php if($key->durum==0){ ?>

														<a href="<?php echo base_url('admin/gorevaktif/'.$key->id); ?>" class="btn btn-warning btn-xs">Tamamlanmadı </a>

													<?php }elseif($key->durum==1){ ?>	

														<a href="<?php echo base_url('admin/gorevaktif/'.$key->id); ?>" class="btn btn-success btn-xs"> Tamamlandı</a>

													<?php } ?>	

												</td>
												<td>
													<?php if($key->oncelikdurum==0){ ?>

														<a href="<?php echo base_url('admin/oncelikdurumu/'.$key->id); ?>" class="btn btn-warning btn-xs">Öncelikli Değil </a>

													<?php }elseif($key->oncelikdurum==1){ ?>	

														<a href="<?php echo base_url('admin/oncelikdurumu/'.$key->id); ?>" class="btn btn-success btn-xs"> Öncelikli</a>

													<?php } ?>	

												</td>
												<td><?=$key->tarih?></td>
												<td><?=$key->bitistarih?></td>
												<td> 
													<a href="<?php echo base_url('admin/gorev_duzenle/'.$key->id); ?>" class="btn btn-info btn-xs">Düzenle</a>

													<a onclick="return confirm('Silmek istediğinize emin misiniz?');" href="<?php echo base_url('admin/gorevsil/'.$key->id); ?>" class="btn btn-xs btn-danger">Sil</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>                        
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="basicModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Görev Ekle</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('admin/gorevekle'); ?>" enctype="multipart/form-data">	

					<div class="form-group">
						<label><h4>Görev Adı</h4></label>
						<input type="text" name="adi" class="form-control">

					</div>	

					<div class="form-group">
						<label><h4>Başlangıç Tarihi</h4></label>
						<input type="date" name="tarih" class="form-control">
					</div>

					<div class="form-group">
						<label><h4>Bitiş Tarihi</h4></label>
						<input type="date" name="bitistarih" class="form-control">
					</div>	

					<div class="form-group">
						<label><h4>Detay</h4></label>
						<textarea rows="3" name="icerik" class="summernote"> </textarea>
					</div>
					


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
					<button type="submit" class="btn btn-primary">Kaydet</button>
				</div>

			</form>

		</div>
	</div>
</div>
<?php $this->load->view('admin/include/footer');?>