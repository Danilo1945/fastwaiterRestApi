<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MesaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MesaTable Test Case
 */
class MesaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MesaTable
     */
    public $Mesa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mesa',
        'app.DetallePedido'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mesa') ? [] : ['className' => MesaTable::class];
        $this->Mesa = TableRegistry::getTableLocator()->get('Mesa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mesa);

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
