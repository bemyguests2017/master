<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FoundersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FoundersTable Test Case
 */
class FoundersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FoundersTable
     */
    public $Founders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.founders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Founders') ? [] : ['className' => 'App\Model\Table\FoundersTable'];
        $this->Founders = TableRegistry::get('Founders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Founders);

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
}
