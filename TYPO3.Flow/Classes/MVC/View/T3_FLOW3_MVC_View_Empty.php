<?php
declare(encoding = 'utf-8');

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * An empty view - a special case.
 *
 * @package    Framework
 * @subpackage MVC
 * @version    $Id:T3_FLOW3_MVC_View_Empty.php 467 2008-02-06 19:34:56Z robert $
 * @copyright  Copyright belongs to the respective authorst
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class T3_FLOW3_MVC_View_Empty extends T3_FLOW3_MVC_View_Abstract {

	/**
	 * Renders the empty view
	 *
	 * @return string An empty string
	 * @author Robert Lemke <robert@typo3.org>
	 */
	public function render() {
		return '';
	}
}
?>