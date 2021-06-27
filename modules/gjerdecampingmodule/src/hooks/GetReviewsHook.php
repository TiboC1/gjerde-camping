<?php

namespace modules\gjerdecampingmodule\hooks;

use Craft;
use modules\gjerdecampingmodule\services\GetReviews;

/**
 * Class PaidHook
 *
 * @package modules\gjerdecampingmodule\hooks
 * @author  Tibo Colman
 */
class GetReviewsHook
{
    public static function indexHook(array &$context)
    {
        $result = GetReviews::instance()->getReviews();
        $context['reviews'] = $result;
    }
}
