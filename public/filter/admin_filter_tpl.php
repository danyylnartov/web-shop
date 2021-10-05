<div class="card">
    <div class="card-header d-flex p-0">
        <ul class="nav nav-pills">
			<?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                <li<?php if($i == 1) echo ' class="nav-item active"'; else echo ' class="nav-item"';?>>
                    <a <?php if($i == 1) echo ' class="nav-link active"'; else echo ' class="nav-link"';?> href="#tab_<?= $group_id ?>" data-toggle="tab" aria-expanded="true"><?= $group_item ?></a>
                </li>
				<?php $i++; endforeach; ?>
            <li style="position: absolute; right: 3px;">
                <a href="" id="reset-filter" class="btn btn-danger">Сброс</a>
            </li>
        </ul>
    </div>
	<div class="card-body">
        <div class="tab-content" id="filter">
			<?php if(!empty($this->attrs[$group_id])): ?>
				<?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                    <div class="tab-pane<?php if($i == 1) echo ' active' ?>" id="tab_<?= $group_id ?>">
						<?php foreach($this->attrs[$group_id] as $attr_id => $value): ?>
							<?php
							if(!empty($this->filter) && in_array($attr_id, $this->filter)){
								$checked = ' checked';
							}else{
								$checked = null;
							}
							?>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="attrs[<?= $group_id ?>]" value="<?= $attr_id ?>"<?= $checked ?>> <?= $value ?>
                                </label>
                            </div>
							<?php $i++; endforeach; ?>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
    </div>
</div>