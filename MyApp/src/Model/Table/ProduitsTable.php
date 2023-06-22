<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesChecker;  
use Cake\Validation\Validator;

class ProduitsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER',
        ]);
    }

    // public function validationDefault(Validator $validator): Validator
    // {
    //     $validator
    //         ->allowEmptyFile('image')
    //         ->add('image', [
    //             'mimeType' => [
    //                 'rule' => ['mimeType', ['image/jpg', 'image/png', 'image/jpeg']],
    //                 'message' => 'Not allowed.',
    //             ],
    //             'fileSize' => [
    //                 'rule' => ['filesize', '<=', '50MB'],
    //                 'message' => 'The file is too loud.',
    //             ],
    //         ]);

    //     return $validator;
    // }
}