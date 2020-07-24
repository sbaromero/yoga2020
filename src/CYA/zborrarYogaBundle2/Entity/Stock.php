<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\StockRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Stock
{

     /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="id")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
    protected $producto;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="stock")
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime")
     */
    private $fechainicio;


     /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255, nullable=true)
     */
    private $comentario;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;
    
    
    
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return stock
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }
    
    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     *
     * @return Stock
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime
     */
    public function getFechafin()
    {
        return $this->fechafin;
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
     * Set usuario
     *
     * @param \CYA\YogaBundle\Entity\Usuario $usuario
     *
     * @return Stock
     */
    public function setUsuario(\CYA\YogaBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \CYA\YogaBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    
    
     /**
     * Set cantidad
     *
     * @param string $cantidad
     *
     * @return alumnocc
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
    

    
     /**
     * Set producto
     *
     * @param \CYA\YogaBundle\Entity\Producto $producto
     *
     * @return Stock
     */
    public function setProducto(\CYA\YogaBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \CYA\YogaBundle\Entity\Producto
     */
    public function getProducto()
    {
        return $this->producto;
    }
    
    
}
