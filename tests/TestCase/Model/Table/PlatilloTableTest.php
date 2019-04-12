<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlatilloTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlatilloTable Test Case
 */
class PlatilloTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlatilloTable
     */
    public $Platillo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Platillo',
        'app.Menu'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Platillo') ? [] : ['className' => PlatilloTable::class];
        $this->Platillo = TableRegistry::getTableLocator()->get('Platillo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Platillo);

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
