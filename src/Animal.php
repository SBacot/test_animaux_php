<?php

namespace App;


class Animal
{
   private string $gender;
   private string $specie;
   private string $name;
   private int $age;
   private string $color;
   private int $size;
   private string $description;
   private $picture;


   /**
    * Get the value of gender
    */ 
   public function getGender()
   {
      return $this->gender;
   }

   /**
    * Set the value of gender
    *
    * @return  self
    */ 
   public function setGender($gender)
   {
      $this->gender = $gender;

      return $this;
   }


   /**
    * Get the value of specie
    */ 
   public function getSpecie()
   {
      return $this->specie;
   }

   /**
    * Set the value of specie
    *
    * @return  self
    */ 
   public function setSpecie($specie)
   {
      $this->specie = $specie;

      return $this;
   }

   /**
    * Get the value of name
    */ 
   public function getName()
   {
      return $this->name;
   }

   /**
    * Set the value of name
    *
    * @return  self
    */ 
   public function setName($name)
   {
      $this->name = $name;

      return $this;
   }

   /**
    * Get the value of age
    */ 
   public function getAge()
   {
      return $this->age;
   }

   /**
    * Set the value of age
    *
    * @return  self
    */ 
   public function setAge($age)
   {
      $this->age = $age;

      return $this;
   }

   /**
    * Get the value of color
    */ 
   public function getColor()
   {
      return $this->color;
   }

   /**
    * Set the value of color
    *
    * @return  self
    */ 
   public function setColor($color)
   {
      $this->color = $color;

      return $this;
   }

   /**
    * Get the value of size
    */ 
   public function getSize()
   {
      return $this->size;
   }

   /**
    * Set the value of size
    *
    * @return  self
    */ 
   public function setSize($size)
   {
      $this->size = $size;

      return $this;
   }

   /**
    * Get the value of description
    */ 
   public function getDescription()
   {
      return $this->description;
   }
   public function getShortDescription()
   {
      if(strlen($this->description) < 50){
        return $this->description;
      }
      return substr($this->description,0,50). "...";
   }

   /**
    * Set the value of description
    *
    * @return  self
    */ 
   public function setDescription($description)
   {
      $this->description = $description;

      return $this;
   }

   /**
    * Get the value of picture
    */ 
   public function getPicture()
   {
      return $this->picture;
   }

   /**
    * Set the value of picture
    *
    * @return  self
    */ 
   public function setPicture($picture)
   {
      $this->picture = $picture;

      return $this;
   }
}

