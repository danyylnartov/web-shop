<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Фильтры</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главная</a></li>
					<li class="breadcrumb-item"><a href="<?=ADMIN;?>/filter/attribute-group">Группы фильтров</a></li>
					<li class="breadcrumb-item active">Фильтры</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<a href="<?=ADMIN?>/filter/attribute-add" class="btn btn-primary mb-1"><i class="fas fa-plus"></i>Добавить атрибут</a>
							<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>Наименование</th>
									<th>Группа</th>
									<th>Действие</th>
								</tr>
								</thead>
								<tbody
								<?php foreach ($attrs as $id => $item): ?>
									<tr>
										<td><?=$item['value'];?></td>
										<td><?=$item['title'];?></td>
										<td>
											<a href="<?=ADMIN;?>/filter/attribute-edit?id=<?=$id;?>"><i class="fas fa-pencil-alt" ></i></a>
											<a class="delete text-danger ml-2" href="<?=ADMIN;?>/filter/attribute-delete?id=<?=$id;?>"><i class="fas fa-times text-danger" ></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->