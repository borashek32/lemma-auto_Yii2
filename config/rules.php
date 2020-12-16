<?php

return array(
    'admin' => 'admin/default/index',
    'admin/login' => 'admin/default/login',
    'admin/logout' => 'admin/default/logout',
    'admin/post' => 'admin/post/post',
    'admin/review' => 'admin/rewiew/review',
    'admin/category' => 'admin/category/category',
    'admin/autopart' => 'admin/autopart/autopart',
    'admin/user' => 'admin/user/user',

    'admin/<controller:[\w-]+>' => 'admin/<controller>/index',
    'admin/<controller:[\w-]+>/<action:[\w-]+>' => 'admin/<controller>/<action>',
    'admin/<controller:[\w-]+>/<action:[\w-]+>/<app:\d+>' => 'admin/<controller>/<action>',

    'review' => 'review/review',

    'auto-parts' => 'autoparts/auto-parts',
    'auto-parts-search' => 'autoparts/auto-parts-search',

    'blog' => 'post/blog',
    'blog/post' => 'post/post',
    'blog/category' => 'post/category',
    'blog/post-search' => 'post/post-search',

    'user/index' => 'user/user/index/',
    'user/login' => 'user/default/login/',
    'user/logout' => 'user/default/logout/',
    'user/signup' => 'user/default/signup/',
    'user/info' => 'user/user/info/',
    'user/order' => 'user/user/order/',
    'role' => 'user/role',
//
//    '' => 'site/index',
//    '<action:[\w\-]+>' => 'site/<action>',
//    '<action:[\w\-]+>/<alias:[\w-]+>' => 'site/<action>',
//    '<controller:[\w-]+>/<action:[\w-]+>' => '<controller>/<action>',
//    '<controller:[\w-]+>' => '<controller>/index',
);