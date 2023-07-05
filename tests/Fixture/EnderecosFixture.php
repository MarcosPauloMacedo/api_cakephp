<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecosFixture
 */
class EnderecosFixture extends TestFixture
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
                'cidade' => 'Lorem ipsum dolor sit amet',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'rua' => 'Lorem ipsum dolor sit amet',
                'numero' => 1,
            ],
        ];
        parent::init();
    }
}
