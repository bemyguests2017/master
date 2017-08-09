<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeCuisinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeCuisinesTable Test Case
 */
class HomeCuisinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeCuisinesTable
     */
    public $HomeCuisines;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HomeCuisines') ? [] : ['className' => 'App\Model\Table\HomeCuisinesTable'];
        $this->HomeCuisines = TableRegistry::get('HomeCuisines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomeCuisines);

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
