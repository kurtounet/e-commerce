<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\IdClass;

#[Entity]
#[Table(name: "orders_details")]
class OrdersDetail
{

    #[Id, Column(type: "integer")]
    #[ManyToOne(targetEntity: "Order", inversedBy: "orderDetails")]
    #[JoinColumn(name: "orders_id", referencedColumnName: "id")]
    private Order $order;

    #[Id, Column(type: "integer")]
    #[ManyToOne(targetEntity: "Product")]
    #[JoinColumn(name: "products_id", referencedColumnName: "id")]
    private Product $product;

    #[Column(type: "integer")]
    private int $quantity;

    #[Column(type: "integer")]
    private int $price;

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }
}
