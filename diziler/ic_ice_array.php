<?php
    $category =
        [
            'daire' => [
                "satilik" => [
                    "Daire Devren Satılık",
                    "Daire Satılık"
                ],
                "kiralik" => [
                    "Daire Devren Kiralık",
                    "Daire Kiralık"
                ]
            ],
            'ofis' => [
                "satilik" => [
                    "Ofis Devren Satılık",
                    "Ofis Satılık"
                ],
                "kiralik" => [
                    "Ofis Devren Kiralık",
                    "Ofis Kiralık"
                ]
            ],
            'arsa' => [
                "satilik" => [
                    "Arsa Devren Satılık",
                    "Arsa Satılık"
                ],
                "kiralik" => [
                    "Arsa Devren Kiralık",
                    "Arsa Kiralık"
                ]
            ],
            'bina' => [
                "satilik" => [
                    "Bina Devren Satılık",
                    "Bina Satılık"
                ],
                "kiralik" => [
                    "Bina Devren Kiralık",
                    "Bina Kiralık"
                ]
            ],
            'tesis' => [
                "satilik" => [
                    "Bina Devren Satılık",
                    "Bina Satılık"
                ],
                "kiralik" => [
                    "Bina Devren Kiralık",
                    "Bina Kiralık"
                ]
            ]
        ];


        // kullanımı
        echo $category["tesis"]["satilik"][1];
        print_r($category);
?>
