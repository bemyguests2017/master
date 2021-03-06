<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HomeFeature Entity
 *
 * @property int $id
 * @property int $home_id
 * @property int $feature_id
 *
 * @property \App\Model\Entity\Home $home
 * @property \App\Model\Entity\Feature $feature
 */
class HomeFeature extends Entity
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
        '*' => true,
        'id' => false
    ];
}
