<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisciplinasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisciplinasTable Test Case
 */
class DisciplinasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DisciplinasTable
     */
    protected $Disciplinas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Disciplinas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Disciplinas') ? [] : ['className' => DisciplinasTable::class];
        $this->Disciplinas = $this->getTableLocator()->get('Disciplinas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Disciplinas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DisciplinasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
