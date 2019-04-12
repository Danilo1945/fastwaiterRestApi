<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalificacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalificacionTable Test Case
 */
class CalificacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalificacionTable
     */
    public $Calificacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Calificacion',
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
        $config = TableRegistry::getTableLocator()->exists('Calificacion') ? [] : ['className' => CalificacionTable::class];
        $this->Calificacion = TableRegistry::getTableLocator()->get('Calificacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Calificacion);

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
