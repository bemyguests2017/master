<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Guest Entity
 *
 * @property int $id
 * @property string $title
 * @property string $fname
 * @property int $mname
 * @property int $lname
 * @property int $username
 * @property int $email
 * @property string $passoword
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\BlacklistHome[] $blacklist_homes
 * @property \App\Model\Entity\GuestProfile[] $guest_profiles
 * @property \App\Model\Entity\HomeRating[] $home_ratings
 * @property \App\Model\Entity\HomeReview[] $home_reviews
 * @property \App\Model\Entity\LoginLog[] $login_logs
 */
class Guest extends Entity
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
