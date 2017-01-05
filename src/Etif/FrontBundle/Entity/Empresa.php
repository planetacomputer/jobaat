<?php
namespace Etif\FrontBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
*  @ORM\Table(name="empresa")
*  @ORM\Entity
*  @ORM\HasLifecycleCallbacks()
*/

class Empresa{
     /**
     *  
     *  @ORM\Column(name="id", type="bigint", nullable=false)
     *  @ORM\Id
     *  @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

     /**
     * @ORM\OneToMany(targetEntity="Oferta", mappedBy="empresa")
     **/
     protected $ofertas;

     public function __construct(){
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
        $this->ofertas = new ArrayCollection();
     }

     /**
     * @ORM\preUpdate
     */
     public function setUpdatedValue()
     {
       $this->updated_at = new \DateTime();
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
     * @ORM\Column(name="razon_social", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(max=255)
     */
     private $razonSocial;

     /**
     * @var string
     *
     * @ORM\Column(name="cif", type="string", length=50)
     * @Assert\NotBlank
     * @Assert\Length(max=50)
     */
     private $cif;

     /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(max=255)
     */
     private $direccion;


     /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=100)
     * @Assert\NotBlank
     */
     private $localidad;

     /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10)
     * @Assert\NotBlank
     * @Assert\Length(max=10)
     */
     private $cp;

     /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    protected $telefono;

     /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     * @Assert\NotBlank
     * @Assert\Length(max=100)
     */
     private $email;

     /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(max=255)
     */
     private $responsable;

     /**
     * @var string
     *
     * @ORM\Column(name="sector", type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(max=255)
     */
     private $sector;

     /**
     * @var integer
     *
     * @ORM\Column(name="num_trabajadores", type="smallint")
     * @Assert\NotBlank
     */
     private $numTrabajadores;

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
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return Empresa
     */
     public function setRazonSocial($razonSocial)
     {
        $this->razonSocial = $razonSocial;

        return $this;
     }

     /**
     * Get razonSocial
     *
     * @return string
     */
     public function getRazonSocial()
     {
        return $this->razonSocial;
     }

     /**
     * Set cif
     *
     * @param string $cif
     *
     * @return Empresa
     */
     public function setCif($cif)
     {
        $this->cif = $cif;

        return $this;
     }

     /**
     * Get cif
     *
     * @return string
     */
     public function getCif()
     {
        return $this->cif;
     }

     /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empresa
     */
     public function setDireccion($direccion)
     {
        $this->direccion = $direccion;

        return $this;
     }

     /**
     * Get direccion
     *
     * @return string
     */
     public function getDireccion()
     {
        return $this->direccion;
     }

         /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Empresa
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

     /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Empresa
     */
     public function setCp($cp)
     {
        $this->cp = $cp;

        return $this;
     }

     /**
     * Get cp
     *
     * @return string
     */
     public function getCp()
     {
        return $this->cp;
     }

     /**
     * Set email
     *
     * @param string $email
     *
     * @return Empresa
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
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Empresa
     */
     public function setResponsable($responsable)
     {
        $this->responsable = $responsable;

        return $this;
     }

     /**
     * Get responsable
     *
     * @return string
     */
     public function getResponsable()
     {
        return $this->responsable;
     }

     /**
     * Set sector
     *
     * @param string $sector
     *
     * @return Empresa
     */
     public function setSector($sector)
     {
        $this->sector = $sector;

        return $this;
     }

     /**
     * Get sector
     *
     * @return string
     */
     public function getSector()
     {
        return $this->sector;
     }

     /**
     * Set numTrabajadores
     *
     * @param integer $numTrabajadores
     *
     * @return Empresa
     */
     public function setNumTrabajadores($numTrabajadores)
     {
        $this->numTrabajadores = $numTrabajadores;

        return $this;
     }

     /**
     * Get numTrabajadores
     *
     * @return integer
     */
     public function getNumTrabajadores()
     {
        return $this->numTrabajadores;
     }

     /**
     * Add oferta
     *
     * @param \Etif\FrontBundle\Entity\Oferta $oferta
     *
     * @return Empresa
     */
     public function addOferta(\Etif\FrontBundle\Entity\Oferta $oferta)
     {
        $this->ofertas[] = $oferta;

        return $this;
     }

     /**
     * Remove oferta
     *
     * @param \Etif\FrontBundle\Entity\Oferta $oferta
     */
     public function removeOferta(\Etif\FrontBundle\Entity\Oferta $oferta)
     {
        $this->ofertas->removeElement($oferta);
     }

     /**
     * Get ofertas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
     public function getOfertas()
     {
        return $this->ofertas;
     }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Empresa
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
     * @return Empresa
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empresa
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
}
