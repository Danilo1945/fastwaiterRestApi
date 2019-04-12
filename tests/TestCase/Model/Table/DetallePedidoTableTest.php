<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallePedidoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallePedidoTable Test Case
 */
class DetallePedidoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallePedidoTable
     */
    public $DetallePedido;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DetallePedido',
        'app.Menu',
        'app.Mesa',
        'app.Pedido'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DetallePedido') ? [] : ['className' => DetallePedidoTable::class];
        $this->DetallePedido = TableRegistry::getTableLocator()->get('DetallePedido', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetallePedido);

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
