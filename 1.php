<?php
$biodata = array(
    "name" => "Malik",
    "address" => "Cibinong",
    "hobbies" => array(
        "Game",
        "Music",
        "Film"
    ),
    "is_married" => false,
    "school" => array(
        "highSchool" => "Smk Ti Al-Asiyah",
        "university" => "Universitas Pakuan"
    ),
    "skills" => array(
        array(
            "name" => "php",
            "score" => "2"
        ),
        array(
            "name" => "html",
            "score" => "3"
        ),
        array(
            "name" => "css",
            "score" => "2"
        )
        ),
);

echo json_encode($biodata);

