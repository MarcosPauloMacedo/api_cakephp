<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfessoresFixture
 */
class ProfessoresFixture extends TestFixture
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
                'idFuncionario' => 1,
                'titulacao' => 'f2570822-5c48-47f3-b515-5592cc93d3d5',
            ],
        ];
        parent::init();
    }
}
