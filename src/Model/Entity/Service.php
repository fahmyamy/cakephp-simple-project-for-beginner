<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property string $name
 * @property string $picture
 * @property string $description
 * @property int $category_id
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\Producer[] $producers
 */
class Service extends Entity
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
        'name' => true,
        'picture' => true,
        'description' => true,
        'category_id' => true,
        'category' => true,
        'payments' => true,
        'producers' => true
    ];
}
