<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Редактирование пользователя</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главная</a></li>
					<li class="breadcrumb-item"><a href="<?=ADMIN;?>/user">Список пользователей</a></li>
					<li class="breadcrumb-item active">Редактирование пользователя</li>
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
					<form action="<?=ADMIN;?>/user/edit" method="post" data-toggle="validator">
						<div class="card-body">
							<div class="form-group has-feedback">
								<label for="login">Логин</label>
								<input type="text" class="form-control" name="login" id="login" value="<?=h($user->login);?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							</div>
                            <div class="form-group has-feedback">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль, если хотите его изменить">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?=h($user->name);?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?=h($user->email);?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="address">Адрес</label>
                                <input type="text" class="form-control" name="address" id="address" value="<?=h($user->address);?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label>Роль</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="user"<?php if ($user->role == 'user') echo ' selected';?>>Пользователь</option>
                                    <option value="admin"<?php if ($user->role == 'admin') echo ' selected';?>>Администратор</option>
                                </select>
                            </div>
						</div>
                        <div class="card-footer">
                            <input type="hidden" name="id" value="<?=$user->id;?>">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
					</form>
				</div>
                <h3>Заказы пользователя</h3>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->