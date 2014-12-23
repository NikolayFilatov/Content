<?php
return [
    'factories' => [
        'doctrine.cache.my_redis' => function ($sm) {
            $cache = new \Doctrine\Common\Cache\RedisCache();
            $redis = new \Redis();
            $config = $sm->get('config')['redis'];
            $redis->connect($config['connection']['host'], $config['connection']['port']);
            $cache->setRedis($redis);

            return $cache;
        },
    ],
    'invokables'    => [

    ],
];