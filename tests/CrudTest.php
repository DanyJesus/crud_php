<?php

require_once __DIR__ . '/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use CRUD\Crud;


/**
 * Vamos testar as funções da classe Crud.
 */
final class CrudTest extends TestCase
{


    public function testInsert(): void
    {
        $id = $this->insert();

        $this->assertIsInt($id);
    }


    public function testUpdate(): void
    {
        $crud = new Crud();

        $id = $this->insert();

        $up = $crud->update($id, ['symbol' => 'HH']);

        $this->assertEquals($up, true);
    }

    public function testDelete(): void
    {
        $crud = new Crud();

        $id = $this->insert();

        $del = $crud->delete($id);

        $this->assertEquals($del, true);
    }

    public function testList(): void
    {
        $crud = new Crud();

        $list = $crud->listAll();

        $this->assertNotEmpty($list);
    }

    public function testListOne(): void
    {
        $crud = new Crud();

        $id = $this->insert();

        $list = $crud->listOne($id);

        $this->assertCount(1, $list);
    }

    private function insert()
    {
        $crud = new Crud();
        return $crud->insert(
            'Hydrogen',
            'H',
            1,
            1
        );
    }
}
