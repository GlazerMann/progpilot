<?php

        return [
                [
                    "./tests/frameworks/codeigniter1.php",
                        [["\$_GET[\"p\"]", '6', "xss"]]
                ],
                [
                    "./tests/frameworks/codeigniter2.php",
                        [["\$row->title", '12', "xss"]]
                ],
                [
                    "./tests/frameworks/codeigniter3.php",
                        [["\$row[\"test\"]", '11', "xss"]]
                ]
            ];
