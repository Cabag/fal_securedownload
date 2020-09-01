<?php
return [
    'frontend' => [
        'typo3/cms-frontend/authentication' => [
            'after' => [
                'typo3/cms-core/normalized-params-attribute',
            ],
            'before' => [
                'typo3/cms-frontend/eid',
            ]
        ],
    ]
];
