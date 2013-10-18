<?php

return array(
    'factory' => array(
        'Grid\Paragraph\Model\Paragraph\StructureFactory' => array(
            'adapter' => array(
                'tagCloud'      => 'Grid\TagCloud\Model\Paragraph\Structure\TagCloud',
            ),
        ),
    ),
    'modules' => array(
        'Grid\Paragraph' => array(
            'customizeMapForms' => array(
                'tagCloud' => array(
                    'element'   => 'general',
                    'tag'       => 'general',
                ),
            ),
        ),
    ),
    'form' => array(
        'Grid\Paragraph\CreateWizard\Start' => array(
            'elements'  => array(
                'type'  => array(
                    'spec'  => array(
                        'options'   => array(
                            'options'   => array(
                                'basic' => array(
                                    'options'   => array(
                                        'tagCloud'      => 'paragraph.type.tagCloud',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'Grid\Paragraph\Meta\Edit' => array(
            'fieldsets' => array(
                'tagCloud' => array(
                    'spec' => array(
                        'name'      => 'tagCloud',
                        'options'   => array(
                            'label'     => 'paragraph.type.tagCloud',
                            'required'  => false,
                        ),
                        'elements'  => array(
                            'name'  => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Text',
                                    'name'      => 'name',
                                    'options'   => array(
                                        'label'     => 'paragraph.form.abstract.name',
                                        'required'  => false,
                                    ),
                                ),
                            ),
                            'mode'  => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Select',
                                    'name'      => 'mode',
                                    'options'   => array(
                                        'label'     => 'tagCloud.paragraph.form.mode',
                                        'required'  => true,
                                        'options'   => array(
                                            'primary'   => 'tagCloud.paragraph.form.mode.primary',
                                            'strict'    => 'tagCloud.paragraph.form.mode.strict',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'translator' => array(
        'translation_file_patterns' => array(
            'tag' => array(
                'type'          => 'phpArray',
                'base_dir'      => __DIR__ . '/../languages/tagCloud',
                'pattern'       => '%s.php',
                'text_domain'   => 'tagCloud',
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'grid/paragraph/render/tagCloud'     => __DIR__ . '/../view/grid/paragraph/render/tagCloud.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
