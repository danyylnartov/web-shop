<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Новый товар</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главная</a></li>
					<li class="breadcrumb-item"><a href="<?=ADMIN;?>/product">Список товаров</a></li>
					<li class="breadcrumb-item active">Новый товар</li>
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
					<form action="<?=ADMIN;?>/product/add" method="post" role="form" data-toggle="validator">
						<div class="card-body">

							<div class="form-group has-feedback">
								<label for="title">Наименование товара</label>
								<input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : null; ?>" required>
								<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							</div>

							<div class="form-group">
								<label for="category_id">Родительская категория</label>
								<?php new \app\widgets\menu\Menu([
									'tpl' => WWW . '/menu/select.php',
									'container' => 'select',
									'cache' => 0,
									'cacheKey' => 'admin_select',
									'class' => 'form-control',
									'attrs' => [
										'name' => 'category_id',
										'id' => 'category_id',
									],
									'prepend' => '<option>Выберите категорию</option>'
								]); ?>
							</div>

							<div class="form-group">
								<label for="keywords">Ключевые слова</label>
								<input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?php isset($_SESSION['form_data']['keywords']) ? h($_SESSION['form_data']['keywords']) : null; ?>">
							</div>

							<div class="form-group">
								<label for="description">Описание</label>
								<input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?php isset($_SESSION['form_data']['description']) ? h($_SESSION['form_data']['description']) : null; ?>">
							</div>

                            <div class="form-group has-feedback">
                                <label for="price">Цена</label>
                                <input type="text" name="price" class="form-control" id="description" placeholder="Цена" pattern="^[0-9.]{1,}$" value="<?php isset($_SESSION['form_data']['price']) ? h($_SESSION['form_data']['price']) : null; ?>" required data-error="Допускаются цифры и десятичная точка">
                                <div class="help-block with-errors text-danger"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="old_price">Цена</label>
                                <input type="text" name="old_price" class="form-control" id="description" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value="<?php isset($_SESSION['form_data']['old_price']) ? h($_SESSION['form_data']['old_price']) : null; ?>" data-error="Допускаются цифры и десятичная точка">
                                <div class="help-block with-errors  text-danger "></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="content">Контент</label>
                                <textarea name="content" id="editor1" cols="80" rows="10"><?php isset($_SESSION['form_data']['old_price']) ? $_SESSION['form_data']['old_price'] : null; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="status" checked> Статус
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="hit"> Хит
                                </label>
                            </div>

						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-success">Добавить</button>
						</div>
					</form>
                    <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
				</div>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->