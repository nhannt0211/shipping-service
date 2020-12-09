<?php 
namespace product;

class Product 
{
	private $amazonPrice;
	private $productWeight;
	private $productWidth;
	private $productHeight;
	private $productDepth;
	private $productType;

	public function setAmazonPrice(int $price)
	{
		$this->amazonPrice = $price;
	}

	public function getAmazonPrice()
	{
		return $this->amazonPrice;
	}

	public function setProductWeight(int $weight)
	{
		$this->productWeight = $weight;
	}

	public function getProductWeight()
	{
		return $this->productWeight;
	}

	public function setProductWidth(int $width)
	{
		$this->productWidth = $width;
	}

	public function getProductWidth()
	{
		return $this->productWidth;
	}

	public function setProductHeight(int $height)
	{
		$this->productHeight = $height;
	}

	public function getProductHeight()
	{
		return $this->productHeight;
	}

	public function setProductDepth(int $depth)
	{
		$this->productDepth = $depth;
	}

	public function getProductDepth()
	{
		return $this->productDepth;
	}

	public function setProductType(string $type)
	{
		$this->productType = $type;
	}

	public function getProductType()
	{
		return $this->productType;
	}

	public function getProductPrice() 
	{
		$totalPrice = $this->amazonPrice + $this->getShippingFee();

		return $totalPrice;
	}

	public function getShippingFee() 
	{
		return max(
			$this->calculateFeeByWeight(), 
			$this->calculateFeeByDimensions();
	}

	public function calculateFeeByWeight() 
	{
		$weightConfficient = 1;
		$feeByWeight = $this->productWeight * $weightConfficient;

		return $feeByWeight;
	}

	public function calculateFeeByDimensions() 
	{
		$dimensionConfficient = 1;
		$feeByDimensions = $this->productWidth 
							* $this->productHeight 
							* $this->productDepth 
							* $dimensionConfficient;

		return $feeByDimensions;
	}
