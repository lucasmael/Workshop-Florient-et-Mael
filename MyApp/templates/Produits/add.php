<h1>Nouveau produit</h1>
<?php
echo $this->Form->create($produit);
echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => 1]);
echo $this->Form->control('nom');
echo $this->Form->control('image');
echo $this->Form->control('prix');
echo $this->Form->control('description'); 
echo $this->Form->control('id', ['type' => 'hidden', 'value' => 1]);
echo $this->Form->button("Valider");
echo $this->Form->end();
?>