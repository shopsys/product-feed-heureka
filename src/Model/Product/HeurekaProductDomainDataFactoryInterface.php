<?php

declare(strict_types=1);

namespace Shopsys\ProductFeed\HeurekaBundle\Model\Product;

interface HeurekaProductDomainDataFactoryInterface
{
    /**
     * @return \Shopsys\ProductFeed\HeurekaBundle\Model\Product\HeurekaProductDomainData
     */
    public function create(): HeurekaProductDomainData;
}
