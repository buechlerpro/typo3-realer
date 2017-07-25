<?php
namespace Synac\Realer\Domain\Model;

/***
 *
 * This file is part of the "Real estate publisher" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Roman Büchler <rb@synac.com>, Synac Technology, S.L.
 *
 ***/

/**
 * A real estate object as a house, flat, land, hotel, etc.
 */
class Property extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * agentReference
     * 
     * @var string
     */
    protected $agentReference = '';

    /**
     * hasPriority
     * 
     * @var bool
     */
    protected $hasPriority = false;

    /**
     * salesState
     * 
     * @var int
     */
    protected $salesState = 0;

    /**
     * availableForSale
     * 
     * @var bool
     */
    protected $availableForSale = false;

    /**
     * availableForRent
     * 
     * @var bool
     */
    protected $availableForRent = false;

    /**
     * availableForBusinessTransfer
     * 
     * @var bool
     */
    protected $availableForBusinessTransfer = false;

    /**
     * priceBefore
     * 
     * @var float
     */
    protected $priceBefore = 0.0;

    /**
     * priceAfter
     * 
     * @var float
     */
    protected $priceAfter = 0.0;

    /**
     * insuranceValue
     * 
     * @var float
     */
    protected $insuranceValue = 0.0;

    /**
     * runningCost
     * 
     * @var float
     */
    protected $runningCost = 0.0;

    /**
     * images
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $images = null;

    /**
     * introduction
     * 
     * @var string
     */
    protected $introduction = '';

    /**
     * centric/rural
     * 
     * @var int
     */
    protected $locationType = 0;

    /**
     * address
     * 
     * @var string
     */
    protected $address = '';

    /**
     * zip
     * 
     * @var string
     */
    protected $zip = '';

    /**
     * place
     * 
     * @var string
     */
    protected $place = '';

    /**
     * zone
     * 
     * @var string
     */
    protected $zone = '';

    /**
     * region
     * 
     * @var string
     */
    protected $region = '';

    /**
     * country
     * 
     * @var string
     */
    protected $country = '';

    /**
     * latitude
     * 
     * @var string
     */
    protected $latitude = '';

    /**
     * longitude
     * 
     * @var string
     */
    protected $longitude = '';

    /**
     * orientation
     * 
     * @var string
     */
    protected $orientation = '';

    /**
     * objectType
     * 
     * @var int
     */
    protected $objectType = 0;

    /**
     * houseType
     * 
     * @var int
     */
    protected $houseType = 0;

    /**
     * flatType
     * 
     * @var int
     */
    protected $flatType = 0;

    /**
     * landType
     * 
     * @var int
     */
    protected $landType = 0;

    /**
     * how many stars?
     * 
     * @var int
     */
    protected $classification = 0;

    /**
     * roomCount
     * 
     * @var float
     */
    protected $roomCount = 0.0;

    /**
     * isNew
     * 
     * @var bool
     */
    protected $isNew = false;

    /**
     * propertyAge
     * 
     * @var string
     */
    protected $propertyAge = '';

    /**
     * constructionArea
     * 
     * @var float
     */
    protected $constructionArea = 0.0;

    /**
     * usefulArea
     * 
     * @var string
     */
    protected $usefulArea = '';

    /**
     * state
     * 
     * @var int
     */
    protected $state = 0;

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the agentReference
     * 
     * @return string $agentReference
     */
    public function getAgentReference()
    {
        return $this->agentReference;
    }

    /**
     * Sets the agentReference
     * 
     * @param string $agentReference
     * @return void
     */
    public function setAgentReference($agentReference)
    {
        $this->agentReference = $agentReference;
    }

    /**
     * Returns the hasPriority
     * 
     * @return bool $hasPriority
     */
    public function getHasPriority()
    {
        return $this->hasPriority;
    }

    /**
     * Sets the hasPriority
     * 
     * @param bool $hasPriority
     * @return void
     */
    public function setHasPriority($hasPriority)
    {
        $this->hasPriority = $hasPriority;
    }

    /**
     * Returns the boolean state of hasPriority
     * 
     * @return bool
     */
    public function isHasPriority()
    {
        return $this->hasPriority;
    }

    /**
     * Returns the salesState
     * 
     * @return int $salesState
     */
    public function getSalesState()
    {
        return $this->salesState;
    }

    /**
     * Sets the salesState
     * 
     * @param int $salesState
     * @return void
     */
    public function setSalesState($salesState)
    {
        $this->salesState = $salesState;
    }

    /**
     * Returns the availableForSale
     * 
     * @return bool $availableForSale
     */
    public function getAvailableForSale()
    {
        return $this->availableForSale;
    }

    /**
     * Sets the availableForSale
     * 
     * @param bool $availableForSale
     * @return void
     */
    public function setAvailableForSale($availableForSale)
    {
        $this->availableForSale = $availableForSale;
    }

    /**
     * Returns the boolean state of availableForSale
     * 
     * @return bool
     */
    public function isAvailableForSale()
    {
        return $this->availableForSale;
    }

    /**
     * Returns the availableForRent
     * 
     * @return bool $availableForRent
     */
    public function getAvailableForRent()
    {
        return $this->availableForRent;
    }

    /**
     * Sets the availableForRent
     * 
     * @param bool $availableForRent
     * @return void
     */
    public function setAvailableForRent($availableForRent)
    {
        $this->availableForRent = $availableForRent;
    }

    /**
     * Returns the boolean state of availableForRent
     * 
     * @return bool
     */
    public function isAvailableForRent()
    {
        return $this->availableForRent;
    }

    /**
     * Returns the availableForBusinessTransfer
     * 
     * @return bool $availableForBusinessTransfer
     */
    public function getAvailableForBusinessTransfer()
    {
        return $this->availableForBusinessTransfer;
    }

    /**
     * Sets the availableForBusinessTransfer
     * 
     * @param bool $availableForBusinessTransfer
     * @return void
     */
    public function setAvailableForBusinessTransfer($availableForBusinessTransfer)
    {
        $this->availableForBusinessTransfer = $availableForBusinessTransfer;
    }

    /**
     * Returns the boolean state of availableForBusinessTransfer
     * 
     * @return bool
     */
    public function isAvailableForBusinessTransfer()
    {
        return $this->availableForBusinessTransfer;
    }

    /**
     * Returns the priceBefore
     * 
     * @return float $priceBefore
     */
    public function getPriceBefore()
    {
        return $this->priceBefore;
    }

    /**
     * Sets the priceBefore
     * 
     * @param float $priceBefore
     * @return void
     */
    public function setPriceBefore($priceBefore)
    {
        $this->priceBefore = $priceBefore;
    }

    /**
     * Returns the priceAfter
     * 
     * @return float $priceAfter
     */
    public function getPriceAfter()
    {
        return $this->priceAfter;
    }

    /**
     * Sets the priceAfter
     * 
     * @param float $priceAfter
     * @return void
     */
    public function setPriceAfter($priceAfter)
    {
        $this->priceAfter = $priceAfter;
    }

    /**
     * Returns the insuranceValue
     * 
     * @return float $insuranceValue
     */
    public function getInsuranceValue()
    {
        return $this->insuranceValue;
    }

    /**
     * Sets the insuranceValue
     * 
     * @param float $insuranceValue
     * @return void
     */
    public function setInsuranceValue($insuranceValue)
    {
        $this->insuranceValue = $insuranceValue;
    }

    /**
     * Returns the runningCost
     * 
     * @return float $runningCost
     */
    public function getRunningCost()
    {
        return $this->runningCost;
    }

    /**
     * Sets the runningCost
     * 
     * @param float $runningCost
     * @return void
     */
    public function setRunningCost($runningCost)
    {
        $this->runningCost = $runningCost;
    }

    /**
     * Returns the images
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }

    /**
     * Returns the locationType
     * 
     * @return int $locationType
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * Sets the locationType
     * 
     * @param int $locationType
     * @return void
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;
    }

    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the zip
     * 
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     * 
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the place
     * 
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     * 
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Returns the zone
     * 
     * @return string $zone
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Sets the zone
     * 
     * @param string $zone
     * @return void
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * Returns the region
     * 
     * @return string $region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets the region
     * 
     * @param string $region
     * @return void
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * Returns the country
     * 
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     * 
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Returns the latitude
     * 
     * @return string $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the latitude
     * 
     * @param string $latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns the longitude
     * 
     * @return string $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude
     * 
     * @param string $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Returns the orientation
     * 
     * @return string $orientation
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Sets the orientation
     * 
     * @param string $orientation
     * @return void
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    /**
     * Returns the objectType
     * 
     * @return int $objectType
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Sets the objectType
     * 
     * @param int $objectType
     * @return void
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * Returns the houseType
     * 
     * @return int $houseType
     */
    public function getHouseType()
    {
        return $this->houseType;
    }

    /**
     * Sets the houseType
     * 
     * @param int $houseType
     * @return void
     */
    public function setHouseType($houseType)
    {
        $this->houseType = $houseType;
    }

    /**
     * Returns the flatType
     * 
     * @return int $flatType
     */
    public function getFlatType()
    {
        return $this->flatType;
    }

    /**
     * Sets the flatType
     * 
     * @param int $flatType
     * @return void
     */
    public function setFlatType($flatType)
    {
        $this->flatType = $flatType;
    }

    /**
     * Returns the landType
     * 
     * @return int $landType
     */
    public function getLandType()
    {
        return $this->landType;
    }

    /**
     * Sets the landType
     * 
     * @param int $landType
     * @return void
     */
    public function setLandType($landType)
    {
        $this->landType = $landType;
    }

    /**
     * Returns the classification
     * 
     * @return int $classification
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets the classification
     * 
     * @param int $classification
     * @return void
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    /**
     * Returns the isNew
     * 
     * @return bool $isNew
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Sets the isNew
     * 
     * @param bool $isNew
     * @return void
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;
    }

    /**
     * Returns the boolean state of isNew
     * 
     * @return bool
     */
    public function isIsNew()
    {
        return $this->isNew;
    }

    /**
     * Returns the propertyAge
     * 
     * @return string $propertyAge
     */
    public function getPropertyAge()
    {
        return $this->propertyAge;
    }

    /**
     * Sets the propertyAge
     * 
     * @param string $propertyAge
     * @return void
     */
    public function setPropertyAge($propertyAge)
    {
        $this->propertyAge = $propertyAge;
    }

    /**
     * Returns the constructionArea
     * 
     * @return float $constructionArea
     */
    public function getConstructionArea()
    {
        return $this->constructionArea;
    }

    /**
     * Sets the constructionArea
     * 
     * @param float $constructionArea
     * @return void
     */
    public function setConstructionArea($constructionArea)
    {
        $this->constructionArea = $constructionArea;
    }

    /**
     * Returns the usefulArea
     * 
     * @return string $usefulArea
     */
    public function getUsefulArea()
    {
        return $this->usefulArea;
    }

    /**
     * Sets the usefulArea
     * 
     * @param string $usefulArea
     * @return void
     */
    public function setUsefulArea($usefulArea)
    {
        $this->usefulArea = $usefulArea;
    }

    /**
     * Returns the introduction
     * 
     * @return string introduction
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Sets the introduction
     * 
     * @param string $introduction
     * @return void
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the roomCount
     * 
     * @return float $roomCount
     */
    public function getRoomCount()
    {
        return $this->roomCount;
    }

    /**
     * Sets the roomCount
     * 
     * @param float $roomCount
     * @return void
     */
    public function setRoomCount($roomCount)
    {
        $this->roomCount = $roomCount;
    }

    /**
     * Returns the state
     * 
     * @return int state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the state
     * 
     * @param int $state
     * @return void
     */
    public function setState($state)
    {
        $this->state = $state;
    }
}
