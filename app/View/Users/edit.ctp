

<div class="container m-4">
    <div class="jumbotron">
    <h1>Edit User</h1>
    <p>You can edt a user using the form below</p>
    </div>

    <div class="users form">


        <div class="users form">
        <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <legend><?php echo __('Edit User'); ?></legend>
                
                    <div class="form-group">
                        <?php echo $this->Form->input(('username'),['class' => 'form-control'] ); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author', 'reader' => 'Reader')),['class' => 'form-control']);
                                echo $this->Form->input('id', array('type' => 'hidden'));
                         ?>
                    </div>
                    
                
            </fieldset>
        <?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg btn-block']); ?>
        </div>

        
    </div>
</div>