<?php
return [
    'components' => [
        /*
'db1' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
*/
        'db'=>[
					'class'=>'yii\db\Connection',
					'dsn' => 'sqlsrv:server=.;database=EMPRESAS;',
		            'username' => 'abacoAPP',
		            'password' => 'S1stem@Pas5@',
		            'charset' => 'GB2312',
				    //'emulatePrepare' =>false
				],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
