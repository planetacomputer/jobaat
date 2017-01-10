<?php
namespace Etif\FrontBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Etif\FrontBundle\Entity\Oferta;
use Etif\FrontBundle\Entity\Usuario;

/**
*  @ORM\Table(name="oferta_usuario")
*  @ORM\Entity
*  @ORM\HasLifecycleCallbacks()
*/

class OfertaUsuario{
	/**
     * @var integer
     *
     * @ORM\Column(name="estado_candidatura", type="smallint", nullable=false)
     */
     protected $estadoCandidatura;

    /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="usuarios") 
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id", nullable=false) 
     */
    protected $usuario;

     /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Oferta", inversedBy="ofertas") 
     * @ORM\JoinColumn(name="oferta_id", referencedColumnName="id", nullable=false) 
     */
    protected $oferta;

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

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
        $this->estadoCandidatura = 0;
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
     * Set usuario
     *
     * @param \Etif\FrontBundle\Entity\Usuario $usuario
     *
     * @return OfertaUsuario
     */
    public function setUsuario(\Etif\FrontBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Etif\FrontBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set oferta
     *
     * @param \Etif\FrontBundle\Entity\Oferta $oferta
     *
     * @return OfertaUsuario
     */
    public function setOferta(\Etif\FrontBundle\Entity\Oferta $oferta)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get oferta
     *
     * @return \Etif\FrontBundle\Entity\Oferta
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set estadoCandidatura
     *
     * @param integer $estadoCandidatura
     *
     * @return OfertaUsuario
     */
    public function setEstadoCandidatura($estadoCandidatura)
    {
        $this->estadoCandidatura = $estadoCandidatura;

        return $this;
    }

    /**
     * Get estadoCandidatura
     *
     * @return integer
     */
    public function getEstadoCandidatura()
    {
        return $this->estadoCandidatura;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return OfertaUsuario
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
     * @return OfertaUsuario
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
}
