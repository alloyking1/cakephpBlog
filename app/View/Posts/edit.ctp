<!-- File: /app/View/Posts/edit.ctp -->


<div class="container">
    <div class="jumbotron">
        <h1>Edit Post</h1>
        <p>Enter the content of your post below</p>
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
            <?php 
                echo $this->Form->input(('body'), ['class' => 'form-control','rows' => '3'] ); 
                echo $this->Form->input('id', array('type' => 'hidden'));
            ?>
        </div>
        <?php echo $this->Form->button(__('Save Post'), ['class' => 'btn btn-primary btn-lg btn-block']); ?>
    </fieldset>
</div>

