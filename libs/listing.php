<?php

function getListing(): array
{
    return [
        ["title" => "Annonce 1", "price" => 30, "image" => "chaise.jpg", "description" => " Chaise très bon état"],
        ["title" => "Annonce 2", "price" => 50, "image" => "mario.jpg", "description" => " Figurines très bon état"],
        ["title" => "Annonce 3", "price" => 1600, "image" => "telephone.jpg", "description" => " Téléphone très bon état"],
    ];
}

function getListingById(int $id)
{
    $listings = getListing();
    return $listings[$id];
}
