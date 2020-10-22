<?php
/**
 * Copyright © 2020-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Twig\Node;


use Twig\Compiler;

interface ModuleNodeInterface
{
    /**
     * @param $index
     *
     * @return mixed
     */
    public function setIndex($index);

    /**
     * @param Compiler $compiler
     *
     * @return void
     */
    public function compile(Compiler $compiler): void;
}
