<?php
namespace Etif\FrontBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Etif\FrontBundle\Entity\Usuario;

/**
*  @ORM\Table(name="oferta")
*  @ORM\Entity
*  @ORM\HasLifecycleCallbacks()
*/

class Oferta{
	/**
	*  
	*  @ORM\Column(name="id", type="bigint", nullable=false)
	*  @ORM\Id
	*  @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

    /** @ORM\OneToMany(targetEntity="OfertaUsuario", mappedBy="usuario") */
    protected $usuarios;

	public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
        $this->usuarios = new ArrayCollection();
    }

	/**
    *  @ORM\ManyToOne(targetEntity="Empresa", inversedBy="ofertas")
    *  @ORM\JoinColumn(name="empresa_id", referencedColumnName="id", nullable=false)
    */
    protected $empresa;

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
     * @ORM\Column(name="titulo", type="string", length=255)
     * @Assert\NotBlank
     */
	protected $titulo;

	/**
     * @ORM\Column(name="descripcion", type="text")
     */
	protected $descripcion;

    /**
     * @ORM\Column(name="tipo_contrato", type="string", length=50, nullable=true)
     * @Assert\NotBlank
     * @Assert\Length(max=50)
     */
    protected $tipoContrato;

    /**
     * @ORM\Column(name="num_plazas", type="smallint")
     */
    protected $numPlazas;

    /**
     * @ORM\Column(name="salario", type="integer", nullable=true)
     */
    protected $salario;

    /**
     *  @ORM\Column(name="horario", type="integer", nullable=true)
     *  @Assert\LessThan(4)
     */
    public $horario;

	/**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Assert\DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Assert\DateTime
     */
    private $updatedAt;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Oferta
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Oferta
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Oferta
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Oferta
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set empresa
     *
     * @param \Etif\FrontBundle\Entity\Empresa $empresa
     *
     * @return Oferta
     */
    public function setEmpresa(\Etif\FrontBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \Etif\FrontBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Oferta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set tipoContrato
     *
     * @param string $tipoContrato
     *
     * @return Oferta
     */
    public function setTipoContrato($tipoContrato)
    {
        $this->tipoContrato = $tipoContrato;

        return $this;
    }

    /**
     * Get tipoContrato
     *
     * @return string
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

    /**
     * Set numPlazas
     *
     * @param integer $numPlazas
     *
     * @return Oferta
     */
    public function setNumPlazas($numPlazas)
    {
        $this->numPlazas = $numPlazas;

        return $this;
    }

    /**
     * Get numPlazas
     *
     * @return integer
     */
    public function getNumPlazas()
    {
        return $this->numPlazas;
    }

    /**
     * Set salario
     *
     * @param integer $salario
     *
     * @return Oferta
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get salario
     *
     * @return integer
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set horario
     *
     * @param string $horario
     *
     * @return Oferta
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set usuarios
     *
     * @param \Etif\FrontBundle\Entity\Usuario $usuarios
     *
     * @return Oferta
     */
    public function setUsuarios(\Etif\FrontBundle\Entity\Usuario $usuarios = null)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return \Etif\FrontBundle\Entity\Usuario
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    /**
     * Add usuario
     *
     * @param \Etif\FrontBundle\Entity\Usuario $usuario
     *
     * @return Oferta
     */
    public function addUsuario(\Etif\FrontBundle\Entity\Usuario $usuario)
    {
        $this->usuarios[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \Etif\FrontBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\Etif\FrontBundle\Entity\Usuario $usuario)
    {
        $this->usuarios->removeElement($usuario);
    }
}
