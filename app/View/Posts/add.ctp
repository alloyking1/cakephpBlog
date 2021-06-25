<!-- File: /app/View/Posts/add.ctp -->

<div class="container">

    <div class="jumbotron">
    <h1>Add Post</h1>
    <p>Enter your post below</p>
    </div>

    <fieldset>
        <legend>
            <?php
                echo $this->Form->create('Post'); 
                echo __('Enter the content of your post below');
            ?>
        </legend>
        <div class="form-group">
            <?php echo $this->Form->input(('title'),['class' => 'form-control'] ); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input(('body'), ['class' => 'form-control','rows' => '3'] ); ?>
        </div>
        <?php echo $this->Form->button(__('Save Post'), ['class' => 'btn btn-primary btn-lg btn-block']); ?>
    </fieldset>
</div>
