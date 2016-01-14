<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartamentosTable Test Case
 */
class DepartamentosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departamentos',
        'app.produtos',
        'app.kardexs',
        'app.tiposmovimentos',
        'app.kardex',
        'app.clifors',
        'app.estoques'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Departamentos') ? [] : ['className' => 'App\Model\Table\DepartamentosTable'];
        $this->Departamentos = TableRegistry::get('Departamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departamentos);

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
