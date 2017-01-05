<?php
namespace Etif\FrontBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Etif\FrontBundle\Entity\Empresa;

class LoadEmpresaData extends AbstractFixture implements OrderedFixtureInterface{
	const MAX_NB_EMPRESAS = 5;
	public function load(ObjectManager $manager){
		$faker = \Faker\Factory::create();
		
		for ($j=0; $j < self::MAX_NB_EMPRESAS; ++$j) { 
			$empresa = new Empresa();
			$empresa->setRazonSocial($faker->company);
			$empresa->setCif($faker->randomNumber($nbDigits = 8).strtoupper($faker->randomLetter));
			$empresa->setDireccion($faker->address);
			$empresa->setLocalidad($faker->city);
			$empresa->setCp($faker->postcode);
			$empresa->setEmail($faker->companyEmail);
			$empresa->setResponsable($faker->name);
			$empresa->setSector($faker->words(1, true));
			$empresa->setNumTrabajadores($faker->biasedNumberBetween(1, 5));
			$this->addReference('empresa'.$j, $empresa);

			$manager->persist($empresa);
		}
		$manager->flush();
	}
	public function getOrder(){
		return 1;
	}
}