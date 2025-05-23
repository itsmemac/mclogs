<?php

$config = [

    /**
     * Available storages with ID, name and class
     *
     * The class should implement \Storage\StorageInterface
     */
    "storages" => [
        "m" => [
            "name" => "MongoDB",
            "class" => "\\Storage\\Mongo",
            "enabled" => true
        ],
        "f" => [
            "name" => "Filesystem",
            "class" => "\\Storage\\Filesystem",
            "enabled" => false
        ],
        "r" => [
            "name" => "Redis",
            "class" => "\\Storage\\Redis",
            "enabled" => false
        ]
    ],

    /**
     * Current storage id for new data
     *
     * Should be a key in the $storages array
     */
    "storageId" => "m",

    /**
     * Time in seconds to store data after put or last renew
     */
    "storageTime" => 90 * 24 * 60 * 60,

    /**
     * Maximum string length to store
     *
     * Will be cut by \Filter\Pre\Length
     */
    "maxLength" => 10 * 1024 * 1024,

    /**
     * Maximum number of lines to store
     *
     * Will be cut by \Filter\Pre\Lines
     */
    "maxLines" => 25_000

];
