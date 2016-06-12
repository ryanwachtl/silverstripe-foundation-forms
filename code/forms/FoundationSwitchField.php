<?php

/**
 * FoundationSwitchField
 * Displays a Foundation Switch/Toggle Field
 *
 * <b>Usage</b>
 *
 * <code>
 * FoundationSwitchField::create('SwitchField', 'SwitchField', array(
 *	0	=> 'Off',
 *	1	=> 'On'
 * ))->addExtraClass('large round')
 * </code>
 *
 * @author Martijn van Nieuwenhoven <info@axyrmedia.nl>
 * @package foundationforms
 */
class FoundationSwitchField extends OptionsetField {

	/**
	 * Gets the first two items from source array, since SwitchField only works with two values.
	 *
	 * @return array
	 */
	public function getSource() {
		if (is_array($this->source)) {
			if (count($this->source) != 2) {
				user_error('FoundationSwitchField::getSource(): accepts only 2 options', E_USER_ERROR);
			}
			return array_slice($this->source, 0, 2);
		}
	}
}
