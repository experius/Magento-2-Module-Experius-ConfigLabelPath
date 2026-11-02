<?php
/**
 * A Magento 2 module named Experius/ConfigLabelPath
 * Copyright (C) 2016 Maikel Martens
 *
 * This file included in Experius/ConfigLabelPath is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Experius\ConfigLabelPath\Plugin\Magento\Config\Model\Config\Structure\Element;


class Field {

	public function afterGetComment(
		\Magento\Config\Model\Config\Structure\Element\Field $field,
		$result
	){
		$configPath = $field->getConfigPath() ?: $field->getPath();

        return sprintf(
            '<span style="color: #808080; font-size: 1.1rem;">%s</span><br/>%s',
            htmlspecialchars((string) $configPath, ENT_QUOTES, 'UTF-8'),
            $result
        );
	}
}
