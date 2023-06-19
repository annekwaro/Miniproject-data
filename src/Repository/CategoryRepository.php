<?php

namespace App\Repository;

use App\Entity\Category;

class CategoryRepository
{

    /**
     * Méthode qui va faire une requête pour récupérer tous les produits de la base de données puis qui va boucler
     * sur les résultat de la requête pour transformer chaque ligne de résultat en instance de la classe Product
     * @return Category[] 
     */
    public function findAll(): array
    {
        $list = [];
        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM category");

        $query->execute();

        foreach ($query->fetchAll() as $line) {
            $list[] = new Category($line["title"], $line["label"], $line["description"],$line["image"],$line["id"]);
        }

        return $list;
    }

    /**
     * Méthode permettant de récupérer un produit spécifique en se basant sur son id
     * Si aucun produit n'existe pour cet id dans la base de données, on renvoie null
     * 
     * @param $id l'id du produit que l'on souhaite récupérer
     */
    public function findById(int $id):?Category {

        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM category WHERE id=:id ");
        $query->bindValue(":id", $id);
        $query->execute();

        foreach ($query->fetchAll() as $line) {
            return new Category($line["title"], $line["label"], $line["description"],$line["image"], $line["id"]);
        }
        return null;

    }

    
    
    public function persist(Category $category) {
        $connection = Database::getConnection();

        $query = $connection->prepare("INSERT INTO category (title,label,image,description) VALUES (:title,:label,:description)");
        $query->bindValue(':price', $category->getLabel());
        $query->bindValue(':label', $category->getLabel());
        $query->bindValue(':description', $category->getDescription());

        $query->execute();

        $category->setId($connection->lastInsertId());
    }

    
    public function delete(int $id) {

        $connection = Database::getConnection();

        $query = $connection->prepare("DELETE FROM category WHERE id=:id");
        $query->bindValue(":id", $id);
        $query->execute();
    }

    
    
    public function update(Category $category) {
        
        $connection = Database::getConnection();

        $query = $connection->prepare("UPDATE category SET label=:label, description=:description, title=:title WHERE id=:id");
        $query->bindValue(':title', $category->getTitle());
        $query->bindValue(':label', $category->getlabel());
        $query->bindValue(':description', $category->getDescription());
        $query->bindValue(':id', $category->getId());

        $query->execute();
    }
}