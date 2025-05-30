#!/usr/bin/env php
<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfig;

$rules = [
	'@PhpCsFixer' => true,
	'@PER-CS' => true,
	'@PSR12' => true,
	'@PHP82Migration' => true,
	'array_indentation' => true,
	'combine_consecutive_unsets' => true,
	'cast_spaces' => true,
	'class_attributes_separation' => [
		'elements' =>['const' => 'one', 'method' => 'one', 'property' => 'one', 'trait_import' => 'none', 'case' => 'none'],
	],
	'single_quote' => true,
	'multiline_whitespace_before_semicolons' => [
		'strategy' => 'no_multi_line',
	],
	'array_syntax' => ['syntax' => 'short'],
	'binary_operator_spaces' => [
		'default' => 'single_space',
		'operators' => ['=>' => null],
	],
	'align_multiline_comment' => false,
	'line_ending' => true,
	'full_opening_tag' => true,
	'indentation_type' => true,
	'braces' => [
		'allow_single_line_closure' => true,
	],
	'declare_equal_normalize' => true,
	'function_typehint_space' => true,
	'single_line_comment_style' => ['comment_types' => ['hash']],
	'include' => true,
	'lowercase_cast' => true,
	'no_multiline_whitespace_around_double_arrow' => true,
	'no_spaces_around_offset' => true,
	'no_whitespace_before_comma_in_array' => true,
	'no_whitespace_in_blank_line' => true,
	'object_operator_without_whitespace' => true,
	'ternary_operator_spaces' => true,
	'trim_array_spaces' => true,
	'unary_operator_spaces' => true,
	'whitespace_after_comma_in_array' => true,
	'space_after_semicolon' => true,
	'no_empty_statement' => true,
	'no_unneeded_control_parentheses' => true,
	'no_unneeded_braces' => true,
	'no_unused_imports' => true,
	'protected_to_private' => true,
	'yoda_style' => false,
	'blank_line_after_namespace' => true,
	'blank_line_after_opening_tag' => true,
	'blank_line_before_statement' => [
		'statements' => ['return'],
	],
	'class_definition' => true,
	'concat_space' => [
		'spacing' => 'one',
	],
	'no_short_bool_cast' => true,
	'no_singleline_whitespace_before_semicolons' => true,
	'elseif' => true,
	'encoding' => true,
	'fully_qualified_strict_types' => true,
	'function_declaration' => true,
	'type_declaration_spaces' => true,
	'heredoc_to_nowdoc' => true,
	'increment_style' => ['style' => 'post'],
	'linebreak_after_opening_tag' => true,
	'constant_case' => true,
	'lowercase_keywords' => true,
	'lowercase_static_reference' => true,
	'magic_method_casing' => true,
	'magic_constant_casing' => true,
	'method_argument_space' => true,
	'native_function_casing' => true,
	'no_alias_functions' => true,
	'no_blank_lines_after_class_opening' => true,
	'no_blank_lines_after_phpdoc' => true,
	'no_closing_tag' => true,
	'no_empty_phpdoc' => true,
	'no_leading_import_slash' => true,
	'no_leading_namespace_whitespace' => true,
	'no_mixed_echo_print' => [
		'use' => 'echo',
	],
	'no_spaces_after_function_name' => true,
	'spaces_inside_parentheses' => true,
	'no_trailing_comma_in_singleline' => true,
	'no_trailing_whitespace' => true,
	'no_trailing_whitespace_in_comment' => true,
	'no_unreachable_default_argument_value' => true,
	'no_useless_return' => true,
	'normalize_index_brace' => true,
	'not_operator_with_successor_space' => false,
	'ordered_imports' => ['sort_algorithm' => 'alpha'],
	'phpdoc_indent' => true,
	'general_phpdoc_tag_rename' => true,
	'phpdoc_inline_tag_normalizer' => true,
	'phpdoc_tag_type' => true,
	'phpdoc_no_access' => true,
	'phpdoc_no_package' => true,
	'phpdoc_no_useless_inheritdoc' => true,
	'phpdoc_scalar' => true,
	'phpdoc_single_line_var_spacing' => true,
	'phpdoc_summary' => true,
	'phpdoc_to_comment' => true,
	'phpdoc_trim' => true,
	'phpdoc_types' => true,
	'phpdoc_var_without_name' => true,
	'psr_autoloading' => true,
	'self_accessor' => true,
	'short_scalar_cast' => true,
	'simplified_null_return' => false,
	'single_blank_line_at_eof' => true,
	'blank_lines_before_namespace' => true,
	'single_class_element_per_statement' => true,
	'single_import_per_statement' => true,
	'single_line_after_imports' => true,
	'standardize_not_equals' => true,
	'switch_case_semicolon_to_colon' => true,
	'switch_case_space' => true,
	'trailing_comma_in_multiline' => true,
	'visibility_required' => [
		'elements' => ['method', 'property'],
	],
];

$finder = Finder::create()
	->in(__DIR__)
	->name('*.php')
	->notName('*.blade.php')
	->ignoreDotFiles(true)
	->ignoreVCS(true)
	->exclude([
		'autogenerated_content',
		'tests/fixtures',
	])
	->notPath([
		'dump.php',
		'src/exception_file.php',
	]);

$config = new Config();

return $config
	->setFinder($finder)
	->setRules($rules)
	->setRiskyAllowed(true)
	->setUsingCache(true)
	->setParallelConfig(new ParallelConfig(4, 20))
	->setIndent("\t")
	->setLineEnding("\n");
