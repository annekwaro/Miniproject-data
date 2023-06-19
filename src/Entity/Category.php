<?php

namespace App\Entity;

class Category
{
        private string $title;
        private int $label;
        private string $description;
		private string $image;
        private ?int $id;
    
public function __construct(string $title,int $label,string $description,string $image, ?int $id=null){
    $this->title=$title;
    $this->label=$label;
    $this->description=$description;
	$this->image=$image;
	$this->id=$id;

}

	

	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}
	
	/**
	 * @param string $title 
	 * @return self
	 */
	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getLabel(): int {
		return $this->label;
	}
	
	/**
	 * @param int $label 
	 * @return self
	 */
	public function setLabel(int $label): self {
		$this->label = $label;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}
	
	/**
	 * @param string $description 
	 * @return self
	 */
	public function setDescription(string $description): self {
		$this->description = $description;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getImage(): string {
		return $this->image;
	}
	
	/**
	 * @param string $image 
	 * @return self
	 */
	public function setImage(string $image): self {
		$this->image = $image;
		return $this;
	}
	
	/**
	 * @return int|null
	 */
	public function getId(): ?int {
		return $this->id;
	}
	
	/**
	 * @param int|null $id 
	 * @return self
	 */
	public function setId(?int $id): self {
		$this->id = $id;
		return $this;
	}
}