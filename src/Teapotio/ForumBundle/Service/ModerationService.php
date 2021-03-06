<?php

/**
 * Copyright (c) Thomas Potaire
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @category   Teapotio
 * @package    ForumBundle
 * @author     Thomas Potaire
 */

namespace Teapotio\ForumBundle\Service;

use Teapotio\ForumBundle\Entity\Moderation;
use Teapotio\Base\ForumBundle\Service\ModerationService as BaseModerationService;

class ModerationService extends BaseModerationService
{
    public function createModeration()
    {
        return new Moderation();
    }

}