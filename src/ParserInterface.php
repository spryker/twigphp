<?php
/**
 * Copyright © 2020-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Twig;


use Twig\Node\BlockNode;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\MacroNode;
use Twig\Node\ModuleNode;
use Twig\Node\ModuleNodeInterface;
use Twig\Node\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ParserInterface
{
    public function getVarName(): string;

    public function parse(TokenStream $stream, $test = null, bool $dropNeedle = false): ModuleNodeInterface;

    public function subparse($test, bool $dropNeedle = false): Node;

    public function getBlockStack(): array;

    public function peekBlockStack();

    public function popBlockStack(): void;

    public function pushBlockStack($name): void;

    public function hasBlock(string $name): bool;

    public function getBlock(string $name): Node;

    public function setBlock(string $name, BlockNode $value): void;

    public function hasMacro(string $name): bool;

    public function setMacro(string $name, MacroNode $node): void;

    public function addTrait($trait): void;

    public function hasTraits(): bool;

    public function embedTemplate(ModuleNodeInterface $template);

    public function addImportedSymbol(string $type, string $alias, string $name = null, AbstractExpression $node = null): void;

    public function getImportedSymbol(string $type, string $alias);

    public function isMainScope(): bool;

    public function pushLocalScope(): void;

    public function popLocalScope(): void;

    public function getExpressionParser();

    public function getParent(): ?Node;

    public function setParent(?Node $parent): void;

    public function getStream(): TokenStream;

    public function getCurrentToken(): Token;
}
