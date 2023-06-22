<?php declare(strict_types=1);
namespace App\Model\Entity; use Cake\ORM\Entity;
class Users extends Entity {
// ici les variables sont déclaré en accessibles
protected $_accessible = [ 'email' => true, 'username' => true, 'password' => true, 'produits' => true,];
/* ici la variable est définit en hidden
** ce qui signifie qu'elle est pas accessible
** directement dans le code */
protected $_hidden = ['password', ];
}