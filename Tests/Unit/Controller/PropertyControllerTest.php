<?php
namespace Synac\Realer\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Roman Büchler <rb@synac.com>
 */
class PropertyControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Synac\Realer\Controller\PropertyController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Synac\Realer\Controller\PropertyController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function listActionFetchesAllPropertiesFromRepositoryAndAssignsThemToView()
    {

        $allProperties = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $propertyRepository = $this->getMockBuilder(\Synac\Realer\Domain\Repository\PropertyRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $propertyRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProperties));
        $this->inject($this->subject, 'propertyRepository', $propertyRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('properties', $allProperties);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPropertyToView()
    {
        $property = new \Synac\Realer\Domain\Model\Property();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('property', $property);

        $this->subject->showAction($property);
    }
}
