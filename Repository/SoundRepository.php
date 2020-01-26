<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//Sound.php';

class SoundRepository extends Repository {

    public function getSound(int $id): ?Sound 
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM sounds WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $sound = $stmt->fetch(PDO::FETCH_ASSOC);

        if($sound == false) {
            return null;
        }

        return new Sound(
            $sound['id'],
            $sound['name'],
            $sound['path']
        );
    }
}
