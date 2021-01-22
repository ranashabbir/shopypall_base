<?php return array (
  'app' => 
  array (
    'debug_blacklist' => 
    array (
      '_ENV' => 
      array (
        0 => 'APP_KEY',
        1 => 'DB_PASSWORD',
        2 => 'REDIS_PASSWORD',
        3 => 'MAIL_PASSWORD',
        4 => 'PUSHER_APP_KEY',
        5 => 'PUSHER_APP_SECRET',
      ),
      '_SERVER' => 
      array (
        0 => 'APP_KEY',
        1 => 'DB_PASSWORD',
        2 => 'REDIS_PASSWORD',
        3 => 'MAIL_PASSWORD',
        4 => 'PUSHER_APP_KEY',
        5 => 'PUSHER_APP_SECRET',
      ),
      '_POST' => 
      array (
        0 => 'password',
      ),
    ),
<<<<<<< HEAD
    'name' => 'ShopyPall',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://127.0.0.1:8000/',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:bODi8VtmENqnjklBmNJzQcTTSC8jNjBysfnjQN59btE=',
=======
    'name' => 'shopypall',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://shopypall.test',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:U+bAENJ3cry5p8EGS9JivM+3LvJtVkOQ+/xdc47Eggk=',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Collective\\Html\\HtmlServiceProvider',
      23 => 'App\\Providers\\RouteServiceProvider',
      24 => 'Anand\\LaravelPaytmWallet\\PaytmWalletServiceProvider',
      25 => 'Madnest\\Madzipper\\MadzipperServiceProvider',
      26 => 'App\\Providers\\AppServiceProvider',
      27 => 'App\\Providers\\AuthServiceProvider',
      28 => 'App\\Providers\\EventServiceProvider',
      29 => 'App\\Providers\\RouteServiceProvider',
      30 => 'Folklore\\Image\\ImageServiceProvider',
      31 => 'Kyslik\\ColumnSortable\\ColumnSortableServiceProvider',
      32 => 'Vectorcoder\\LaravelInstaller\\Providers\\LaravelInstallerServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
      'Image' => 'Folklore\\Image\\Facades\\Image',
      'Madzipper' => 'Madnest\\Madzipper\\Madzipper',
      'PaytmWallet' => 'Anand\\LaravelPaytmWallet\\Facades\\PaytmWallet',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
      'admin' => 
      array (
        'driver' => 'session',
        'provider' => 'admins',
      ),
      'customer' => 
      array (
        'driver' => 'session',
        'provider' => 'customers',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
      'admins' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Admin',
      ),
      'customers' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Customer',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'backup' => 
  array (
    'backup' => 
    array (
<<<<<<< HEAD
      'name' => 'ShopyPall',
=======
      'name' => 'shopypall',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
<<<<<<< HEAD
            0 => 'F:\\xampp\\htdocs\\shopypall_base',
          ),
          'exclude' => 
          array (
            0 => 'F:\\xampp\\htdocs\\shopypall_base\\vendor',
            1 => 'F:\\xampp\\htdocs\\shopypall_base\\node_modules',
=======
            0 => 'C:\\xampp\\htdocs\\shopypall_base',
          ),
          'exclude' => 
          array (
            0 => 'C:\\xampp\\htdocs\\shopypall_base\\vendor',
            1 => 'C:\\xampp\\htdocs\\shopypall_base\\node_modules',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
          ),
          'follow_links' => false,
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'database_dump_compressor' => NULL,
      'destination' => 
      array (
        'filename_prefix' => '',
        'disks' => 
        array (
          0 => 'local',
        ),
      ),
<<<<<<< HEAD
      'temporary_directory' => 'F:\\xampp\\htdocs\\shopypall_base\\storage\\app/backup-temp',
=======
      'temporary_directory' => 'C:\\xampp\\htdocs\\shopypall_base\\storage\\app/backup-temp',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
    ),
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Spatie\\Backup\\Notifications\\Notifications\\BackupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\BackupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\HealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Spatie\\Backup\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => 'your@example.com',
        'from' => 
        array (
          'address' => 'hello@example.com',
          'name' => 'Example',
        ),
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => NULL,
        'username' => NULL,
        'icon' => NULL,
      ),
    ),
    'monitor_backups' => 
    array (
      0 => 
      array (
<<<<<<< HEAD
        'name' => 'ShopyPall',
=======
        'name' => 'shopypall',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
        'disks' => 
        array (
          0 => 'local',
        ),
        'health_checks' => 
        array (
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays' => 1,
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumStorageInMegabytes' => 5000,
        ),
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'default_strategy' => 
      array (
        'keep_all_backups_for_days' => 7,
        'keep_daily_backups_for_days' => 16,
        'keep_weekly_backups_for_weeks' => 8,
        'keep_monthly_backups_for_months' => 4,
        'keep_yearly_backups_for_years' => 2,
        'delete_oldest_backups_when_using_more_megabytes_than' => 5000,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => NULL,
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
<<<<<<< HEAD
        'path' => 'F:\\xampp\\htdocs\\shopypall_base\\storage\\framework/cache/data',
=======
        'path' => 'C:\\xampp\\htdocs\\shopypall_base\\storage\\framework/cache/data',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'shopypall_cache',
  ),
  'columnsortable' => 
  array (
    'columns' => 
    array (
      'alpha' => 
      array (
        'rows' => 
        array (
          0 => 'description',
          1 => 'email',
          2 => 'name',
          3 => 'slug',
        ),
        'class' => 'fa fa-sort-alpha',
      ),
      'amount' => 
      array (
        'rows' => 
        array (
          0 => 'amount',
          1 => 'price',
        ),
        'class' => 'fa fa-sort-amount',
      ),
      'numeric' => 
      array (
        'rows' => 
        array (
          0 => 'created_at',
          1 => 'updated_at',
          2 => 'level',
          3 => 'id',
          4 => 'phone_number',
        ),
        'class' => 'fa fa-sort-numeric',
      ),
    ),
    'enable_icons' => true,
    'default_icon_set' => 'fa fa-sort',
    'sortable_icon' => 'fa fa-sort',
    'clickable_icon' => false,
    'icon_text_separator' => ' ',
    'asc_suffix' => '-asc',
    'desc_suffix' => '-desc',
    'anchor_class' => NULL,
    'active_anchor_class' => NULL,
    'direction_anchor_class_prefix' => NULL,
    'uri_relation_column_separator' => '.',
    'formatting_function' => 'ucfirst',
    'format_custom_titles' => true,
    'inject_title_as' => NULL,
    'allow_request_modification' => true,
    'default_direction' => 'asc',
    'default_direction_unsorted' => 'asc',
    'default_first_column' => false,
    'join_type' => 'leftJoin',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'shopypall',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'shopypall',
<<<<<<< HEAD
        'username' => 'root',
        'password' => '',
=======
        'username' => 'user@atta',
        'password' => 'user@atta',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
        'unix_socket' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => NULL,
        'dump_command_path' => 'C:\\xampp\\mysql\\bin',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'shopypall',
<<<<<<< HEAD
        'username' => 'root',
        'password' => '',
=======
        'username' => 'user@atta',
        'password' => 'user@atta',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'shopypall',
<<<<<<< HEAD
        'username' => 'root',
        'password' => '',
=======
        'username' => 'user@atta',
        'password' => 'user@atta',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
<<<<<<< HEAD
        'root' => 'F:\\xampp\\htdocs\\shopypall_base\\storage\\app',
=======
        'root' => 'C:\\xampp\\htdocs\\shopypall_base\\storage\\app',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
      ),
      'public' => 
      array (
        'driver' => 'local',
<<<<<<< HEAD
        'root' => 'F:\\xampp\\htdocs\\shopypall_base\\public\\images/media',
        'url' => 'http://127.0.0.1:8000//uploadimage',
=======
        'root' => 'C:\\xampp\\htdocs\\shopypall_base\\public\\images/media',
        'url' => 'http://shopypall.test/uploadimage',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
<<<<<<< HEAD
        'path' => 'F:\\xampp\\htdocs\\shopypall_base\\storage\\logs/laravel.log',
=======
        'path' => 'C:\\xampp\\htdocs\\shopypall_base\\storage\\logs/laravel.log',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
<<<<<<< HEAD
        'path' => 'F:\\xampp\\htdocs\\shopypall_base\\storage\\logs/laravel.log',
=======
        'path' => 'C:\\xampp\\htdocs\\shopypall_base\\storage\\logs/laravel.log',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
        'level' => 'debug',
        'days' => 7,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
<<<<<<< HEAD
    'host' => 'smtp.transip.email',
=======
    'host' => 'p2gmanagement.xyz',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
    'port' => '465',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => 'ssl',
<<<<<<< HEAD
    'username' => 'noreply@afspraakloket.nl',
    'password' => 'AArm/200214997',
=======
    'username' => 'support@p2gmanagement.xyz',
    'password' => 'support@p2g',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
<<<<<<< HEAD
        0 => 'F:\\xampp\\htdocs\\shopypall_base\\resources\\views/vendor/mail',
=======
        0 => 'C:\\xampp\\htdocs\\shopypall_base\\resources\\views/vendor/mail',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
      ),
    ),
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'model_morph_key' => 'model_id',
    ),
    'display_permission_in_exception' => false,
    'cache' => 
    array (
      'expiration_time' => 1440,
      'key' => 'spatie.permission.cache',
      'model_key' => 'name',
      'store' => 'default',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'paytm-wallet' => 
    array (
      'env' => 'local',
      'merchant_id' => NULL,
      'merchant_key' => NULL,
      'merchant_website' => NULL,
      'channel' => NULL,
      'industry_type' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => 'FB_CLIENT_ID',
      'client_secret' => 'FB_SECRET_KEY',
      'redirect' => 'http://YOUR_DOMAIN_NAME/login/facebook/callback',
    ),
    'google' => 
    array (
      'client_id' => 'GOOGLE_CLIENT_ID',
      'client_secret' => 'GOOGLE_SECRET_KEY',
      'redirect' => 'http://YOUR_DOMAIN_NAME/login/google/callback',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 600,
    'expire_on_close' => false,
    'encrypt' => false,
<<<<<<< HEAD
    'files' => 'F:\\xampp\\htdocs\\shopypall_base\\storage\\framework/sessions',
=======
    'files' => 'C:\\xampp\\htdocs\\shopypall_base\\storage\\framework/sessions',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'shopypall_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'view' => 
  array (
    'paths' => 
    array (
<<<<<<< HEAD
      0 => 'F:\\xampp\\htdocs\\shopypall_base\\resources\\views',
    ),
    'compiled' => 'F:\\xampp\\htdocs\\shopypall_base\\storage\\framework\\views',
=======
      0 => 'C:\\xampp\\htdocs\\shopypall_base\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\shopypall_base\\storage\\framework\\views',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'iseed::config' => 
  array (
    'path' => '/database/seeds',
    'chunk_size' => 500,
  ),
<<<<<<< HEAD
  'generators' => 
  array (
    'config' => 
    array (
      'model_template_path' => 'F:\\xampp\\htdocs\\shopypall_base\\vendor/oscarafdev/laravel-4-generators/src/Way/Generators/Templates/model.txt',
      'scaffold_model_template_path' => 'F:\\xampp\\htdocs\\shopypall_base\\vendor/oscarafdev/laravel-4-generators/src/Way/Generators/Templates/scaffolding/model.txt',
      'controller_template_path' => 'F:\\xampp\\htdocs\\shopypall_base\\vendor/oscarafdev/laravel-4-generators/src/Way/Generators/Templates/controller.txt',
      'scaffold_controller_template_path' => 'F:\\xampp\\htdocs\\shopypall_base\\vendor/oscarafdev/laravel-4-generators/src/Way/Generators/Templates/scaffolding/controller.txt',
      'migration_template_path' => 'F:\\xampp\\htdocs\\shopypall_base\\vendor/oscarafdev/laravel-4-generators/src/Way/Generators/Templates/migration.txt',
      'seed_template_path' => 'F:\\xampp\\htdocs\\shopypall_base\\vendor/oscarafdev/laravel-4-generators/src/Way/Generators/Templates/seed.txt',
      'view_template_path' => 'F:\\xampp\\htdocs\\shopypall_base\\vendor/oscarafdev/laravel-4-generators/src/Way/Generators/Templates/view.txt',
      'model_target_path' => 'F:\\xampp\\htdocs\\shopypall_base\\app',
      'controller_target_path' => 'F:\\xampp\\htdocs\\shopypall_base\\app\\Http/Controllers',
      'migration_target_path' => 'F:\\xampp\\htdocs\\shopypall_base\\database/migrations',
      'seed_target_path' => 'F:\\xampp\\htdocs\\shopypall_base\\database/seeds',
      'view_target_path' => 'F:\\xampp\\htdocs\\shopypall_base\\resources/views',
    ),
  ),
=======
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
    'memory_limit' => '128M',
    'src_dirs' => 
    array (
<<<<<<< HEAD
      0 => 'F:\\xampp\\htdocs\\shopypall_base\\public',
=======
      0 => 'C:\\xampp\\htdocs\\shopypall_base\\public',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
    ),
    'host' => '',
    'pattern' => '^(.*){parameters}\\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$',
    'url_parameter' => '-image({options})',
    'url_parameter_separator' => '-',
    'serve' => true,
    'serve_domain' => NULL,
    'serve_route' => '{image_pattern}',
    'serve_custom_filters_only' => false,
    'write_image' => false,
    'write_path' => NULL,
    'proxy' => false,
    'proxy_route' => '{image_proxy_pattern}',
    'proxy_route_pattern' => NULL,
    'proxy_route_domain' => NULL,
    'proxy_filesystem' => 'cloud',
    'proxy_write_image' => true,
    'proxy_cache' => true,
    'proxy_cache_filesystem' => NULL,
    'proxy_cache_expiration' => 1440,
<<<<<<< HEAD
    'proxy_tmp_path' => 'C:\\Users\\FINETR~1\\AppData\\Local\\Temp',
=======
    'proxy_tmp_path' => 'C:\\Users\\attau\\AppData\\Local\\Temp',
>>>>>>> 5e181760454718a56036af06f046628a2377c98a
  ),
);
