<?php

/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rocketeer\Strategies\Dependencies;

use Rocketeer\Strategies\AbstractDependenciesStrategy;

class NpmStrategy extends AbstractDependenciesStrategy implements DependenciesStrategyInterface
{
    /**
     * @var string
     */
    protected $description = 'Installs dependencies with NPM';

    /**
     * The name of the binary.
     *
     * @var string
     */
    protected $binary = 'npm';

    /**
     * @var array
     */
    protected $options = [
        'flags.install' => '--no-progress',
    ];
}
