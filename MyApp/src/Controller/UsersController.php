<?php 
    declare(strict_types=1);

    namespace App\Controller;

    class UsersController extends AppController {
    public function index() {
        $users = $this->paginate($this->Users);
        $this->set(compact('users')); }
    public function view($id = null) {
        $users = $this->Users->get($id, [ 'contain' => ['Produits'],]);
        $this->set(compact('users')); 
    }
    public function add() {
        $users = $this->Users->newEmptyEntity();
        $this->set(compact('users')); // faire des requêtes pour créer un user $this->set(compact('users'));
    }
    public function edit($id = null) {
        if ($this->request->is(['patch', 'post', 'put'])) { 
            $this->set(compact('users'));// faire des requêtes pour modifier un user $this->set(compact('users'));
        }
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        return $this->redirect(['action' => 'index']); // faire des requêtes pour deletes des users return $this->redirect(['action' => 'index']);
    } 
}