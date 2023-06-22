<?php
namespace App\Controller;
class HomeController extends AppController {
    public function index() {
        $this->viewBuilder()->setLayout("myLayout");
        $test = "test";
        $bob = "bob";
        $add = 1 + 2;
        $str = NULL;
        $empty_tab = [];
        $notempty_tab = [1, 2, 3];
        $this->set(compact('test'));
        $this->set(compact('bob'));
        $this->set(compact('add'));
        $this->set(compact('str'));
        $this->set(compact('empty_tab'));
        $this->set(compact('notempty_tab'));

    }
    public function page2() {
        $this->viewBuilder()->setLayout("myLayout");
    }
}
?>