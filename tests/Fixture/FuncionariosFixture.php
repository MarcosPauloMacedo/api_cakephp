<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionariosFixture
 */
class FuncionariosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'ctps' => 'Lorem ipsum dolor sit amet',
                'cpf' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'idEndereco' => 1,
            ],
        ];
        parent::init();
    }
}
