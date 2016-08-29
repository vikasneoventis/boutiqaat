<?php
return array(
    'components'=>array(
        //Database of Magento1
        'mage1' => array(
            'connectionString' => 'mysql:host=localhost;port=3306;dbname=olddata',
            'emulatePrepare' => true,
            'username' => 'buser',
            'password' => 'bpass1@3',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        ),
        //Database of Magento2 beta
        'mage2' => array(
            'connectionString' => 'mysql:host=localhost;port=3306;dbname=newboutiqaat',
            'emulatePrepare' => true,
            'username' => 'buser',
            'password' => 'bpass1@3',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        )
    ),

    'import'=>array(
        //This can change for your magento1 version if needed
        //'application.models.db.mage19x.*',
        'application.models.db.mage19x.*',
    )
);
