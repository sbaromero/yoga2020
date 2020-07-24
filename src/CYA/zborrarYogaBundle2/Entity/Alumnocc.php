<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Alumnocc
 *
 * @ORM\Table(name="alumnocc")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\AlumnoccRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Alumnocc
{

    /**
     * @ORM\OneToOne(targetEntity="Maestroventa", inversedBy="alumnocc")
     * @ORM\JoinColumn(name="maestroventa_id", referencedColumnName="id")
     */
    protected $maestroventa;

    /**
     * @ORM\OneToMany(targetEntity="Movimiento", mappedBy="alumnocc")
     */
    protected $movimientos;
 
    public function __construct()
    {
        $this->movimientos = new ArrayCollection();
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="alumnoccs")
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
     * @ORM\Column(name="fechavencimiento", type="datetime")
     */
    private $fechavencimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacreacion", type="datetime")
     */
    private $fechacreacion;
    
    /**
     * @var float
     *
     * @ORM\Column(name="deuda", type="float")
     */
    private $deuda;

    /**
     * @var float
     *
     * @ORM\Column(name="pagado", type="float")
     */
    private $pagado;

    /**
     * @var float
     *
     * @ORM\Column(name="bonificacion", type="float")
     */
    private $bonificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechamodificacion", type="datetime")
     */
    private $fechamodificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=2)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=100, nullable=true)
     */
    private $comentario;
    
     /**
     * @var string
     *
     * @ORM\Column(name="ticket", type="string", length=100, nullable=true)
     */
    private $ticket;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="string", length=100, nullable=true)
     */
    private $mes;
    
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
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Alumnocc
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }
    
    /**
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     *
     * @return Alumnocc
     */
    public function setFechacreacion($fechacreacion)
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return \DateTime
     */
    public function getFechacreacion()
    {
        return $this->fechacreacion;
    }


    /**
     * Set deuda
     *
     * @param float $deuda
     *
     * @return Alumnocc
     */
    public function setDeuda($deuda)
    {
        $this->deuda = $deuda;

        return $this;
    }

    /**
     * Get deuda
     *
     * @return float
     */
    public function getDeuda()
    {
        return $this->deuda;
    }

    /**
     * Set pagado
     *
     * @param float $pagado
     *
     * @return Alumnocc
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;

        return $this;
    }

    /**
     * Get pagado
     *
     * @return float
     */
    public function getPagado()
    {
        return $this->pagado;
    }

    /**
     * Set bonificacion
     *
     * @param float $bonificacion
     *
     * @return Alumnocc
     */
    public function setBonificacion($bonificacion)
    {
        $this->bonificacion = $bonificacion;

        return $this;
    }

    /**
     * Get bonificacion
     *
     * @return float
     */
    public function getBonificacion()
    {
        return $this->bonificacion;
    }

    /**
     * Set fechamodificacion
     *
     * @param \DateTime $fechamodificacion
     *
     * @return Alumnocc
     */
    public function setFechamodificacion($fechamodificacion)
    {
        $this->fechamodificacion = $fechamodificacion;

        return $this;
    }

    /**
     * Get fechamodificacion
     *
     * @return \DateTime
     */
    public function getFechamodificacion()
    {
        return $this->fechamodificacion;
    }
    
    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Alumnocc
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
     * Set ticket
     *
     * @param string $ticket
     *
     * @return alumnocc
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }
    
    
    
    /**
     * Set mes
     *
     * @param string $mes
     *
     * @return alumnocc
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
    }
    
    
    /**
     * Set usuario
     *
     * @param \CYA\YogaBundle\Entity\Usuario $usuario
     *
     * @return Alumnocc
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
     * Add movimiento
     *
     * @param \CYA\YogaBundle\Entity\Movimiento $movimiento
     *
     * @return Alumnocc
     */
    public function addMovimiento(\CYA\YogaBundle\Entity\Movimiento $movimiento)
    {
        $this->movimientos[] = $movimiento;

        return $this;
    }

    /**
     * Remove movimiento
     *
     * @param \CYA\YogaBundle\Entity\Movimiento $movimiento
     */
    public function removeMovimiento(\CYA\YogaBundle\Entity\Movimiento $movimiento)
    {
        $this->movimientos->removeElement($movimiento);
    }

    /**
     * Get movimientos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovimientos()
    {
        return $this->movimientos;
    }


    /**
     * Set maestroventa
     *
     * @param \CYA\YogaBundle\Entity\Maestroventa $maestroventa
     *
     * @return Alumnocc
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
