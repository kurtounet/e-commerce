<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
#[Table(name: "images")]
class Image
{
    #[Id, GeneratedValue, Column(type: "integer")]
    private int $id;

    #[Column(type: "string", length: 255)]
    private string $name;

    #[ManyToOne(targetEntity: "Product")]
    #[JoinColumn(name: "products_id", referencedColumnName: "id")]
    private Product $product;
}
