<?php

namespace App\Repository;

use App\Entity\Review;

class ReviewRepository
{

    /**

     * @return Review[] 
     */
    public function findAll(): array
    {
        $parts = [];
        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM review");

        $query->execute();

        foreach ($query->fetchAll() as $line) {
            $parts[] = new Review($line["title"], $line["date"], $line["description"],$line["name"],$line["id"]);
        }

        return $parts;
    }

    /**
     
     * 
     * @param $id 
     */
    public function findById(int $id):?review {

        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM review WHERE id=:id ");
        $query->bindValue(":id", $id);
        $query->execute();

        foreach ($query->fetchAll() as $line) {
            return new Review($line["title"], $line["label"], $line["description"],$line["image"], $line["id"]);
        }
        return null;

    }

    
    
    public function persist(Review $review) {
        $connection = Database::getConnection();

        $query = $connection->prepare("INSERT INTO category (title,description) VALUES (:title,:label,:description)");
        $query->bindValue(':name', $review->getName());
        $query->bindValue(':date', $review->getDate());
       
        $query->bindValue(':description', $review->getDescription());

        $query->execute();

        $review->setId($connection->lastInsertId());
    }

    
    public function delete(int $id) {

        $connection = Database::getConnection();

        $query = $connection->prepare("DELETE FROM review WHERE id=:id");
        $query->bindValue(":id", $id);
        $query->execute();
    }

    
    
    public function update(Review $review) {
        
        $connection = Database::getConnection();

        $query = $connection->prepare("UPDATE category SET label=:label, description=:description, title=:title WHERE id=:id");
        $query->bindValue(':name', $review->getName());
        $query->bindValue(':date', $review->getDate());
        $query->bindValue(':description', $review->getDescription());
        $query->bindValue(':id', $review->getId());

        $query->execute();
    }
}