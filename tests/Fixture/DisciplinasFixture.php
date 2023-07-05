<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DisciplinasFixture
 */
class DisciplinasFixture extends TestFixture
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
                'idCurso' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'idProfessor' => 1,
            ],
        ];
        parent::init();
    }
}
