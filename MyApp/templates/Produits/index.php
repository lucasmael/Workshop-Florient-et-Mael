<h1>Produits</h1> <table>
<tr>
<th>En vente</th>
</tr>
<?php foreach ($produits as $produit): ?>
<tr> <td>
<?= $this->Html->link("voir " . $produit->nom . ".", ["controller" => "produits", "action" => "view"]) ?> </td>
</tr>
<?php endforeach ?>
</table>