<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chatroom Entity
 *
 * @property int $id
 * @property string $chatlog
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property int $company_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 */
class Chatroom extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'chatlog' => true,
        'description' => true,
        'created' => true,
        'company_id' => true,
        'user_id' => true,
        'company' => true,
        'user' => true
    ];
}
