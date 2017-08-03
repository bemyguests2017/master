<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HomeOwner Entity
 *
 * @property int $id
 * @property string $title
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\HomeOwnerProfile[] $home_owner_profiles
 * @property \App\Model\Entity\Home[] $homes
 * @property \App\Model\Entity\LoginLog[] $login_logs
 */
class HomeOwner extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
