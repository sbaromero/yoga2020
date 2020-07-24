<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Cursada
 *
 * @ORM\Table(name="cursada")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\CursadaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Cursada
{

    /**
     * @ORM\ManyToOne(targetEntity="Materia", inversedBy="cursada")
     * @ORM\JoinColumn(name="materia_id", referencedColumnName="id")
     */
    protected $materia;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="cursada")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @var string
     * @ORM\Column(name="nota", type="string",length=100, nullable=true)
     */
    private $nota;
     
     
     /**
     * @var string
     * @ORM\Column(name="comentario", type="text", nullable=true)
     */
    private $comentario;
    

     /**
     * @var \DateTime
     * @ORM\Column(name="fechains", type="datetime", nullable=true)
     */
    private $fechains;

    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

   
   
    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return alumnocc
     */
    public function setComentario($comentario = null)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }
    
    
     /**
     * Set nota
     *
     * @param string $nota
     *
     * @return Cursada
     */
    public function setNota($nota = null)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }
    
    
    
    
    
    /**
     * Set materia
     *
     * @param \CYA\YogaBundle\Entity\materia $materia
     *
     * @return Cursada
     */
    public function setMateria(\CYA\YogaBundle\Entity\Materia $materia = null)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \CYA\YogaBundle\Entity\materia
     */
    public function getMateria()
    {
        return $this->materia;
    }
    
    /**
     * Set usuario
     *
     * @param \CYA\YogaBundle\Entity\usuario $usuario
     *
     * @return Cursada
     */
    public function setUsuario(\CYA\YogaBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \CYA\YogaBundle\Entity\usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }    
    
     /**
     * Set fechains
     *
     * @param \DateTime $fechains
     *
     * @return Cursada
     */
    public function setFechains($fechains = null)
    {
        $this->fechains = $fechains;

        return $this;
    }

    /**
     * Get fechains
     *
     * @return \DateTime
     */
    public function getFechains()
    {
        return $this->fechains;
    }    
}
