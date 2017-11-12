<?php

namespace MIK\WebsiteBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    public function findRequestProductWithType($productName, $productType) {
        $productName = strtoupper($productName);
        $productType = strtoupper($productType);
        return $this->getEntityManager()
        ->createQuery(
            "SELECT p FROM MIKWebsiteBundle:Product p
            WHERE p.prodName = '$productName' and p.prodType = '$productType'
            ORDER BY p.prodActName ASC"
        )
        ->getResult();
    }

    public function findRequestProduct($productName) {
        $productName = strtoupper($productName);
        return $this->getEntityManager()
        ->createQuery(
            "SELECT p FROM MIKWebsiteBundle:Product p
            WHERE p.prodName = '$productName'
            ORDER BY p.prodActName ASC"
        )
        ->getResult();
    }
}
