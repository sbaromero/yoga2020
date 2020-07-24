<?php

namespace CYA\YogaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Mesa
 *
 * @ORM\Table(name="mesa")
 * @ORM\Entity(repositoryClass="CYA\YogaBundle\Repository\MesaRepository")
 */
class Mesa
{
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
     * @ORM\Column(name="descripcion", type="string", length=100)
     */
    private $descripcion;
    
    
     /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", options={"default"=0}, nullable=true)
     */
    private $isActive;
    
    

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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Mesa
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Producto
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }



}
