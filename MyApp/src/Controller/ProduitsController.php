<?php
namespace App\Controller;
class ProduitsController extends AppController {
    public function index() {
        $this->loadComponent('Paginator');
        $produits = $this->Paginator->paginate($this->Produits->find()); $this->set(compact('produits'));
    }
    public function add() {
        $produit = $this->Produits->newEmptyEntity(); // a vous de completer $this->set(compact('produit'));
        if ($this->request->is(['post'])) {
            $data = $this->request->getData();
            $produit = $this->Produits->patchEntity($produit, $data);
            if ($this->Produits->save($produit)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('produit'));
    }
}