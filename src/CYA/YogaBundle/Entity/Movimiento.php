<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Movimiento
 *
 * @ORM\Table(name="movimiento")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\MovimientoRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Movimiento
{

    /**
     * @ORM\OneToOne(targetEntity="Maestroventa", inversedBy="movimiento")
     * @ORM\JoinColumn(name="maestroventa_id", referencedColumnName="id")
     */
    protected $maestroventa;

    public function __construct()
    {
    }    
    
    /**
     * @ORM\ManyToOne(targetEntity="Proveedorcc", inversedBy="movimientos")
     * @ORM\JoinColumn(name="proveedorcc_id", referencedColumnName="id")
     */
    protected $proveedorcc;
    
    /**
     * @ORM\ManyToOne(targetEntity="Alumnocc", inversedBy="movimientos")
     * @ORM\JoinColumn(name="alumnocc_id", referencedColumnName="id")
     */
    protected $alumnocc;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="movimientos")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;
    
    /**
     * @ORM\ManyToOne(targetEntity="Rubro", inversedBy="movimientos")
     * @ORM\JoinColumn(name="rubro_id", referencedColumnName="id")
     */
    protected $rubro;
    
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
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="monto", type="float")
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=2)
     */
    private $tipo;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Movimiento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function setFechaValue()
    {
        $this->fecha = new \DateTime();
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Movimiento
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
     * Set monto
     *
     * @param float $monto
     *
     * @return Movimiento
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Movimiento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set rubro
     *
     * @param \CYA\YogaBundle\Entity\Rubro $rubro
     *
     * @return Movimiento
     */
    public function setRubro(\CYA\YogaBundle\Entity\Rubro $rubro = null)
    {
        $this->rubro = $rubro;

        return $this;
    }

    /**
     * Get rubro
     *
     * @return \CYA\YogaBundle\Entity\Rubro
     */
    public function getRubro()
    {
        return $this->rubro;
    }

    /**
     * Set usuario
     *
     * @param \CYA\YogaBundle\Entity\Usuario $usuario
     *
     * @return Movimiento
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
     * Set alumnocc
     *
     * @param \CYA\YogaBundle\Entity\Alumnocc $alumnocc
     *
     * @return Movimiento
     */
    public function setAlumnocc(\CYA\YogaBundle\Entity\Alumnocc $alumnocc = null)
    {
        $this->alumnocc = $alumnocc;

        return $this;
    }

    /**
     * Get alumnocc
     *
     * @return \CYA\YogaBundle\Entity\Alumnocc
     */
    public function getAlumnocc()
    {
        return $this->alumnocc;
    }

    /**
     * Set proveedorcc
     *
     * @param \CYA\YogaBundle\Entity\Proveedorcc $proveedorcc
     *
     * @return Movimiento
     */
    public function setProveedorcc(\CYA\YogaBundle\Entity\Proveedorcc $proveedorcc = null)
    {
        $this->proveedorcc = $proveedorcc;

        return $this;
    }

    /**
     * Get proveedorcc
     *
     * @return \CYA\YogaBundle\Entity\Proveedorcc
     */
    public function getProveedorcc()
    {
        return $this->proveedorcc;
    }


    /**
     * Set maestroventa
     *
     * @param \CYA\YogaBundle\Entity\Maestroventa $maestroventa
     *
     * @return Movimiento
     */
    public function setMaestroventa(\CYA\YogaBundle\Entity\Maestroventa $maestroventa = null)
    {
        $this->maestroventa = $maestroventa;

        return $this;
    }

    /**
     * Get maestroventa
     *
     * @return \CYA\YogaBundle\Entity\Maestroventa
     */
    public function getMaestroventa()
    {
        return $this->maestroventa;
    }
}
