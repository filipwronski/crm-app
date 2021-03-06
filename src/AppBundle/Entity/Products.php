<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductsRepository")
 */
class Products {

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
     * @ORM\Column(name="productName", type="string", length=255)
     */
    private $productName;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="unitsInStock", type="integer")
     */
    private $unitsInStock;

    /**
     * @var bool
     *
     * @ORM\Column(name="isInPromotion", type="boolean")
     */
    private $isInPromotion;

    /**
     * @var float
     *
     * @ORM\Column(name="promotionPrice", type="float")
     */
    private $promotionPrice;

    /**
     * @ORM\OneToMany(targetEntity="OrderDetails", mappedBy="product")
     */
    protected $details;

    public function __construct() {
        $this->details = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return Products
     */
    public function setProductName($productName) {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName() {
        return $this->productName;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Products
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set unitsInStock
     *
     * @param integer $unitsInStock
     *
     * @return Products
     */
    public function setUnitsInStock($unitsInStock) {
        $this->unitsInStock = $unitsInStock;

        return $this;
    }

    /**
     * Get unitsInStock
     *
     * @return int
     */
    public function getUnitsInStock() {
        return $this->unitsInStock;
    }

    /**
     * Set isInPromotion
     *
     * @param boolean $isInPromotion
     *
     * @return Products
     */
    public function setIsInPromotion($isInPromotion) {
        $this->isInPromotion = $isInPromotion;

        return $this;
    }

    /**
     * Get isInPromotion
     *
     * @return bool
     */
    public function getIsInPromotion() {
        return $this->isInPromotion;
    }

    /**
     * Set promotionPrice
     *
     * @param float $promotionPrice
     *
     * @return Products
     */
    public function setPromotionPrice($promotionPrice) {
        $this->promotionPrice = $promotionPrice;

        return $this;
    }

    /**
     * Get promotionPrice
     *
     * @return float
     */
    public function getPromotionPrice() {
        return $this->promotionPrice;
    }

    /**
     * Add detail
     *
     * @param \AppBundle\Entity\OrderDetails $detail
     *
     * @return Products
     */
    public function addDetail(\AppBundle\Entity\OrderDetails $detail) {
        $this->details[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \AppBundle\Entity\OrderDetails $detail
     */
    public function removeDetail(\AppBundle\Entity\OrderDetails $detail) {
        $this->details->removeElement($detail);
    }

    /**
     * Get details
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetails() {
        return $this->details;
    }

}
