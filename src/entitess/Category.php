<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
#[Table(name: "categories")]
class Category
{
    #[Id, GeneratedValue, Column(type: "integer")]
    private int $id;

    #[Column(type: "string", length: 255)]
    private string $name;

    #[Column(type: "string", length: 255)]
    private string $slug;

    #[Column(type: "integer")]
    private int $categoryOrder;

    #[ManyToOne(targetEntity: "Category", inversedBy: "children")]
    #[JoinColumn(name: "parent_id", referencedColumnName: "id")]
    private ?Category $parent = null;

    #[OneToMany(mappedBy: "parent", targetEntity: "Category")]
    private $children;
}
