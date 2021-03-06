<?php

namespace App\Entity;

use App\Repository\RecomendacionPeliculaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecomendacionPeliculaRepository::class)
 */
class RecomendacionPelicula
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=2048)
     */
    private $imagenSRC;

    /**
     * @ORM\Column(type="text")
     */
    private $sinopsis;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $anio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $generos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $director;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $elenco;

    /**
     * @ORM\Column(type="string", length=2048, nullable=true)
     */
    private $trailer;

    /**
     * @ORM\Column(type="string", length=2048, nullable=true)
     */
    private $descarga;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="recomendaciones")
     */
    private $usuario;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="favoritos", cascade={"persist"})
     * @ORM\JoinTable(
     *     name="favoritos_usuario",
     *     joinColumns={
     *          @ORM\JoinColumn(name="recomendacion_id", referencedColumnName="id")
     *     },
     *     inverseJoinColumns={
     *          @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     *     }
     * )
     */
    private $favorito_de_usuarios;

    public function __construct()
   {
       $this->favorito_de_usuarios = new ArrayCollection();
   }

    public function setUsuario(User $usuario) {
        $this->usuario = $usuario;
    }

    public function getUsuario(): ?int
    {
        return $this->usuario->getId();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getImagenSRC(): ?string
    {
        return $this->imagenSRC;
    }

    public function setImagenSRC(string $imagenSRC): self
    {
        $this->imagenSRC = $imagenSRC;

        return $this;
    }

    public function getSinopsis(): ?string
    {
        return $this->sinopsis;
    }

    public function setSinopsis(string $sinopsis): self
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    public function getAnio(): ?string
    {
        return $this->anio;
    }

    public function setAnio(string $anio): self
    {
        $this->anio = $anio;

        return $this;
    }

    public function getGeneros(): ?string
    {
        return $this->generos;
    }

    public function setGeneros(string $generos): self
    {
        $this->generos = $generos;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;

        return $this;
    }

    public function getElenco(): ?string
    {
        return $this->elenco;
    }

    public function setElenco(string $elenco): self
    {
        $this->elenco = $elenco;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(?string $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function getDescarga(): ?string
    {
        return $this->descarga;
    }

    public function setDescarga(?string $descarga): self
    {
        $this->descarga = $descarga;

        return $this;
    }

    public function marcarFavoritoDeUsuario(User $usuario): self
    {
        $this->favorito_de_usuarios[] = $usuario;
 
        return $this;
    }
 
    public function desmarcarFavoritoDeUsuario(User $usuario): bool
    {
        return $this->favorito_de_usuarios->removeElement($usuario);
    }
 
    public function getFavoritoDeUsuario(): Collection
    {
        return $this->favorito_de_usuarios;
    }
}
