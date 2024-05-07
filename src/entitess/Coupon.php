<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
#[Table(name: "coupons")]
class Coupon
{
    #[Id, GeneratedValue, Column(type: "integer")]
    private int $id;

    #[Column(type: "string", length: 255, unique: true)]
    private string $code;

    #[Column(type: "text")]
    private string $description;

    #[ManyToOne(targetEntity: "CouponsType")]
    #[JoinColumn(name: "coupons_types_id", referencedColumnName: "id")]
    private CouponsType $couponsType;

    #[Column(type: "integer")]
    private int $discount;

    #[Column(type: "integer")]
    private int $maxUsage;

    #[Column(type: "datetime")]
    private \DateTime $validity;

    #[Column(type: "boolean")]
    private bool $isValid;

    #[Column(type: "datetime")]
    private \DateTime $createdAt;
}
