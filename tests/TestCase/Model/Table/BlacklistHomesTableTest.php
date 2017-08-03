<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlacklistHomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlacklistHomesTable Test Case
 */
class BlacklistHomesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BlacklistHomesTable
     */
    public $BlacklistHomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.blacklist_homes',
        'app.homes',
        'app.guests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BlacklistHomes') ? [] : ['className' => 'App\Model\Table\BlacklistHomesTable'];
        $this->BlacklistHomes = TableRegistry::get('BlacklistHomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlacklistHomes);

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
