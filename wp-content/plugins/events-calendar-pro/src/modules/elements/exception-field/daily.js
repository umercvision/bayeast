/**
 * External dependencies
 */
import React, { Fragment } from 'react';
import PropTypes from 'prop-types';
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import {
	TypePicker,
	SeriesEnds,
} from '@moderntribe/events-pro/elements';
import { constants } from '@moderntribe/events-pro/data/blocks';
import { options } from '@moderntribe/events-pro/data/blocks/exception';

const DailyField = ( { index } ) => {
	return (
		<Fragment>
			<TypePicker
				blockType={ constants.EXCEPTION }
				index={ index }
				options={ options.EXCEPTION_OCCURRENCE_OPTIONS }
				rowLabel={ __( 'Every', 'tribe-events-calendar-pro' ) }
			/>
			<SeriesEnds
				blockType={ constants.EXCEPTION }
				index={ index }
				rowLabel={ __( 'Exception ends', 'tribe-events-calendar-pro' ) }
			/>
		</Fragment>
	);
};

DailyField.propTypes = {
	index: PropTypes.number.isRequired,
};

export default DailyField;
