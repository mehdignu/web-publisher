<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Core Bundle.
 *
 * Copyright 2017 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2017 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\CoreBundle\Factory;

use SWP\Bundle\CoreBundle\Model\CompositePublishAction;

final class PublishActionFactory implements PublishActionFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createWithDestinations(array $destinations)
    {
        return new CompositePublishAction($destinations);
    }
}
