<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
#[Table(name: "coupons_types")]
class CouponsType
{
    #[Id, GeneratedValue, Column(type: "integer")]
    private int $id;

    #[Column(type: "string", length: 255)]
    private string $name;

    #[OneToMany(mappedBy: "couponsType", targetEntity: "Coupon")]
    private $coupons;
}
