<?php
    define('PERCH_LICENSE_KEY', 'P21509-XXW087-ULZ976-KBT373-JNT022');

    define("PERCH_DB_USERNAME", 'perch_tea');
    define("PERCH_DB_PASSWORD", 'Te@2sugars');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "admin_tea");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'Europe/London');

    define('PERCH_EMAIL_FROM', 'rik@creativitea.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Rik Barwick');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
