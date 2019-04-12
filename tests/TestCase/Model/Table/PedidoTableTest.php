<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidoTable Test Case
 */
class PedidoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidoTable
     */
    public $Pedido;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pedido',
        'app.Usuario',
        'app.Calificacion',
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
        $config = TableRegistry::getTableLocator()->exists('Pedido') ? [] : ['className' => PedidoTable::class];
        $this->Pedido = TableRegistry::getTableLocator()->get('Pedido', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pedido);

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
