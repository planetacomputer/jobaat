<?php
namespace Etif\FrontBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Etif\FrontBundle\Entity\Usuario;

class LoadUsuarioData extends AbstractFixture implements OrderedFixtureInterface{
	const MAX_NB_USUARIOS = 10;
	public function load(ObjectManager $manager){
		$faker = \Faker\Factory::create();
		
		for ($j=0; $j < self::MAX_NB_USUARIOS; ++$j) { 
			$usuario = new Usuario();
			$usuario->setNombre($faker->firstName);
			$usuario->setApellido1($faker->lastName);
			$usuario->setApellido2($faker->lastName);
			$usuario->setDni($faker->randomNumber($nbDigits = 8).strtoupper($faker->randomLetter));
			$usuario->setTelefono($faker->e164PhoneNumber);
			$usuario->setCarnetConducir($faker->boolean);
			$usuario->setVehiculoPropio($faker->boolean);
			$usuario->setEmail($faker->email);
			$usuario->setFechaNacimiento($faker->dateTimeBetween('-67 years', 'now'));
			$usuario->setLocalidadNacimiento($faker->city);
			$usuario->setNumSS($faker->randomNumber($nbDigits = 8).strtoupper($faker->randomLetter));
			$usuario->setPirmiAyuda($faker->boolean);
			$usuario->setGradoDiscapacidad($faker->randomNumber(2));
			$usuario->setPerceptorParo($faker->boolean);
			$usuario->setFechaFinParo($faker->dateTimeBetween('now', '+2 years'));
			$usuario->setEstudiosPrim($faker->numberBetween(0, 1));
			$usuario->setEstudiosSec($faker->numberBetween(0, 2));
			$usuario->setEstudiosUniv($faker->jobTitle);
			$usuario->setNivelCatala($faker->numberBetween(0, 2));
			$usuario->setNivelIngles($faker->numberBetween(0, 2));
			$usuario->setNivelFrances($faker->numberBetween(0, 2));

			$manager->persist($usuario);
		}
		$manager->flush();
	}
	public function getOrder(){
		return 3;
	}
}