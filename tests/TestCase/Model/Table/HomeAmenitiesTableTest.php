<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeAmenitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeAmenitiesTable Test Case
 */
class HomeAmenitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeAmenitiesTable
     */
    public $HomeAmenities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.home_amenities',
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
        'app.home_cuisines',
        'app.home_features',
        'app.home_images',
        'app.home_members',
        'app.amenities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HomeAmenities') ? [] : ['className' => 'App\Model\Table\HomeAmenitiesTable'];
        $this->HomeAmenities = TableRegistry::get('HomeAmenities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomeAmenities);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
