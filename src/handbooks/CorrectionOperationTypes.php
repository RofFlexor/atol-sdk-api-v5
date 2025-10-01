<?php

namespace Platron\AtolV5\handbooks;

use MyCLabs\Enum\Enum;

class CorrectionOperationTypes extends Enum
{
	const
		SELL_CORRECTION = 'sell_correction',
		BUY_CORRECTION = 'buy_correction',
        SELL_REFUND_CORRECTION = 'sell_refund_correction';
}