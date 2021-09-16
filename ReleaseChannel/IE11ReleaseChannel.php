<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\IE11ReleaseChannel\ReleaseChannel;

use Piwik\Plugins\CoreUpdater\ReleaseChannel;

class IE11ReleaseChannel extends ReleaseChannel
{
    public function getId()
    {
        return 'latest_matomo_ie11';
    }

    public function getName()
    {
        return 'Internet Explorer 11 Compatible';
    }

    public function getUrlToCheckForLatestAvailableVersion()
    {
        return 'https://builds.matomo.org/latest_matomo_ie11';
    }

    public function getOrder()
    {
        return 1;
    }
}
