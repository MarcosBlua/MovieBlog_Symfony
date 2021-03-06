<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=2048)
     */
    private $imagenPerfil;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecomendacionPelicula", mappedBy="usuario")
     */
    private $recomendaciones;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\RecomendacionPelicula", mappedBy="favorito_de_usuarios")
     */
    private $favoritos;

    public function __construct()
   {
       $this->favoritos = new ArrayCollection();
   }

    public function agregarRecomendacion(RecomendacionPelicula $recomendacion) {
        $recomendacion->setUsuario($this);
        $this->$recomendaciones[] = $recomendacion;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getImagenPerfil(): ?string
    {
        return $this->imagenPerfil;
    }

    public function setImagenPerfil(string $imagenPerfil): self
    {
        $this->imagenPerfil = $imagenPerfil;

        return $this;
    }

    public function marcarFavorito(RecomendacionPelicula $favorito): self
   {
       $this->favoritos[] = $favorito;
 
       return $this;
   }
 
   public function DesmarcarFavorito(RecomendacionPelicula $favorito): bool
   {
       return $this->favoritos->removeElement($favorito);
   }
 
   public function getFavoritos(): Collection
   {
       return $this->favoritos;
   }
}
