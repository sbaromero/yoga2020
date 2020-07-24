<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Materia
 *
 * @ORM\Table(name="tema")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\TemaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Tema
{

    /**
     * @ORM\ManyToOne(targetEntity="Materia", inversedBy="tema")
     * @ORM\JoinColumn(name="materia_id", referencedColumnName="id")
     */
    protected $materia;
    
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
     *
     * @ORM\Column(name="titulo", type="string",length=100, nullable=true)
     */
    private $titulo;
     
     
     /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", nullable=true)
     */
    private $comentario;
    

    
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
     * @return tema
     */
    public function setComentario($comentario)
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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return tema
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
     * Set materia
     *
     * @param \CYA\YogaBundle\Entity\Materia $materia
     *
     * @return Tema
     */
    public function setMateria(\CYA\YogaBundle\Entity\Materia $materia = null)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \CYA\YogaBundle\Entity\Materia
     */
    public function getMateria()
    {
        return $this->materia;
    }
    
    
    
    
}
