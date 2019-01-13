<?php $image = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent?access_token=4565364824.1677ed0.6213dba74a614784997d620a2e7a8879')); ?>

<div class="section-block pt-0 pb-0 feature-column-group insta-column">
	<div class="row full-width collapse boxes">
		<div class="column width-4">
			<div class="row">
				<div class="column width-6">
					<a href="<?php echo e($image->data[0]->link); ?>" class="img" style="background-image:url(<?php echo e($image->data[0]->images->low_resolution->url); ?>)" target="_blank" alt="Packsion"></a>
				</div>
				<div class="column width-6">
					<a href="<?php echo e($image->data[1]->link); ?>" class="img" style="background-image:url(<?php echo e($image->data[1]->images->low_resolution->url); ?>)" target="_blank" alt="Packsion"></a>
				</div>
			</div>
		</div>
		<div class="column width-4">
			<div class="feature-column large center full-width">
				<span class="icon-instagram xlarge"></span>
				<h4>FOLLOW US</h4>
				<h3>
					<strong><a href="https://www.instagram.com/packsioncom/" class="link" target="_blank">@packsioncom</a></strong>
				</h3>
			</div>
		</div>
		<div class="column width-4">
			<div class="row">
				<div class="column width-6">
					<a href="<?php echo e($image->data[2]->link); ?>" class="img" style="background-image:url(<?php echo e($image->data[2]->images->low_resolution->url); ?>)" target="_blank" alt="Packsion"></a>
				</div>
				<div class="column width-6">
					<a href="<?php echo e($image->data[3]->link); ?>" class="img" style="background-image:url(<?php echo e($image->data[3]->images->low_resolution->url); ?>)" target="_blank" alt="Packsion"></a>
				</div>
			</div>
		</div>
	</div>
</div>
