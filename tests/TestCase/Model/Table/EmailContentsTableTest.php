<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailContentsTable Test Case
 */
class EmailContentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailContentsTable
     */
    public $EmailContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.email_contents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmailContents') ? [] : ['className' => 'App\Model\Table\EmailContentsTable'];
        $this->EmailContents = TableRegistry::get('EmailContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmailContents);

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
