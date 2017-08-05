<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeFeaturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeFeaturesTable Test Case
 */
class HomeFeaturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeFeaturesTable
     */
    public $HomeFeatures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.home_features',
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
        'app.home_cuisines',
        'app.home_images',
        'app.home_members',
        'app.features'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HomeFeatures') ? [] : ['className' => 'App\Model\Table\HomeFeaturesTable'];
        $this->HomeFeatures = TableRegistry::get('HomeFeatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomeFeatures);

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
