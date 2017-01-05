<?php
namespace Etif\FrontBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
*  @ORM\Table(name="usuario")
*  @ORM\Entity
*  @ORM\HasLifecycleCallbacks()
*/

class Usuario{
	/**
	*  
	*  @ORM\Column(name="id", type="bigint", nullable=false)
	*  @ORM\Id
	*  @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }

    /**
    * @ORM\preUpdate
    */
    public function setUpdatedValue()
    {
       $this->updatedAt = new \DateTime();
    }

    /**
     * @ORM\PrePersist
    **/
    public function prePersistEvent(){
        $this->createdAt = new \DateTime();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     * @Assert\NotBlank
     */
	protected $nombre;

	/**
     * @var string
     *
     * @ORM\Column(name="apellido1", type="string", length=100)
     * @Assert\NotBlank
     */
	protected $apellido1;

	/**
     * @var string
     *
     * @ORM\Column(name="apellido2", type="string", length=100)
     * @Assert\NotBlank
     */
	protected $apellido2;

	/**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=20)
     * @Assert\NotBlank
     */
	protected $dni;

	/**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
	protected $telefono;

	/**
     * @var boolean
     *
     * @ORM\Column(name="carnet_conducir", type="boolean", options={"default" = false})
     * @Assert\NotBlank
     */
	protected $carnetConducir;

	/**
     * @var boolean
     *
     * @ORM\Column(name="vehiculo_propio", type="boolean", options={"default" = false})
     * @Assert\NotBlank
     */
	protected $vehiculoPropio;

	/**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     * @Assert\NotBlank
     * @Assert\Length(max=100)
     */
     private $email;

     /**
	 * @var date
	 *
	 * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
	 */
	private $fechaNacimiento;

	/**
     * @var string
     *
     * @ORM\Column(name="localidad_nacimiento", type="string", length=100)
     * @Assert\NotBlank
     */
     private $localidadNacimiento;

	/**
     * @var string
     *
     * @ORM\Column(name="num_ss", type="string", length=20)
     * @Assert\NotBlank
     */
	protected $numSS;

	/**
     * @var boolean
     *
     * @ORM\Column(name="pirmi_ayuda", type="boolean", options={"default" = false})
     * @Assert\NotBlank
     */
	protected $pirmiAyuda;

	/**
     * @var integer
     *
     * @ORM\Column(name="grado_discapacidad", type="smallint", options={"default" = 0})
     * @Assert\NotBlank
     */
     protected $gradoDiscapacidad;

     /**
     * @var boolean
     *
     * @ORM\Column(name="perceptor_paro", type="boolean", options={"default" = false})
     * @Assert\NotBlank
     */
	protected $perceptorParo;

	/**
	 * @var date
	 *
	 * @ORM\Column(name="fecha_fin_paro", type="date")
	 */
	protected $fechaFinParo;

	/**
     * @var integer
     *
     * @ORM\Column(name="estudios_prim", type="smallint")
     */
     protected $estudiosPrim;

     /**
     * @var integer
     *
     * @ORM\Column(name="estudios_sec", type="smallint")
     */
     protected $estudiosSec;

     /**
     * @var string
     *
     * @ORM\Column(name="estudios_univ", type="string")
     */
     protected $estudiosUniv;

     /**
     * @var integer
     *
     * @ORM\Column(name="nivel_catala", type="smallint")
     */
     protected $nivelCatala;

     /**
     * @var integer
     *
     * @ORM\Column(name="nivel_ingles", type="smallint")
     */
     protected $nivelIngles;

     /**
     * @var integer
     *
     * @ORM\Column(name="nivel_frances", type="smallint")
     */
     protected $nivelFrances;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido1
     *
     * @param string $apellido1
     *
     * @return Usuario
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     *
     * @return Usuario
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Usuario
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set carnetConducir
     *
     * @param boolean $carnetConducir
     *
     * @return Usuario
     */
    public function setCarnetConducir($carnetConducir)
    {
        $this->carnetConducir = $carnetConducir;

        return $this;
    }

    /**
     * Get carnetConducir
     *
     * @return boolean
     */
    public function getCarnetConducir()
    {
        return $this->carnetConducir;
    }

    /**
     * Set vehiculoPropio
     *
     * @param boolean $vehiculoPropio
     *
     * @return Usuario
     */
    public function setVehiculoPropio($vehiculoPropio)
    {
        $this->vehiculoPropio = $vehiculoPropio;

        return $this;
    }

    /**
     * Get vehiculoPropio
     *
     * @return boolean
     */
    public function getVehiculoPropio()
    {
        return $this->vehiculoPropio;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Usuario
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set localidadNacimiento
     *
     * @param string $localidadNacimiento
     *
     * @return Usuario
     */
    public function setLocalidadNacimiento($localidadNacimiento)
    {
        $this->localidadNacimiento = $localidadNacimiento;

        return $this;
    }

    /**
     * Get localidadNacimiento
     *
     * @return string
     */
    public function getLocalidadNacimiento()
    {
        return $this->localidadNacimiento;
    }

    /**
     * Set numSS
     *
     * @param string $numSS
     *
     * @return Usuario
     */
    public function setNumSS($numSS)
    {
        $this->numSS = $numSS;

        return $this;
    }

    /**
     * Get numSS
     *
     * @return string
     */
    public function getNumSS()
    {
        return $this->numSS;
    }

    /**
     * Set pirmiAyuda
     *
     * @param boolean $pirmiAyuda
     *
     * @return Usuario
     */
    public function setPirmiAyuda($pirmiAyuda)
    {
        $this->pirmiAyuda = $pirmiAyuda;

        return $this;
    }

    /**
     * Get pirmiAyuda
     *
     * @return boolean
     */
    public function getPirmiAyuda()
    {
        return $this->pirmiAyuda;
    }

    /**
     * Set gradoDiscapacidad
     *
     * @param integer $gradoDiscapacidad
     *
     * @return Usuario
     */
    public function setGradoDiscapacidad($gradoDiscapacidad)
    {
        $this->gradoDiscapacidad = $gradoDiscapacidad;

        return $this;
    }

    /**
     * Get gradoDiscapacidad
     *
     * @return integer
     */
    public function getGradoDiscapacidad()
    {
        return $this->gradoDiscapacidad;
    }

    /**
     * Set perceptorParo
     *
     * @param boolean $perceptorParo
     *
     * @return Usuario
     */
    public function setPerceptorParo($perceptorParo)
    {
        $this->perceptorParo = $perceptorParo;

        return $this;
    }

    /**
     * Get perceptorParo
     *
     * @return boolean
     */
    public function getPerceptorParo()
    {
        return $this->perceptorParo;
    }

    /**
     * Set fechaFinParo
     *
     * @param \DateTime $fechaFinParo
     *
     * @return Usuario
     */
    public function setFechaFinParo($fechaFinParo)
    {
        $this->fechaFinParo = $fechaFinParo;

        return $this;
    }

    /**
     * Get fechaFinParo
     *
     * @return \DateTime
     */
    public function getFechaFinParo()
    {
        return $this->fechaFinParo;
    }

    /**
     * Set estudiosPrim
     *
     * @param integer $estudiosPrim
     *
     * @return Usuario
     */
    public function setEstudiosPrim($estudiosPrim)
    {
        $this->estudiosPrim = $estudiosPrim;

        return $this;
    }

    /**
     * Get estudiosPrim
     *
     * @return integer
     */
    public function getEstudiosPrim()
    {
        return $this->estudiosPrim;
    }

    /**
     * Set estudiosSec
     *
     * @param integer $estudiosSec
     *
     * @return Usuario
     */
    public function setEstudiosSec($estudiosSec)
    {
        $this->estudiosSec = $estudiosSec;

        return $this;
    }

    /**
     * Get estudiosSec
     *
     * @return integer
     */
    public function getEstudiosSec()
    {
        return $this->estudiosSec;
    }

    /**
     * Set estudiosUniv
     *
     * @param string $estudiosUniv
     *
     * @return Usuario
     */
    public function setEstudiosUniv($estudiosUniv)
    {
        $this->estudiosUniv = $estudiosUniv;

        return $this;
    }

    /**
     * Get estudiosUniv
     *
     * @return string
     */
    public function getEstudiosUniv()
    {
        return $this->estudiosUniv;
    }

    /**
     * Set nivelCatala
     *
     * @param integer $nivelCatala
     *
     * @return Usuario
     */
    public function setNivelCatala($nivelCatala)
    {
        $this->nivelCatala = $nivelCatala;

        return $this;
    }

    /**
     * Get nivelCatala
     *
     * @return integer
     */
    public function getNivelCatala()
    {
        return $this->nivelCatala;
    }

    /**
     * Set nivelIngles
     *
     * @param integer $nivelIngles
     *
     * @return Usuario
     */
    public function setNivelIngles($nivelIngles)
    {
        $this->nivelIngles = $nivelIngles;

        return $this;
    }

    /**
     * Get nivelIngles
     *
     * @return integer
     */
    public function getNivelIngles()
    {
        return $this->nivelIngles;
    }

    /**
     * Set nivelFrances
     *
     * @param integer $nivelFrances
     *
     * @return Usuario
     */
    public function setNivelFrances($nivelFrances)
    {
        $this->nivelFrances = $nivelFrances;

        return $this;
    }

    /**
     * Get nivelFrances
     *
     * @return integer
     */
    public function getNivelFrances()
    {
        return $this->nivelFrances;
    }
}
