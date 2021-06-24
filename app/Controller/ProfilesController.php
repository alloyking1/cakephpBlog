<?php

class ProfilesController extends AppController {

    var $uses = array('Post');

    public function index(){

        $data = array(
            'profiles' => $this->Auth->user('username'),
            'posts' => $this->Post->find('count', array(
                'conditions' => array('Post.user_id' => $this->Auth->user('id') )
            ))
        );
        $this->set($data);
    }
}