<?php
namespace NamelessCoder\GridelementsFlux\Controller;
/*****************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Claus Due <claus@namelesscoder.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 *****************************************************************/

use FluidTYPO3\Flux\Controller\AbstractFluxController;

/**
 * Class CoreContentController
 *
 * Controller for rendering core content elements. By turning the
 * "gridelements" CType into a core content type we gain full
 * control over a Fluid-based rendering process that can render
 * Gridelements using pure Fluid.
 *
 * @package NamelessCoder\GridelementsFlux\Controller
 */
class CoreContentController extends AbstractFluxController {

	/**
	 * Action called when a Gridelements record is being rendered.
	 *
	 * @return void
	 */
	public function gridelementsAction() {
		return 'dummy';
	}

}
