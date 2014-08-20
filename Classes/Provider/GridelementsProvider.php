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

	const FIELDNAME_TEMPLATESOURCE = 'tx_gridelementsflux_templatesource';
	const FIELDNAME_TEMPLATEFILE = 'tx_gridelementsflux_templatefile';

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
		if (FALSE === empty($row[self::FIELDNAME_TEMPLATESOURCE])) {
			// Record has defined a template source that should be used. Template source
			// may or may not contain a Configuration section; if none is contained, the
			// element is assumed to have no Form attached (e.g. getForm() returns NULL).
			return $row[self::FIELDNAME_TEMPLATESOURCE];
		}
		return parent::getTemplateSource($row);
	}

}
