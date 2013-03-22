<?php
namespace SON;


class SONTest extends \PHPUnit_Framework_TestCase 
{

    public function test_verifica_se_classe_existe()
    {
        if(!class_exists('\SON\SON'))
			$this->markTestSkipped('Classe SON inexistente');
	}

	public function test_verifica_se_chamada_retorna_1()
	{
		$classe = new SON;
		$this->assertEquals(1,$classe->chamada());

	}
}