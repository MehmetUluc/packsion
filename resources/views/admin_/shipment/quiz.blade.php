@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.Orders') }} <small>{{ trans('labels.ListingAllShipments') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.Shipments') }}</li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">{{ trans('labels.ListingAllShipments') }} </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <!--<div class="row">
              <div class="col-sm-6">
                <div class="dataTables_length" id="example1_length">
                  <label>Show
                    <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                    entries</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div id="example1_filter" class="dataTables_filter">
                  <label>Search:
                    <input class="form-control input-sm" placeholder="" aria-controls="example1" type="search">
                  </label>
                </div>
              </div>
            </div>-->
            <div class="row">

			<div class="col-md-12">
				<div class="ibox">
					<div class="ibox-title">
						<h5>Anket Cevapları</h5>
					</div>
					<?php $quiz = json_decode($quiz->quiz); ?>

					<table class="table table-bordered table-striped table-hover">
						<tbody>
							<tr>
							<th style="width:30%;">Adı Soyadı:</th>
							<td><?php echo $user->customers_firstname . ' ' . $user->customers_lastname; ?></td>
						</tr>
					<?php if($quiz->gender == 'woman'): ?>
						<tr>
							<th style="width:30%;">Cinsiyet:</th>
							<td><?php echo isset($quiz->gender) ? $quiz->gender : '' ?></td>
						</tr>
						<tr>
							<th>Doğum Tarihi:</th>
							<td><?php echo isset($quiz->dob) ? $quiz->dob : '' ?></td>
						</tr>
						<tr>
							<th>Meslek:</th>
							<td><?php echo isset($quiz->job) ? $quiz->job : ''; ?></td>
						</tr>
						<tr>
							<th>Boy:</th>
							<td><?php echo isset($quiz->boy) ? $quiz->boy : ''; ?></td>
						</tr>
						<tr>
							<th>Kilo:</th>
							<td><?php echo isset($quiz->kilo) ? $quiz->kilo : ''; ?></td>
						</tr>
						<tr>
							<th>Saç rengi:</th>
							<td><?php echo isset($quiz->sac_rengi) ? $quiz->sac_rengi : ''; ?></td>
						</tr>
						<tr>
							<th>Göz rengi:</th>
							<td><?php echo isset($quiz->goz_rengi) ? $quiz->goz_rengi : ''; ?></td>
						</tr>
						<tr>
							<th>Ten rengi:</th>
							<td><?php echo isset($quiz->ten_rengi) ? $quiz->ten_rengi : ''; ?></td>
						</tr>
						<tr>
							<th>Vücut Tipi:</th>
							<?php if($quiz->gender == 'woman'){
								$folder = 'woman';
							} else {
								$folder = 'man';
							} ?>
							<td><img src='/images/<?php echo $folder. "/" . $quiz->vucut; ?>.jpg' />
								<br /><?php echo ucwords($quiz->vucut); ?>
							</td>
						</tr>
						<tr>
							<th>Standart Beden:</th>
							<td><?php echo isset($quiz->standart_beden) ? $quiz->standart_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Üst Beden:</th>
							<td><?php echo isset($quiz->üst_beden) ? $quiz->üst_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Kot Pantolon Bedeni:</th>
							<td><?php echo isset($quiz->kot_beden) ? $quiz->kot_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Alt Beden:</th>
							<td><?php echo isset($quiz->alt_beden) ? $quiz->alt_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Ayakkabı No:</th>
							<td><?php echo isset($quiz->ayakkabi_no) ? $quiz->ayakkabi_no : ''; ?></td>
						</tr>
						@if(isset($quiz->gizli))
							<tr>
							<th>Gizlemek istediği:</th>
							
							<td><?php foreach($quiz->gizli as $stil) : ?>

								<?php echo isset($stil) ? ucwords($stil) : ''; ?><br />
								<?php endforeach ?>
							</td>
							
						</tr>

						@endif
						@if(isset($quiz->stil))
						<tr>
							<th>Stil:</th>
							
							<td><?php foreach($quiz->stil as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
							
						</tr>
						@endif
						@if(isset($quiz->stil))
						<tr>
							<th>Renk Grubu:</th>
							
							<td><?php foreach($quiz->renk_group as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
							
						</tr>
						@endif
						@if(isset($quiz->bussiness_stil))
						<tr>
							<th>Bussiness Stil:</th>
							
							<td><?php foreach($quiz->bussiness_stil as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
							

						</tr>
						@endif
						@if(isset($quiz->renk_group))
						<tr>
							<th>Renk Grubu:</th>
							<td><?php foreach($quiz->renk_group as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->desen))
						<tr>
							<th>Tercih Edilmeyen Desenler:</th>
							<td><?php foreach($quiz->desen as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->renk))
						<tr>
							<th>Tercih Edilmeyen Renkler:</th>
							<td><?php foreach($quiz->renk as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->tshirt))
						<tr>
							<th>Tişört Tipi:</th>
							<td><?php foreach($quiz->tshirt as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->pantolon))
						<tr>
							<th>Pantolon Tipi:</th>
							<td><?php foreach($quiz->pantolon as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/pantolon/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->etek))
						<tr>
							<th>Etek Tipi:</th>
							<td><?php foreach($quiz->etek as $stil) : ?>
							<div style="float:left; text-align:center">
								<img style="width: 120px;" src="/images/<?php echo $folder . '/etek/' . $stil; ?>.jpg" width="100"/>
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>

							</td>
						</tr>
						@endif
					<?php else: ?>
						<tr>
							<th style="width:30%;">Cinsiyet:</th>
							<td><?php echo isset($quiz->gender) ? $quiz->gender : ''; ?></td>
						</tr>
						<tr>
							<th>Doğum Tarihi:</th>
							<td><?php echo isset($quiz->dob) ? $quiz->dob : ''; ?></td>
						</tr>
						<tr>
							<th>Meslek:</th>
							<td><?php echo isset($quiz->job) ? $quiz->job : ''; ?></td>
						</tr>
						<tr>
							<th>Boy:</th>
							<td><?php echo isset($quiz->boy) ? $quiz->boy : ''; ?></td>
						</tr>
						<tr>
							<th>Kilo:</th>
							<td><?php echo isset($quiz->kilo) ? $quiz->kilo : ''; ?></td>
						</tr>
						<tr>
							<th>Vücut Tipi:</th>
							<?php if($quiz->gender == 'woman'){
								$folder = 'woman';
							} else {
								$folder = 'man';
							} ?>
							<td><img src='/images/<?php echo $folder. "/" . $quiz->vucut; ?>.jpg' />
							<br /><?php echo ucwords($quiz->vucut); ?>
							</td>
						</tr>
						<tr>
							<th>Standart Beden:</th>
							<td><?php echo isset($quiz->standart_beden) ? $quiz->standart_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Üst Beden:</th>
							<td><?php echo isset($quiz->üst_beden) ? $quiz->üst_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Kot Pantolon Bedeni:</th>
							<td><?php echo isset($quiz->kot_beden) ? $quiz->kot_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Alt Beden:</th>
							<td><?php echo isset($quiz->alt_beden) ? $quiz->alt_beden : ''; ?></td>
						</tr>
						<tr>
							<th>Takım Elbise Bedeni:</th>
							<td><?php echo isset($quiz->takim_elbise_bedeni) ? $quiz->takim_elbise_bedeni : ''; ?></td>
						</tr>
						<tr>
							<th>Ayakkabı No:</th>
							<td><?php echo isset($quiz->ayakkabi_no) ? $quiz->ayakkabi_no : ''; ?></td>
						</tr>
						@if(isset($quiz->stil))
						<tr>
							<th>Stil:</th>
							<td><?php foreach($quiz->stil as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?>
								</div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->bussiness_stil))
						<tr>
							<th>Bussiness Stil:</th>
							<td><?php foreach($quiz->bussiness_stil as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?>
								</div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->desen))

						<tr>
							<th>Tercih Edilmeyen Desenler:</th>
							<td><?php foreach($quiz->desen as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?>
								</div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->renk))
						<tr>
							<th>Tercih Edilmeyen Renkler:</th>
							<td><?php foreach($quiz->renk as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?>
								</div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->tshirt))
						<tr>
							<th>Tişört Tipi:</th>
							<td><?php foreach($quiz->tshirt as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?>
								</div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->pantolon))
						<tr>
							<th>Pantolon Tipi:</th>
							<td><?php foreach($quiz->pantolon as $stil) : ?>
							<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/pantolon/' . $stil; ?>.jpg" />
								<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?>
								</div>
								<?php endforeach ?>
							</td>
						</tr>
						@endif
						@if(isset($quiz->gomlek))
						<tr>
							<th>Gömlek Tipi:</th>
							<td><?php foreach($quiz->gomlek as $stil) : ?>
								<div style="float:left; text-align:center">
								<img src="/images/<?php echo $folder . '/' . $stil; ?>.jpg" />
									<br /><?php echo isset($stil) ? ucwords($stil) : ''; ?></div>
								<?php endforeach ?>

							</td>
						</tr>
						@endif
					<?php endif ?>
						<tr>
							<th>Tercihli Sıralama:</th>
							<td>Günlük <?php echo isset($quiz->gunluk) ? $quiz->gunluk : 'Tercih edilmemiş'; ?><br />
							Gece <?php echo isset($quiz->gece) ? $quiz->gece : 'Tercih edilmemiş'; ?><br />
							Ofis <?php echo isset($quiz->ofis) ? $quiz->ofis : 'Tercih edilmemiş'; ?> <br />
							Davet <?php echo isset($quiz->davet) ? $quiz->davet : 'Tercih edilmemiş'; ?> 
							</td>
						</tr>
						<tr>
							<th>Facebook:</th>
							<td><?php echo $quiz->facebook; ?>
							</td>
						</tr>
						<tr>
							<th>Instagram:</th>
							<td><?php echo $quiz->instagram; ?>
							</td>
						</tr>
						<tr>
							<th>Telefon:</th>
							<td><?php echo $quiz->telefon; ?>
							</td>
						</tr>
						<tr>
							<th>Mail:</th>
							<td><?php echo isset($quiz->email) ? $quiz->email : ''; ?>
							</td>
						</tr>

						<tr>
							<th>İletmek İstediği özel mesaj:</th>
							<td><?php echo isset($quiz->ekbilgi) ? $quiz->ekbilgi : ''; ?>
							</td>
						</tr>
					

						</tbody>
					</table>

				</div>
			</div>
		</div>
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    

    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
@endsection 