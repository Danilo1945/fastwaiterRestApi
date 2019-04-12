<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('calificacion')
            ->addColumn('valor', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('comentario', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('pedido_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'pedido_id',
                ]
            )
            ->create();

        $this->table('detalle_pedido')
            ->addColumn('cantidad_pediso', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('valor_unitario', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('valor_total', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('iva', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('menu_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('mesa_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('pedido_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'menu_id',
                ]
            )
            ->addIndex(
                [
                    'mesa_id',
                ]
            )
            ->addIndex(
                [
                    'pedido_id',
                ]
            )
            ->create();

        $this->table('menu')
            ->addColumn('fecha', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('disponible', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('categoria', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('platillo_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'platillo_id',
                ]
            )
            ->create();

        $this->table('mesa')
            ->addColumn('capacidad_personas', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('numero_mesa', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('detalle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->create();

        $this->table('pedido')
            ->addColumn('estado_pedido', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('fecha_pedido', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('observacion', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('usuario_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'usuario_id',
                ]
            )
            ->create();

        $this->table('platillo')
            ->addColumn('nombre_platillo', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('detalle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('photo', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('photo_dir', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('precio', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('prueba')
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->create();

        $this->table('roles')
            ->addColumn('rol', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('usuario')
            ->addColumn('nombres', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('apellidos', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('telefono', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('roles_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'roles_id',
                ]
            )
            ->create();

        $this->table('calificacion')
            ->addForeignKey(
                'pedido_id',
                'pedido',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('detalle_pedido')
            ->addForeignKey(
                'menu_id',
                'menu',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'mesa_id',
                'mesa',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'pedido_id',
                'pedido',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('menu')
            ->addForeignKey(
                'platillo_id',
                'platillo',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('pedido')
            ->addForeignKey(
                'usuario_id',
                'usuario',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('usuario')
            ->addForeignKey(
                'roles_id',
                'roles',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('calificacion')
            ->dropForeignKey(
                'pedido_id'
            )->save();

        $this->table('detalle_pedido')
            ->dropForeignKey(
                'menu_id'
            )
            ->dropForeignKey(
                'mesa_id'
            )
            ->dropForeignKey(
                'pedido_id'
            )->save();

        $this->table('menu')
            ->dropForeignKey(
                'platillo_id'
            )->save();

        $this->table('pedido')
            ->dropForeignKey(
                'usuario_id'
            )->save();

        $this->table('usuario')
            ->dropForeignKey(
                'roles_id'
            )->save();

        $this->table('calificacion')->drop()->save();
        $this->table('detalle_pedido')->drop()->save();
        $this->table('menu')->drop()->save();
        $this->table('mesa')->drop()->save();
        $this->table('pedido')->drop()->save();
        $this->table('platillo')->drop()->save();
        $this->table('prueba')->drop()->save();
        $this->table('roles')->drop()->save();
        $this->table('usuario')->drop()->save();
    }
}
