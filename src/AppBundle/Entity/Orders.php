<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
 */
class Orders {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orderDate", type="datetime")
     */
    private $orderDate;

    /**
     * @ORM\ManyToOne(targetEntity="Customers", inversedBy="orders")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    protected $customer;

    /**
     * @ORM\ManyToOne(targetEntity="Shippers", inversedBy="orders")
     * @ORM\JoinColumn(name="shipper_id", referencedColumnName="id")
     */
    protected $shipper;

    /**
     * @ORM\ManyToOne(targetEntity="Employees", inversedBy="orders")
     * @ORm\JoinColumn(name="employees_id", referencedColumnName="id")
     */
    protected $employe;
    
    /**
     * @ORM\OneToMany(targetEntity="OrderDetails", mappedBy="order")
     */
    
    protected $details;
    
    public function __construct()
    {
        $this->product = new ArrayCollection();
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
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return Orders
     */
    public function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate() {
        return $this->orderDate;
    }


    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customers $customer
     *
     * @return Orders
     */
    public function setCustomer(\AppBundle\Entity\Customers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customers
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set shipper
     *
     * @param \AppBundle\Entity\Shippers $shipper
     *
     * @return Orders
     */
    public function setShipper(\AppBundle\Entity\Shippers $shipper = null)
    {
        $this->shipper = $shipper;

        return $this;
    }

    /**
     * Get shipper
     *
     * @return \AppBundle\Entity\Shippers
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Set employe
     *
     * @param \AppBundle\Entity\Employees $employe
     *
     * @return Orders
     */
    public function setEmploye(\AppBundle\Entity\Employees $employe = null)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \AppBundle\Entity\Employees
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Add detail
     *
     * @param \AppBundle\Entity\OrderDetails $detail
     *
     * @return Orders
     */
    public function addDetail(\AppBundle\Entity\OrderDetails $detail)
    {
        $this->details[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \AppBundle\Entity\OrderDetails $detail
     */
    public function removeDetail(\AppBundle\Entity\OrderDetails $detail)
    {
        $this->details->removeElement($detail);
    }

    /**
     * Get details
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetails()
    {
        return $this->details;
    }
}
