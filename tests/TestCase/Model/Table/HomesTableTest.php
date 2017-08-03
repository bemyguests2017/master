<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomesTable Test Case
 */
class HomesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HomesTable
     */
    public $Homes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.homes',
        'app.home_owners',
        'app.countries',
        'app.states',
        'app.cities',
        'app.home_owner_profiles',
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
        $config = TableRegistry::exists('Homes') ? [] : ['className' => 'App\Model\Table\HomesTable'];
        $this->Homes = TableRegistry::get('Homes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Homes);

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
