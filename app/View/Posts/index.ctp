
<h1>Blog posts</h1>
<p>
    <?php 
        if ($user === "admin" || $user === "author") :
                echo $this->Html->link("Add Post", array('action' => 'add')); 
            else:
                echo"<th>Only admin and authors can add post</th>";
            endif
        
    ?>
</p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <?php
            if ($user === "admin") :
                echo "<th>Action</th>";
            else:
                echo"<th>Only admin can edit</th>";
            endif
        ?>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                if ($user === "admin"):
                    echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $post['Post']['id']),
                        array('confirm' => 'Are you sure?')
                    );

                    echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id'])
                );
                endif
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>