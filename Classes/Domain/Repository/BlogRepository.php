<?php
namespace Gosign\MyBlog\Domain\Repository;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Izhar ul haq <izhar@eagles.gosign.de>, Gosign
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
 ***************************************************************/

/**
 * Content repository for table tx_goeasyslider_domain_model_slides
 *
 */
class BlogRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {
	
	/**
	* get slides by uid
	*
	* @return Objects
	*/
	public function getSlides($uid) {
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);
		$query->matching(
			$query->equals('tt_content_uid', $uid)
		);
	
		return $query->execute();
	}

}

?>