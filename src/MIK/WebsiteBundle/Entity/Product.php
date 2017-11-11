<?php

namespace MIK\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="MIK\WebsiteBundle\Repository\ProductRepository")
 */
class Product
{
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
     * @ORM\Column(name="prodName", type="string", length=255)
     */
    private $prodName;

    /**
     * @var string
     *
     * @ORM\Column(name="prodActName", type="string", length=255)
     */
    private $prodActName;

    /**
     * @var string
     *
     * @ORM\Column(name="prodType", type="string", length=255, nullable=true)
     */
    private $prodType;

    /**
     * @var array
     *
     * @ORM\Column(name="prodSize", type="json_array", nullable=true)
     */
    private $prodSize;

    /**
     * @var float
     *
     * @ORM\Column(name="prodPrice", type="float")
     */
    private $prodPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="prodQuantity", type="integer")
     */
    private $prodQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="prodStatus", type="string", length=255)
     */
    private $prodStatus;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prodName
     *
     * @param string $prodName
     *
     * @return Product
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;

        return $this;
    }

    /**
     * Get prodName
     *
     * @return string
     */
    public function getProdName()
    {
        return $this->prodName;
    }

    /**
     * Set prodActName
     *
     * @param string $prodActName
     *
     * @return Product
     */
    public function setProdActName($prodActName)
    {
        $this->prodActName = $prodActName;

        return $this;
    }

    /**
     * Get prodActName
     *
     * @return string
     */
    public function getProdActName()
    {
        return $this->prodActName;
    }

    /**
     * Set prodType
     *
     * @param string $prodType
     *
     * @return Product
     */
    public function setProdType($prodType)
    {
        $this->prodType = $prodType;

        return $this;
    }

    /**
     * Get prodType
     *
     * @return string
     */
    public function getProdType()
    {
        return $this->prodType;
    }

    /**
     * Set prodSize
     *
     * @param array $prodSize
     *
     * @return Product
     */
    public function setProdSize($prodSize)
    {
        $this->prodSize = $prodSize;

        return $this;
    }

    /**
     * Get prodSize
     *
     * @return array
     */
    public function getProdSize()
    {
        return $this->prodSize;
    }

    /**
     * Set prodPrice
     *
     * @param float $prodPrice
     *
     * @return Product
     */
    public function setprodPrice($prodPrice)
    {
        $this->prodPrice = $prodPrice;

        return $this;
    }

    /**
     * Get prodPrice
     *
     * @return float
     */
    public function getprodPrice()
    {
        return $this->prodPrice;
    }

    /**
     * Set prodQuantity
     *
     * @param integer $prodQuantity
     *
     * @return Product
     */
    public function setProdQuantity($prodQuantity)
    {
        $this->prodQuantity = $prodQuantity;

        return $this;
    }

    /**
     * Get prodQuantity
     *
     * @return int
     */
    public function getProdQuantity()
    {
        return $this->prodQuantity;
    }

    /**
     * Set prodStatus
     *
     * @param string $prodStatus
     *
     * @return Product
     */
    public function setProdStatus($prodStatus)
    {
        $this->prodStatus = $prodStatus;

        return $this;
    }

    /**
     * Get prodStatus
     *
     * @return string
     */
    public function getProdStatus()
    {
        return $this->prodStatus;
    }
}

