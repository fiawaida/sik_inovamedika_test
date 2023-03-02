<section id="main-content">
	<section class="wrapper">
		<section class="panel">
			<header class="panel-heading">
				Tambah User
				<span class="tools pull-right">
					<a class="fa fa-chevron-down" href="javascript:;"></a>
					<a class="fa fa-cog" href="javascript:;"></a>
				</span>
			</header><?php
						/* @var $this UsersController */
						/* @var $model Users */

						$this->breadcrumbs = array(
							'Users' => array('index'),
							'Create',
						);

						$this->menu = array(
							array('label' => 'List Users', 'url' => array('index')),
							array('label' => 'Manage Users', 'url' => array('admin')),
						);
						?>
			<?php $this->renderPartial('_form', array('model' => $model)); ?>
		</section>
	</section>
</section>