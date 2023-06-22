<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;
use App\Controller\HomeController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

class HomeControllerTest extends TestCase
{
    use IntegrationTestTrait;
    public function testIndex() {
        $this->get('/home/index');

        $this->assertResponseOk();
        $this->assertEquals('test', $this->viewVariable('test'));
        $this->assertEquals('bob', $this->viewVariable('bob'));
        $this->assertEquals('3', $this->viewVariable('add'));
        $this->assertEmpty($this->viewVariable('str'));
        $this->assertNotEmpty($this->viewVariable('test'));
        $this->assertEmpty($this->viewVariable('empty_tab'));
        $this->assertNotEmpty($this->viewVariable('notempty_tab'));
    }
    public function testSwapNumbers()
    {
        $number1 = 10;
        $number2 = 20;

        $tmp = $number1;
        $number1 = $number2;
        $number2 = $tmp;

        $this->assertEquals(20, $number1);
        $this->assertEquals(10, $number2);
    }
}