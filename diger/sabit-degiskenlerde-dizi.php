<?php
    define("degisken", [
        "degisken",
        "degisken2",
        [
            "a_degisken",
            "b_degisken"
        ],
        'degisken_tanim' => [
            "1" => [
                1,
                2,
                3
            ]
        ]
    ]);

    print_r(degisken);
    print_r(degisken[2][1]);
    print_r(degisken["degisken_tanim"]["1"][1]);
?>
