<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Home Entity
 *
 * @property int $id
 * @property string $name
 * @property int $max_guests
 * @property int $home_owner_id
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property string $pincode
 * @property int $landline
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\HomeOwner $home_owner
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\BlacklistHome[] $blacklist_homes
 * @property \App\Model\Entity\HomeAmenity[] $home_amenities
 * @property \App\Model\Entity\HomeCuisine[] $home_cuisines
 * @property \App\Model\Entity\HomeFeature[] $home_features
 * @property \App\Model\Entity\HomeImage[] $home_images
 * @property \App\Model\Entity\HomeMember[] $home_members
 * @property \App\Model\Entity\HomeRating[] $home_ratings
 * @property \App\Model\Entity\HomeReview[] $home_reviews
 */
class Home extends Entity
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
