<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Lockersocio
 *
 * @ORM\Table(name="cursosold")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\CursosoldRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Cursosold
{

    /**
     * @ORM\ManyToOne(targetEntity="Tipocuota", inversedBy="cursosold")
     * @ORM\JoinColumn(name="tipocuota_id", referencedColumnName="id")
     */
    protected $tipocuota;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="cursosold")
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    
    
    /**
     * Set usuario
     *
     * @param \CYA\YogaBundle\Entity\Usuario $usuario
     *
     * @return Lockersocio
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
     * Set tipocuota
     *
     * @param \CYA\YogaBundle\Entity\Tipocuota $tipocuota
     *
     * @return Cursosold
     */
    public function setTipocuota(\CYA\YogaBundle\Entity\Tipocuota $tipocuota = null)
    {
        $this->tipocuota = $tipocuota;

        return $this;
    }

    /**
     * Get tipocuota
     *
     * @return \CYA\YogaBundle\Entity\Tipocuota
     */
    public function getTipocuota()
    {
        return $this->tipocuota;
    }
    
    
}
