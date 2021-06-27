<?php
/**
 * Gjerde Camping module for Craft CMS 3.x
 *
 * custom site functionality
 *
 * @link      www.nordicNoir.eu
 * @copyright Copyright (c) 2021 Tibo C.
 */

namespace modules\gjerdecampingmodule\controllers;

use modules\gjerdecampingmodule\GjerdeCampingModule;

use Craft;
use craft\web\Controller;

/**
 * Reviews Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your module’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Tibo C.
 * @package   GjerdeCampingModule
 * @since     1
 */
class ReviewsController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our module's index action URL,
     * e.g.: actions/gjerde-camping-module/reviews
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyAZEWlAbhqtIWCJpD-mqpYr7lA4q_qyjpI&place_id=ChIJjw5S_W4ZFEYR5zPqbnTjBhg');
        $result = json_decode($result);
        return $result;
    }

    /**
     * Handle a request going to our module's actionDoSomething URL,
     * e.g.: actions/gjerde-camping-module/reviews/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the ReviewsController actionDoSomething() method';

        return $result;
    }
}
