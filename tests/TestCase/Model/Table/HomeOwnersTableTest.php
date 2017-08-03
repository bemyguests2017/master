<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeOwnersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeOwnersTable Test Case
 */
class HomeOwnersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeOwnersTable
     */
    public $HomeOwners;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HomeOwners') ? [] : ['className' => 'App\Model\Table\HomeOwnersTable'];
        $this->HomeOwners = TableRegistry::get('HomeOwners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomeOwners);

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
