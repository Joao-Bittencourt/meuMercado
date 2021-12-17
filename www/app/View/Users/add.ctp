<?php ?>
<div class="panel panel-default">
    <div class="panel-heading">
        Add User
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
    		<?php echo $this->Form->create('User'); ?>
                <div class="form-group">
                    <?php  echo $this->Form->input('name',array('label'=>'Name','type' => 'text','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php  echo $this->Form->input('email',array('label'=>'Email','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php  echo $this->Form->input('password',array('type'=>'password','label'=>'password','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php  echo $this->Form->input('group_id', array('label'=> 'grupo','class'=>'form-control', 'empty' => ' selecione ', 'options' => ['1' => 'Administrador', '2' => 'usuario'])); ?>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit Button</button>
                <button type="reset" class="btn btn-success">Reset Button</button>
    			<?php echo $this->Form->end(); ?> 
            </div>
        </div>
    </div>
</div>