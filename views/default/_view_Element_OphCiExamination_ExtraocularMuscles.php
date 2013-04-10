<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>
	<div class="cols2 clearfix">
		<div class="left eventDetail">
			<?php if ($element->hasRight()) {?>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('right_eom_id')?>
					</div>
					<div class="data">
						<?php echo $element->rightEOM->name?>
					</div>
				</div>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('right_ct_distance_id')?>
					</div>
					<div class="data">
						<?php echo $element->rightCTDistance->name?>
					</div>
				</div>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('right_ct_near_id')?>
					</div>
					<div class="data">
						<?php echo $element->rightCTNear->name?>
					</div>
				</div>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('right_details')?>
					</div>
					<div class="data">
						<?php echo $element->right_details?>
					</div>
				</div>
			<?php }else{?>
				<div>
					<div class="data">
						Not recorded
					</div>
				</div>
			<?php }?>
		</div>
		<div class="right eventDetail">
			<?php if ($element->hasLeft()) {?>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('left_eom_id')?>
					</div>
					<div class="data">
						<?php echo $element->leftEOM->name?>
					</div>
				</div>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('left_ct_distance_id')?>
					</div>
					<div class="data">
						<?php echo $element->leftCTDistance->name?>
					</div>
				</div>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('left_ct_near_id')?>
					</div>
					<div class="data">
						<?php echo $element->leftCTNear->name?>
					</div>
				</div>
				<div>
					<div class="label">
						<?php echo $element->getAttributeLabel('left_details')?>
					</div>
					<div class="data">
						<?php echo $element->left_details?>
					</div>
				</div>
			<?php }else{?>
				<div>
					<div class="data">
						Not recorded
					</div>
				</div>
			<?php }?>
		</div>
	</div>