<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
#[Table(name: "products")]
class Product
{
    #[Id, GeneratedValue, Column(type: "integer")]
    private int $id;

    #[Column(type: "string", length: 255)]
    private string $name;

    #[Column(type: "string", length: 255)]
    private string $slug;

    #[Column(type: "text")]
    private string $description;

    #[Column(type: "integer", options: ["comment" => "Rounded integer value (price*100)"])]
    private int $price;

    #[Column(type: "integer")]
    private int $stock;

    #[ManyToOne(targetEntity: "Category")]
    #[JoinColumn(name: "categories_id", referencedColumnName: "id")]
    private Category $category;

    #[Column(type: "datetime", options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTime $createdAt;
}
