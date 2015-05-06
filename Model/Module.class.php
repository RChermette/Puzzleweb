<?php
class Module
{ 
  private $_id;
  private $_titre;
  private $_description;
  private $_photo;

  public function __construct($id,$titre,$description,$image) // Constructeur demandant 3 paramètres
  {
	$this->setId($id);
    $this->setTitre($titre); // Initialisation de la ligne
    $this->setDescription($description); // Initialisation de la description
	$this->setImage($image);
  }

 public function id()
  {
    return $this->_id;
  }
  
  public function titre()
  {
    return $this->_titre;
  }
    public function description()
  {
    return $this->_description;
  }
  public function image()
  {
    return $this->_image;
  }
  // Mutateur chargé de modifier l'attribut $_id.
  public function setId($id)
  {
   // On convertit l'argument en nombre entier.
    // Si c'en était déjà un, rien ne changera.
    // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).
    $id = (int) $id;
    
    // On vérifie ensuite si ce nombre est bien strictement positif.
    if ($id > 0)
    {
      // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
      $this->_id = $id;
    }
  }

  // Mutateur chargé de modifier l'attribut $_nom.
  public function setTitre($titre)
  {
   // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($titre))
    {
      $this->_titre = $titre;
    }
  }
  
    public function setDescription($description)
  {
    $this->_description = $description;
  }
  public function setImage($image)
  {
   // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($image))
    {
      $this->_image = $image;
    }
  }
}

?>