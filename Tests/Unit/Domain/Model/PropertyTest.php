<?php
namespace Synac\Realer\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Roman Büchler <rb@synac.com>
 */
class PropertyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Synac\Realer\Domain\Model\Property
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Synac\Realer\Domain\Model\Property();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAgentReferenceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAgentReference()
        );
    }

    /**
     * @test
     */
    public function setAgentReferenceForStringSetsAgentReference()
    {
        $this->subject->setAgentReference('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'agentReference',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasPriorityReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasPriority()
        );
    }

    /**
     * @test
     */
    public function setHasPriorityForBoolSetsHasPriority()
    {
        $this->subject->setHasPriority(true);

        self::assertAttributeEquals(
            true,
            'hasPriority',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSalesStateReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSalesState()
        );
    }

    /**
     * @test
     */
    public function setSalesStateForIntSetsSalesState()
    {
        $this->subject->setSalesState(12);

        self::assertAttributeEquals(
            12,
            'salesState',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAvailableForSaleReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAvailableForSale()
        );
    }

    /**
     * @test
     */
    public function setAvailableForSaleForBoolSetsAvailableForSale()
    {
        $this->subject->setAvailableForSale(true);

        self::assertAttributeEquals(
            true,
            'availableForSale',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAvailableForRentReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAvailableForRent()
        );
    }

    /**
     * @test
     */
    public function setAvailableForRentForBoolSetsAvailableForRent()
    {
        $this->subject->setAvailableForRent(true);

        self::assertAttributeEquals(
            true,
            'availableForRent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAvailableForBusinessTransferReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAvailableForBusinessTransfer()
        );
    }

    /**
     * @test
     */
    public function setAvailableForBusinessTransferForBoolSetsAvailableForBusinessTransfer()
    {
        $this->subject->setAvailableForBusinessTransfer(true);

        self::assertAttributeEquals(
            true,
            'availableForBusinessTransfer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceBeforeReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPriceBefore()
        );
    }

    /**
     * @test
     */
    public function setPriceBeforeForFloatSetsPriceBefore()
    {
        $this->subject->setPriceBefore(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'priceBefore',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getInsuranceValueReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getInsuranceValue()
        );
    }

    /**
     * @test
     */
    public function setInsuranceValueForFloatSetsInsuranceValue()
    {
        $this->subject->setInsuranceValue(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'insuranceValue',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getRunningCostReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getRunningCost()
        );
    }

    /**
     * @test
     */
    public function setRunningCostForFloatSetsRunningCost()
    {
        $this->subject->setRunningCost(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'runningCost',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getImagesReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImages()
        );
    }

    /**
     * @test
     */
    public function setImagesForFileReferenceSetsImages()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImages($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'images',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIntroductionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIntroduction()
        );
    }

    /**
     * @test
     */
    public function setIntroductionForStringSetsIntroduction()
    {
        $this->subject->setIntroduction('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'introduction',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLocationTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getLocationType()
        );
    }

    /**
     * @test
     */
    public function setLocationTypeForIntSetsLocationType()
    {
        $this->subject->setLocationType(12);

        self::assertAttributeEquals(
            12,
            'locationType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );
    }

    /**
     * @test
     */
    public function setZipForStringSetsZip()
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zip',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForStringSetsPlace()
    {
        $this->subject->setPlace('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getZoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZone()
        );
    }

    /**
     * @test
     */
    public function setZoneForStringSetsZone()
    {
        $this->subject->setZone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRegionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRegion()
        );
    }

    /**
     * @test
     */
    public function setRegionForStringSetsRegion()
    {
        $this->subject->setRegion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'region',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForStringSetsCountry()
    {
        $this->subject->setCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'country',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLatitudeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLatitude()
        );
    }

    /**
     * @test
     */
    public function setLatitudeForStringSetsLatitude()
    {
        $this->subject->setLatitude('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'latitude',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLongitudeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLongitude()
        );
    }

    /**
     * @test
     */
    public function setLongitudeForStringSetsLongitude()
    {
        $this->subject->setLongitude('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'longitude',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrientationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrientation()
        );
    }

    /**
     * @test
     */
    public function setOrientationForStringSetsOrientation()
    {
        $this->subject->setOrientation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'orientation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getViewReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getView()
        );
    }

    /**
     * @test
     */
    public function setViewForStringSetsView()
    {
        $this->subject->setView('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'view',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasRuralZoneReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasRuralZone()
        );
    }

    /**
     * @test
     */
    public function setHasRuralZoneForBoolSetsHasRuralZone()
    {
        $this->subject->setHasRuralZone(true);

        self::assertAttributeEquals(
            true,
            'hasRuralZone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getObjectTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getObjectType()
        );
    }

    /**
     * @test
     */
    public function setObjectTypeForIntSetsObjectType()
    {
        $this->subject->setObjectType(12);

        self::assertAttributeEquals(
            12,
            'objectType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFlatTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getFlatType()
        );
    }

    /**
     * @test
     */
    public function setFlatTypeForIntSetsFlatType()
    {
        $this->subject->setFlatType(12);

        self::assertAttributeEquals(
            12,
            'flatType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHouseTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getHouseType()
        );
    }

    /**
     * @test
     */
    public function setHouseTypeForIntSetsHouseType()
    {
        $this->subject->setHouseType(12);

        self::assertAttributeEquals(
            12,
            'houseType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLandTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getLandType()
        );
    }

    /**
     * @test
     */
    public function setLandTypeForIntSetsLandType()
    {
        $this->subject->setLandType(12);

        self::assertAttributeEquals(
            12,
            'landType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIsNewReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIsNew()
        );
    }

    /**
     * @test
     */
    public function setIsNewForBoolSetsIsNew()
    {
        $this->subject->setIsNew(true);

        self::assertAttributeEquals(
            true,
            'isNew',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyAgeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPropertyAge()
        );
    }

    /**
     * @test
     */
    public function setPropertyAgeForStringSetsPropertyAge()
    {
        $this->subject->setPropertyAge('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'propertyAge',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLandAreaReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getLandArea()
        );
    }

    /**
     * @test
     */
    public function setLandAreaForFloatSetsLandArea()
    {
        $this->subject->setLandArea(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'landArea',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getConstructionAreaReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getConstructionArea()
        );
    }

    /**
     * @test
     */
    public function setConstructionAreaForFloatSetsConstructionArea()
    {
        $this->subject->setConstructionArea(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'constructionArea',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getUsefulAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUsefulArea()
        );
    }

    /**
     * @test
     */
    public function setUsefulAreaForStringSetsUsefulArea()
    {
        $this->subject->setUsefulArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'usefulArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClassificationReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getClassification()
        );
    }

    /**
     * @test
     */
    public function setClassificationForIntSetsClassification()
    {
        $this->subject->setClassification(12);

        self::assertAttributeEquals(
            12,
            'classification',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStateReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getState()
        );
    }

    /**
     * @test
     */
    public function setStateForIntSetsState()
    {
        $this->subject->setState(12);

        self::assertAttributeEquals(
            12,
            'state',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRoomCountReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getRoomCount()
        );
    }

    /**
     * @test
     */
    public function setRoomCountForFloatSetsRoomCount()
    {
        $this->subject->setRoomCount(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'roomCount',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getSleepingRoomCountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSleepingRoomCount()
        );
    }

    /**
     * @test
     */
    public function setSleepingRoomCountForIntSetsSleepingRoomCount()
    {
        $this->subject->setSleepingRoomCount(12);

        self::assertAttributeEquals(
            12,
            'sleepingRoomCount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasHallReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasHall()
        );
    }

    /**
     * @test
     */
    public function setHasHallForBoolSetsHasHall()
    {
        $this->subject->setHasHall(true);

        self::assertAttributeEquals(
            true,
            'hasHall',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasCellarReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasCellar()
        );
    }

    /**
     * @test
     */
    public function setHasCellarForBoolSetsHasCellar()
    {
        $this->subject->setHasCellar(true);

        self::assertAttributeEquals(
            true,
            'hasCellar',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasStorageReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasStorage()
        );
    }

    /**
     * @test
     */
    public function setHasStorageForBoolSetsHasStorage()
    {
        $this->subject->setHasStorage(true);

        self::assertAttributeEquals(
            true,
            'hasStorage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasBalconyReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasBalcony()
        );
    }

    /**
     * @test
     */
    public function setHasBalconyForBoolSetsHasBalcony()
    {
        $this->subject->setHasBalcony(true);

        self::assertAttributeEquals(
            true,
            'hasBalcony',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasElevatorReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasElevator()
        );
    }

    /**
     * @test
     */
    public function setHasElevatorForBoolSetsHasElevator()
    {
        $this->subject->setHasElevator(true);

        self::assertAttributeEquals(
            true,
            'hasElevator',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasGarageReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasGarage()
        );
    }

    /**
     * @test
     */
    public function setHasGarageForBoolSetsHasGarage()
    {
        $this->subject->setHasGarage(true);

        self::assertAttributeEquals(
            true,
            'hasGarage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGarageCountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getGarageCount()
        );
    }

    /**
     * @test
     */
    public function setGarageCountForIntSetsGarageCount()
    {
        $this->subject->setGarageCount(12);

        self::assertAttributeEquals(
            12,
            'garageCount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasChimneyReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasChimney()
        );
    }

    /**
     * @test
     */
    public function setHasChimneyForBoolSetsHasChimney()
    {
        $this->subject->setHasChimney(true);

        self::assertAttributeEquals(
            true,
            'hasChimney',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasPoolReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasPool()
        );
    }

    /**
     * @test
     */
    public function setHasPoolForBoolSetsHasPool()
    {
        $this->subject->setHasPool(true);

        self::assertAttributeEquals(
            true,
            'hasPool',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHasBarbecueReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHasBarbecue()
        );
    }

    /**
     * @test
     */
    public function setHasBarbecueForBoolSetsHasBarbecue()
    {
        $this->subject->setHasBarbecue(true);

        self::assertAttributeEquals(
            true,
            'hasBarbecue',
            $this->subject
        );
    }
}
