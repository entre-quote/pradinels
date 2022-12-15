<?php

return function () {

    $actualites = collection('actualites');

    return [
        'actualites' => $actualites
    ];
};
