<?php
namespace NamelessCoder\GridelementsFlux\Provider;

use FluidTYPO3\Flux\Form\Container\Grid;
use FluidTYPO3\Flux\Provider\ProviderInterface;
use FluidTYPO3\Flux\Provider\AbstractProvider;
use FluidTYPO3\Flux\Form;

/**
 * Class GridelementsProvider
 *
 * Provides values and rendering instructions for gridelements
 * content types based on settings of the content record.
 *
 * @package NamelessCoder\GridelementsFlux\Provider
 */
class GridelementsProvider extends AbstractProvider implements ProviderInterface {

	/**
	 * @var string
	 */
	protected $contentObjectType = 'gridelements';

	/**
	 * @var string
	 */
	protected $tableName = 'tt_content';

	/**
	 * @var string
	 */
	protected $fieldName = 'pi_flexform';

	/**
	 * @param array $row
	 * @return Form|NULL
	 */
	public function getForm(array $row) {
		return parent::getForm($row);
	}

	/**
	 * Gets a Grid instance with rows and columns as configured
	 * in the selected gridelements content element type.
	 *
	 * @param array $row
	 * @return Grid
	 */
	public function getGrid(array $row) {
		$settings = array(); // @TODO: parse gridelements grid setup to array usable by Grid object constructor
		$grid = Grid::create($settings);
		return $grid;
	}

	/**
	 * Gets the template source code associated with the currently
	 * selected element type.
	 *
	 * @param array $row
	 * @return string|NULL
	 */
	public function getTemplateSource(array $row) {
		return parent::getTemplateSource($row);
	}

}
