<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UserProfilesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UserProfilesController Test Case
 */
class UserProfilesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_profiles',
        'app.guests',
        'app.blacklist_homes',
        'app.homes',
        'app.home_owners',
        'app.home_owner_profiles',
        'app.login_logs',
        'app.countries',
        'app.states',
        'app.cities',
        'app.home_amenities',
        'app.amenities',
        'app.home_cuisines',
        'app.home_features',
        'app.features',
        'app.home_images',
        'app.home_members',
        'app.home_ratings',
        'app.home_reviews',
        'app.guest_profiles'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
