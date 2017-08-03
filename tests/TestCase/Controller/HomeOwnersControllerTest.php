<?php
namespace App\Test\TestCase\Controller;

use App\Controller\HomeOwnersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\HomeOwnersController Test Case
 */
class HomeOwnersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.home_owners',
        'app.home_owner_profiles',
        'app.homes',
        'app.countries',
        'app.states',
        'app.cities',
        'app.blacklist_homes',
        'app.guests',
        'app.guest_profiles',
        'app.home_ratings',
        'app.home_reviews',
        'app.login_logs',
        'app.home_amenities',
        'app.home_cuisines',
        'app.home_features',
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
