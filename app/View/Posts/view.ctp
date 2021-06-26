<!-- File: /app/View/Posts/view.ctp -->


<div class="container">

    <h1><?php echo h($post['Post']['title']); ?></h1>
    <hr/>

    <p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
    <p><small>Author: <?php echo $post['User']['username']; ?></small></p>

    <p><?php echo h($post['Post']['body']); ?></p>
</div>