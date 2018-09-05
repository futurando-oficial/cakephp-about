<?php
namespace About\Test\TestCase\Model\Table;

use About\Model\Table\AboutTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * About\Model\Table\AboutTable Test Case
 */
class AboutTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \About\Model\Table\AboutTable
     */
    public $About;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.about.about'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('About') ? [] : ['className' => AboutTable::class];
        $this->About = TableRegistry::getTableLocator()->get('About', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->About);

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
