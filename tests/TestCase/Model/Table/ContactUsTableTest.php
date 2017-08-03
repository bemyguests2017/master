<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactUsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactUsTable Test Case
 */
class ContactUsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactUsTable
     */
    public $ContactUs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contact_us'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContactUs') ? [] : ['className' => 'App\Model\Table\ContactUsTable'];
        $this->ContactUs = TableRegistry::get('ContactUs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactUs);

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
