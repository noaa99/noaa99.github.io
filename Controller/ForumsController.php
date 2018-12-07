<?php
class ForumsController extends AppController {

	function index ($arg) {
        $this->layout = 'bootstrap';
        $this->set('title_for_layout','Cakephp Project Main');
        $this->set('arg', $arg);
    }
}
?>