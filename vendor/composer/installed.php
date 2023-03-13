<?php return array(
    'root' => array(
        'name' => 'humhub/custom_pages',
        'pretty_version' => 'v1.8.9',
        'version' => '1.8.9.0',
        'reference' => '5c4171b87947f4a6482069323b272721df05d407',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '2amigos/yii2-tinymce-widget' => array(
            'pretty_version' => '1.1.3',
            'version' => '1.1.3.0',
            'reference' => 'a58b7a59a1508f4251a8cea9e010d31c9733bde4',
            'type' => 'yii2-extension',
            'install_path' => __DIR__ . '/../2amigos/yii2-tinymce-widget',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'humhub/custom_pages' => array(
            'pretty_version' => 'v1.8.9',
            'version' => '1.8.9.0',
            'reference' => '5c4171b87947f4a6482069323b272721df05d407',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'tinymce/tinymce' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'bec6271ca90b2f37db48a955697746c1f58b9358',
            'type' => 'component',
            'install_path' => __DIR__ . '/../tinymce/tinymce',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'yiisoft/yii2' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
