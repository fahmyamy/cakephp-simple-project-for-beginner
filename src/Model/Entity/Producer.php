<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producer Entity
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string $picture
 * @property \Cake\I18n\FrozenTime $created
 * @property string $description
 * @property int $service_id
 * @property int $company_id
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Payment[] $payments
 */
class Producer extends Entity
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
        'price' => true,
        'picture' => true,
        'created' => true,
        'description' => true,
        'service_id' => true,
        'company_id' => true,
        'service' => true,
        'company' => true,
        'payments' => true
    ];
}
