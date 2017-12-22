<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property float $total
 * @property string $method
 * @property \Cake\I18n\FrozenTime $created
 * @property string $description
 * @property int $producer_id
 * @property int $service_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Producer $producer
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\User $user
 */
class Payment extends Entity
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
        'total' => true,
        'method' => true,
        'created' => true,
        'description' => true,
        'producer_id' => true,
        'service_id' => true,
        'user_id' => true,
        'producer' => true,
        'service' => true,
        'user' => true
    ];
}
