<?php 
class Fraction
{
	private $numerator;
	private $denominator;
	
	public function __construct($numerator, $denominator)
    {
	  $this->numerator = $numerator;
	  $this->denominator = $denominator;
    }

    public function getNumer() {
        return $this->numerator;
    }
	
	public function getDenum() {
        return $this->denominator;
    }
	
	
	
}?> 