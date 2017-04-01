<?php
/**
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / App / Module / Hello World / Config
 */
namespace PH7;

defined('PH7') or die('Restricted access');

use
PH7\Framework\Layout\Html\Design,
PH7\Framework\Mvc\Router\Uri,
PH7\Framework\Url\Header;

class Permission extends PermissionCore
{
    public function __construct()
    {
        parent::__construct();

        /*
         * This file is not required, It serves the permissions of the module.
         * pH7CMS includes this file only if it exists.
         *
         * Example of Code:
         * if (!UserCore::auth() && ($this->registry->controller === 'HelloWorldController')) {
         *     Header::redirect(
         *         Uri::get('user','main','login'),
         *         $this->signInMsg(),
         *         Design::ERROR_TYPE
         *     );
         * }
         */
    }
}
