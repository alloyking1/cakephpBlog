<!-- app/View/Users/add.ctp -->

<div class="container m-4">
    <div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>

    <div class="users form">
    <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend><?php echo __('Add User'); ?></legend>
            <?php 
                echo $this->Form->input(('username'),['class' => 'form-control'] );
                echo $this->Form->input('password');
                echo $this->Form->input('role', array(
                    'options' => array('admin' => 'Admin', 'author' => 'Author', 'reader' => 'Reader')
                ));
            ?>
        </fieldset>
    <?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']); ?>
    </div>


    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>