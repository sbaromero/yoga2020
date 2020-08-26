<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tipocuota
 *
 * @ORM\Table(name="tipocuota")
 * @UniqueEntity("nombre")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\TipocuotaRepository")
 */
class Tipocuota
{
    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="tipocuota")
     */
    protected $usuarios;
 
    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }
    
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
     * @ORM\Column(name="nombre", type="string", length=255, unique=false)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float")
     */
    private $valor;

  



    /**
     * @var bool
     *
     * @ORM\Column(name="escurso", type="boolean",nullable=true)
     */
    private $escurso;



    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=255, unique=false, nullable=true)
     */
    private $mensaje;


    /**
     * @var bool
     *
     * @ORM\Column(name="activa", type="boolean",nullable=true)
     */
    private $activa;




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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tipocuota
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
     * Set valor
     *
     * @param float $valor
     *
     * @return Tipocuota
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

   
   
  

   
   
  

   

    /**
     * Add usuario
     *
     * @param \CYA\YogaBundle\Entity\Usuario $usuario
     *
     * @return Tipocuota
     */
    public function addUsuario(\CYA\YogaBundle\Entity\Usuario $usuario)
    {
        $this->usuarios[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \CYA\YogaBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\CYA\YogaBundle\Entity\Usuario $usuario)
    {
        $this->usuarios->removeElement($usuario);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

       /**
     * Set escurso
     *
     * @param boolean $escurso
     *
     * @return Usuario
     */
    public function setEsCurso($escurso)
    {
        $this->escurso = $escurso;

        return $this;
    }

    /**
     * Get escurso
     *
     * @return bool
     */
    public function getEsCurso()
    {
        return $this->escurso;
    }

    
    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Tipocuota
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }
    
    
    /**
     * Set activa
     *
     * @param boolean $activa
     *
     * @return Usuario
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return bool
     */
    public function getActiva()
    {
        return $this->activa;
    }
    
    
    
    
}
