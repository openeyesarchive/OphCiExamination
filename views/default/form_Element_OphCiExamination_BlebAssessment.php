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
<div class="element-fields element-eyes row">
	<?php echo $form->hiddenInput($element, 'eye_id', false, array('class' => 'sideField')); ?>
	<script type="text/javascript">
		var idToImagesArr = {
			'Element_OphCiExamination_BlebAssessment_left_central_area_id':'centralArea',
			'Element_OphCiExamination_BlebAssessment_right_central_area_id':'centralArea',
			'Element_OphCiExamination_BlebAssessment_left_max_area_id':'maxArea',
			'Element_OphCiExamination_BlebAssessment_right_max_area_id':'maxArea',
			'Element_OphCiExamination_BlebAssessment_left_height_id':'height',
			'Element_OphCiExamination_BlebAssessment_right_height_id':'height',
			'Element_OphCiExamination_BlebAssessment_left_vasc_id':'vascularity',
			'Element_OphCiExamination_BlebAssessment_right_vasc_id':'vascularity'
		};
		var FieldImages = <?php
			$fieldImages = array(
				'height'=>OphCiExamination_BlebAssessment_Height::model()->getFieldImages(),
				'maxArea'=>OphCiExamination_BlebAssessment_MaxArea::model()->getFieldImages(),
				'centralArea'=>OphCiExamination_BlebAssessment_CentralArea::model()->getFieldImages(),
				'vascularity'=>OphCiExamination_BlebAssessment_Vascularity::model()->getFieldImages()
			);
			echo json_encode($fieldImages) ;
			 ?>;
		var oeFieldImages = new OpenEyes.UI.FieldImages({idToImages:idToImagesArr,images:FieldImages});
		$(document).ready(function() {
			oeFieldImages.setFieldButtons();
		});
	</script>
	<?php

		$centralAreas = CHtml::listData(
			OphCiExamination_BlebAssessment_CentralArea::model()->activeOrPk(
				array($element->right_central_area_id,$element->left_central_area_id))->findAll(array('order' => 'display_order')
				)
			,'id','area'
		);
		$maxAreas = CHtml::listData(
			OphCiExamination_BlebAssessment_MaxArea::model()->activeOrPk(
				array($element->right_max_area_id,$element->left_max_area_id))->findAll(array('order' => 'display_order')
				)
			,'id','area'
		);
		$heights = CHtml::listData(
			OphCiExamination_BlebAssessment_Height::model()->activeOrPk(
				array($element->right_height_id,$element->left_height_id))->findAll(array('order' => 'display_order')
				)
			,'id','height'
		);
		$vascularities = CHtml::listData(
			OphCiExamination_BlebAssessment_Vascularity::model()->activeOrPk(
				array($element->right_vasc_id,$element->left_vasc_id))->findAll(array('order' => 'display_order')
				)
			,'id','vascularity'
		);
	?>
	<div class="element-eye right-eye column left side<?php if (!$element->hasRight()) {?> inactive<?php }?>" data-side="right">
		<div class="active-form">
			<a href="#" class="icon-remove-side remove-side">Remove side</a>
			<table cellspacing="0" width="500">
				<thead>
				<tr>
					<th width="25%">Area (Central)</th>
					<th width="25%">Area (Maximal)</th>
					<th width="25%">Height</th>
					<th width="25%">Vascularity</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<!-- Area (Central) -->
					<td>
						<?php
						echo $form->dropDownList($element, 'right_central_area_id', $centralAreas
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 6)
						); ?>
					</td>
					<!-- Area (Maximal) -->
					<td>
						<?php
						echo $form->dropDownList($element, 'right_max_area_id', $maxAreas
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 6)
						); ?>
					</td>

					<!-- Height -->
					<td>
						<?php
						echo $form->dropDownList($element, 'right_height_id', $heights
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 6)
						); ?>
					</td>

					<!-- Vascularity -->
					<td>
						<?php
						echo $form->dropDownList($element, 'right_vasc_id', $vascularities
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 6)
						); ?>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="inactive-form">
			<div class="add-side">
				<a href="#">
					Add right side <span class="icon-add-side"></span>
				</a>
			</div>
		</div>
	</div>
	<div class="element-eye left-eye column right side<?php if (!$element->hasLeft()) {?> inactive<?php }?>" data-side="left">
		<div class="active-form">
			<a href="#" class="icon-remove-side remove-side">Remove side</a>
			<table cellspacing="0" width="500">
				<thead>
				<tr>
					<th width="25%">Area (Central)</th>
					<th width="25%">Area (Maximal)</th>
					<th width="25%">Height</th>
					<th width="25%">Vascularity</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<!-- Area (Central) -->
					<td>
						<?php
						echo $form->dropDownList($element, 'left_central_area_id', $centralAreas
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 6)
						); ?>
					</td>

					<!-- Area (Maximal) -->
					<td>
						<?php
						echo $form->dropDownList($element, 'left_max_area_id', $maxAreas
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 4)
						); ?>
					</td>

					<!-- Height -->
					<td>
						<?php
						echo $form->dropDownList($element, 'left_height_id', $heights
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 4)
						); ?>
					</td>

					<!-- Vascularity -->
					<td>
						<?php
						echo $form->dropDownList($element, 'left_vasc_id', $vascularities
							, array('empty' => 'NR', 'nowrapper' => true), false, array('label' => 0, 'field' => 6)
						); ?>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="inactive-form">
			<div class="add-side">
				<a href="#">
					Add left side <span class="icon-add-side"></span>
				</a>
			</div>
		</div>
	</div>
</div>
