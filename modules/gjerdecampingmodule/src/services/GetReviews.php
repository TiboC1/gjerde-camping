<?php
/**
 * GetReviews.php
 */

namespace modules\gjerdecampingmodule\services;

use Craft;
use craft\base\Component;
use craft\db\Query;
use DateTime;


/**
 * GetReviews
 *
 * @author      Tibo Colman
 */
class GetReviews extends Component
{
    public function getReviews()
    {

        $result = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyAZEWlAbhqtIWCJpD-mqpYr7lA4q_qyjpI&place_id=ChIJjw5S_W4ZFEYR5zPqbnTjBhg');
        $result = json_decode($result);
        return $result;
    }
}
