<?php
namespace App\Test\TestCase\Controller;

use App\Controller\HomeCuisinesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\HomeCuisinesController Test Case
 */
class HomeCuisinesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.home_cuisines',
        'app.cuisine_categories',
        'app.homes',
        'app.home_owners',
        'app.home_owner_profiles',
        'app.login_logs',
        'app.countries',
        'app.states',
        'app.cities',
        'app.blacklist_homes',
        'app.guests',
        'app.guest_profiles',
        'app.home_ratings',
        'app.home_reviews',
        'app.home_amenities',
        'app.amenities',
        'app.home_features',
        'app.features',
        'app.home_images',
        'app.home_members'
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
