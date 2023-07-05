<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DemaisFuncionariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DemaisFuncionariosTable Test Case
 */
class DemaisFuncionariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DemaisFuncionariosTable
     */
    protected $DemaisFuncionarios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DemaisFuncionarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DemaisFuncionarios') ? [] : ['className' => DemaisFuncionariosTable::class];
        $this->DemaisFuncionarios = $this->getTableLocator()->get('DemaisFuncionarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DemaisFuncionarios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DemaisFuncionariosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
