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
#[Table(name: "orders")]
class Order
{
    #[Id, GeneratedValue, Column(type: "integer")]
    private int $id;

    #[Column(type: "string", length: 255, unique: true)]
    private string $reference;

    #[ManyToOne(targetEntity: "Coupon")]
    #[JoinColumn(name: "coupons_id", referencedColumnName: "id")]
    private ?Coupon $coupon = null;

    #[ManyToOne(targetEntity: "User")]
    #[JoinColumn(name: "users_id", referencedColumnName: "id")]
    private User $user;

    #[Column(type: "datetime", options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTime $createdAt;

    #[OneToMany(mappedBy: "order", targetEntity: "OrdersDetail")]
    private $orderDetails;
}
