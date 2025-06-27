<?php

return [
    'websiteConfigurations' => [
        'appName' => "Prax Market website",
        'googleApiKey' => env('GOOGLE_MAPS_API_KEY'),
        'awsAccessKeyID' => env('AWS_ACCESS_KEY_ID'),
        'awsSecretAccessKey' => env('AWS_SECRET_ACCESS_KEY'),
        'awsDefaultRegion' => env('AWS_DEFAULT_REGION'),
        'awsBucket' => env('AWS_BUCKET'),
        'environment' => env('APP_ENV'),
        'apiUrl' => env('API_URL'),
        'appUrl' => env('APP_URL')

    ],
    'roles' => [
        'admin' => [
            'valueInDB' => "ADMIN",
        ],
        'associate' => [
            'valueInDB' => "ASSOCIATE",
        ]

    ],
    'toastTypeValues' => [
        'success' => 'SUCCESS',
        'info' => 'INFO',
        'warning' => 'WARNING',
        'error' => 'ERROR',
    ],
    'userActionLog' => [
        'actions' => [
            'created' => 'CREATED',
            'updated' => 'UPDATED',
            'deleted' => 'DELETED',
            'triggerUpdated' => 'UPDATE_TRIGGERED',
            'expire' => 'EXPIRE',
            'renew' => 'RENEW',
            'cancel' => 'CANCEL',
            'resume' => 'RESUME',
            'emailResent' => 'EMAIL_RESENT',
            'emailSent' => 'EMAIL_SENT'
        ],
        'models' => [
            'user' => 'USERS',
            'brands' => 'BRANDS',
            'mediaFiles' => 'MEDIA_FILES',
            'hunts' => 'HUNTS',
            'checkpoints' => 'CHECKPOINTS',
            'notes' => 'NOTES',
            'instructions' => 'INSTRUCTIONS',
            'races' => 'RACES',
            'challenges' => 'CHALLENGES',
            'challengesLibrary' => 'CHALLENGES_LIBRARY'
        ],
    ],

    'status' => [
        'active' => 'ACTIVE',
        'inActive' => 'INACTIVE'
    ],
    'companyName' => [
        'praxEngineering' => "PRAX_ENGINEERING",
    ],







    'apiConstants' => [
        'apiUrl' => env('API_URL'),
    ],
    'defGpsLocations' => [
        'lat' => "12.915514",
        'lng' => "77.632212"
    ],

    'colourTheme' => [
        '#2E3182' => "Prax Engineering Blue",
        '#1F2533' => "Almost Black",
        '#E57322' => "Autumn Landscape",
        '#4C65DD' => "Royal Blue",
        '#D54A4A' => "Crimson Red",
        '#DE58A5' => "Orion Pink",
        '#8165E6' => "Medium purple",
        '#008B40' => "Emerald Green"
    ],

    'paginations' => [
        'events' => 10,
    ],

    'requestStatus' => [
        'open' => "OPEN",
        'reopened' => "REOPENED",
        'forApproval' => "FOR APPROVAL",
        'closed' => "CLOSED",
        'allTasks' => "ALL_TASKS"
    ],

    'labels' => [
        'compose' => 'COMPOSE',
        'scheduled' => 'SCHEDULED',
        'sent' => 'SENT',
        'failed' => 'FAILED',
    ],

    'sessionLifeTimes' => [

        'admin' => env('SESSION_LIFETIME', 120),
        'teamMember' => env('SESSION_LIFETIME_FOR_TEAM', 15)
    ],

    'subscriptionStatus' => [
        'active' => 'ACTIVE',
        'freeTrial' => 'FREE_TRIAL',
        'canceled' => 'CANCELED',
        'expired' => 'EXPIRED',
        'inactive' => 'INACTIVE'
    ],
    'stripe' => [
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ]


];
