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
 * @ORM\Table(name="materia")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\MateriaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Materia
{

    /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="materia")
     * @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     */
    protected $curso;
    
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
     * @return alumnocc
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
     * @return materia
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
     * Set curso
     *
     * @param \CYA\YogaBundle\Entity\Curso $curso
     *
     * @return Materia
     */
    public function setCurso(\CYA\YogaBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \CYA\YogaBundle\Entity\Curso
     */
    public function getCurso()
    {
        return $this->curso;
    }
    
    
    
    
}
