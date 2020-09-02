<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * artista
 *
 * @ORM\Table(name="artista")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\artistaRepository")
 */
class artista
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="tipo")
     * @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="informacion", type="string", length=255)
     */
    private $informacion;


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
     * @return artista
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
     * Set informacion
     *
     * @param string $informacion
     *
     * @return artista
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;

        return $this;
    }

    /**
     * Get informacion
     *
     * @return string
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Set tipo
     *
     * @param \AppBundle\Entity\tipo $tipo
     *
     * @return artista
     */
    public function setTipo(\AppBundle\Entity\tipo $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \AppBundle\Entity\tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
