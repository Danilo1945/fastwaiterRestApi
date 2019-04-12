<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallePedidoFixture
 */
class DetallePedidoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'detalle_pedido';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cantidad_pediso' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_unitario' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'valor_total' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'iva' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'menu_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'mesa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pedido_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'mesa_id' => ['type' => 'index', 'columns' => ['mesa_id'], 'length' => []],
            'menu_id' => ['type' => 'index', 'columns' => ['menu_id'], 'length' => []],
            'pedido_id' => ['type' => 'index', 'columns' => ['pedido_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'detalle_pedido_ibfk_1' => ['type' => 'foreign', 'columns' => ['mesa_id'], 'references' => ['mesa', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'detalle_pedido_ibfk_2' => ['type' => 'foreign', 'columns' => ['menu_id'], 'references' => ['menu', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'detalle_pedido_ibfk_3' => ['type' => 'foreign', 'columns' => ['pedido_id'], 'references' => ['pedido', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'cantidad_pediso' => 1,
                'valor_unitario' => 1,
                'valor_total' => 1,
                'iva' => 1,
                'menu_id' => 1,
                'mesa_id' => 1,
                'pedido_id' => 1
            ],
        ];
        parent::init();
    }
}
