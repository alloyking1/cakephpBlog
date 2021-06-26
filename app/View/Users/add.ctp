<!-- app/View/Users/add.ctp -->

<div class="container m-4">
    <div class="jumbotron">
    <h1>Add User</h1>
    <p>You can add a new user using the form below</p>
    </div>

    <div class="card">
    
    
        <div class="users form">
            <?php echo $this->Form->create('User'); ?>
                <fieldset>
                    <legend><?php echo __('Add User'); ?></legend>
                    
                        <div class="form-group">
                            <?php echo $this->Form->input(('username'),['class' => 'form-control'] ); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input(('password'),['class' => 'form-control'] ); ?>
                        </div>
                        <div class="form-group">
                            <?php
                                if (AuthComponent::user('id')): 
                                    echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author', 'reader' => 'Reader')),['class' => 'form-control']);
                                else:
                                    echo $this->Form->input('role', array('options' => array('author' => 'Author', 'reader' => 'Reader')),['class' => 'form-control']);
                                endif
                            ?>
                        </div>
                        
                    
                </fieldset>
            <?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg btn-block']); ?>
        </div>
    </div>
</div>