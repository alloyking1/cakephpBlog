
<div class="container">
    <div class="jumbotron">
    <h1>Login</h1>
    <p>You need to login to continue</p>
    </div>

    <div class="card shadow-lg p-3 mb-5 bg-white rounded">

        <div class="users form">
        <?php echo $this->Flash->render('auth'); ?>
        <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <legend>
                    <?php echo __('Please enter your username and password'); ?>
                </legend>
                <div class="form-group">
                    <?php echo $this->Form->input(('username'),['class' => 'form-control'] ); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input(('password'),['class' => 'form-control'] ); ?>
                </div>
            </fieldset>
        <?php echo $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-lg btn-block']); ?>
        </div>
    </div>

</div>