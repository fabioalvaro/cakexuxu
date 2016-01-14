<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CliforsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CliforsTable Test Case
 */
class CliforsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.clifors',
        'app.kardexs',
        'app.tiposmovimentos',
        'app.kardex',
        'app.produtos',
        'app.departamentos',
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
        $config = TableRegistry::exists('Clifors') ? [] : ['className' => 'App\Model\Table\CliforsTable'];
        $this->Clifors = TableRegistry::get('Clifors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clifors);

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
