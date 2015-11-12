<?php
	use Scienceguard\SG_Util;
	use Scienceguard\SG_Form;

	$attr = array(
		'class' => 'form-control'
	);
?>
<div class="row">
	<div class="col-sm-3 col-sm-offset-2">
		<form method="post" action="<?php echo url('admin/cache') ?>">
			<div class="form-group">
				<label><?php echo trans('label.cache_key') ?></label>
				<?php echo SG_Form::field('text', 'cache_key', '', $attr) ?>
			</div>
			<div class="form-group">
				<button class="btn btn-block btn-default"><?php echo trans('label.btn_submit') ?></button>
			</div>
		</form>
	</div>
	<!-- col -->

	<div class="col-sm-3 col-sm-offset-2">
		<form method="post" action="<?php echo url('admin/cache') ?>">
			<div class="form-group">
				<label><?php echo trans('label.flush_cache') ?></label>
				<?php 
					$custom_attr = $attr;
					$custom_attr['readonly'] = 'readonly';
				?>
				<?php echo SG_Form::field('text', 'cache_key', 'ALL', $custom_attr) ?>
			</div>
			<div class="form-group">
				<button class="btn btn-block btn-danger"><?php echo trans('label.btn_submit') ?></button>
			</div>
		</form>
	</div>
	<!-- col -->
</div>
<!-- row -->