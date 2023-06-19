<?php
namespace App\Entity;

class Review
{
        private string $title;
        private int $date;
        private string $description;
		private string $name;
        private ?int $id;
    
public function __construct(string $title,int $date, string $description, string $name, ?int $id=null){
    $this->title=$title;
    $this->date=$date;
    $this->description=$description;
	$this->name=$name;
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
	public function getDate(): int {
		return $this->date;
	}
	
	/**
	 * @param int $date 
	 * @return self
	 */
	public function setDate(int $date): self {
		$this->date = $date;
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
	public function getName(): string {
		return $this->name;
	}
	
	/**
	 * @param string $name 
	 * @return self
	 */
	public function setName(string $name): self {
		$this->name = $name;
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