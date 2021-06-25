
<h1>Hellow <b><?php echo $username ?></b> your role is: <b><?php echo $role ?></b></h1>

<!-- admin features -->
<?php if ( $role === "admin"):  ?>

<h2>You can do the following</h2>
<ul>
    <li>
        <?php
            echo $this->Html->link(
                "Add New Users",
                array('action' => 'add')
            );
        ?>
    </li>
    <li>
        <?php
            echo $this->Html->link(
                "Create a new post",
                array('controller' => 'Posts', 'action' => 'add')
            );
        ?>
    </li>
</ul>
<br>
<h2>All users table</h2>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

    <?php foreach ($allusers as $user): ?>
        <tr>
            <td><?php echo $user['User']['id']; ?></td>
            <td>
                <?php echo $user['User']['username']; ?>
            </td>
            <td>
                <?php 
                    echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']),array('confirm' => 'Are you sure?'));
                ?>
                <?php 
                    echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']));
                ?>
            </td>
            <td>
                <?php echo $user['User']['created']; ?>
            </td>
            
        </tr>
    <?php endforeach; ?>
</table>
<?php endif ?>

<!-- author features -->
<?php if ($role === "author"): ?>
    <h2>You can do the following</h2>
    <ul>
        <li>
            <?php
                echo $this->Html->link(
                    "Create a new post",
                    array('controller' => 'Posts', 'action' => 'add')
                );
            ?>
        </li>
    </ul>


    <h2>Your post</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Action</th>
            <th>Created</th>
        </tr>
        
        <?php foreach($userPosts as $post): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td>
                    <?php
                        echo $this->Html->link(
                            $post['Post']['title'],
                            array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])
                        );
                    ?>
                </td>
                <td>
                    <?php
                        echo $this->Form->postLink(
                            'Delete',
                            array('controller' => 'posts', 'action' => 'delete', $post['Post']['id']),
                            array('confirm' => 'Are you sure?')
                        );
                    ?>
                    <?php
                        echo $this->Html->link(
                            'Edit',
                            array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])
                        );
                    ?>
                </td>
                <td>
                    <?php echo $post['Post']['created']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        
    </table>
<?php endif ?>

<!-- reader features -->
<?php if ($role === "reader"): ?>
    <h2>You can do the following</h2>
    <ul>
        <li>
            <?php
                echo $this->Html->link(
                    "only read post",
                    array('controller' => 'Posts', 'action' => 'index')
                );
            ?>
        </li>
    </ul>
<?php endif ?>