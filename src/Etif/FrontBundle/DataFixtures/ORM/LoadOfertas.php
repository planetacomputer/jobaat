<?php
namespace Etif\FrontBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Etif\FrontBundle\Entity\Oferta;
use Etif\FrontBundle\Entity\Empresa;

class LoadOfertaData extends AbstractFixture implements OrderedFixtureInterface{
	const MAX_NB_OFERTA_POR_EMPRESA = 2;
	public function load(ObjectManager $manager){
		$faker = \Faker\Factory::create();
		
		for ($j=0; $j < LoadEmpresaData::MAX_NB_EMPRESAS; ++$j) { 
			for ($i=0; $i < self::MAX_NB_OFERTA_POR_EMPRESA; ++$i) { 
				$oferta = new Oferta();
				$oferta->setTitulo($faker->jobTitle);
				$oferta->setDescripcion($faker->sentence(50, true));
				$oferta->setNumPlazas($faker->randomDigitNotNull);
				$oferta->setSalario($faker->numberBetween(12000, 25000));
				$oferta->setHorario($faker->numberBetween(0, 4));
				$oferta->setEmpresa($this->getReference('empresa'.rand(0,LoadEmpresaData::MAX_NB_EMPRESAS-1)));
				$manager->persist($oferta);
			}

		}
		$manager->flush();
	}
	public function getOrder(){
		return 2;
	}
}