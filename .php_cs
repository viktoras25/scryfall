<?php

$finder = PhpCsFixer\Finder::create()
                           ->in(__DIR__ . '/src');

return PhpCsFixer\Config::create()
                        ->setRules(
                            [
                                '@PSR2'                                 => true,
                                '@Symfony'                              => true,

                                // Change Symfony parameters
                                'no_superfluous_phpdoc_tags'            => false,
                                'binary_operator_spaces'                => [
                                    'align_equals'       => true,
                                    'align_double_arrow' => true
                                ],
                                'concat_space'                          => ['spacing' => 'one'],
                                'no_trailing_comma_in_singleline_array' => true,
                                'trailing_comma_in_multiline_array'     => false,
                                'yoda_style'                            => null,

                                // Additional rules
                                'align_multiline_comment'               => true,
                                'linebreak_after_opening_tag'           => true,
                                'no_useless_else'                       => true,
                                'no_useless_return'                     => true,
                                'ternary_to_null_coalescing'            => true,
                            ]
                        )
                        ->setFinder($finder);
