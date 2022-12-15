<?php

return function () {

    $cuvees = collection('cuvees');

    return [
        'cuvees' => $cuvees
    ];
};
