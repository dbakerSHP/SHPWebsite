<?php

/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 10/7/15
 * Time: 12:19 PM
 */

namespace SiteBundle\DQL;

use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Parser;

class GroupConcat extends FunctionNode
{
	public $isDistinct = false;
	public $expression = null;

	public function getSql(SqlWalker $sqlWalker)
	{
		return 'GROUP_CONCAT(' .
		($this->isDistinct ? 'DISTINCT ' : '') .
		$this->expression->dispatch($sqlWalker) .
		')';
	}

	public function parse(Parser $parser)
	{

		$parser->match(Lexer::T_IDENTIFIER);
		$parser->match(Lexer::T_OPEN_PARENTHESIS);

		$lexer = $parser->getLexer();
		if ($lexer->isNextToken(Lexer::T_DISTINCT)) {
			$parser->match(Lexer::T_DISTINCT);

			$this->isDistinct = true;
		}

		$this->expression = $parser->SingleValuedPathExpression();

		$parser->match(Lexer::T_CLOSE_PARENTHESIS);
	}
}