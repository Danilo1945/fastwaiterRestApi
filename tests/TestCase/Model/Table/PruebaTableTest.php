<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PruebaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PruebaTable Test Case
 */
class PruebaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PruebaTable
     */
    public $Prueba;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Prueba'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Prueba') ? [] : ['className' => PruebaTable::class];
        $this->Prueba = TableRegistry::getTableLocator()->get('Prueba', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prueba);

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
