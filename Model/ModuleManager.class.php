<?php
class ModuleManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Module $module) //Fonction d'ajout d'un module
  {
    $q = $this->_db->prepare('INSERT INTO module SET titre = :titre, description = :description, image = :image');

    $q->bindValue(':titre', $module->titre());
	$q->bindValue(':description', $module->description());
    $q->bindValue(':image', $module->image());
    $q->execute();
  }
  public function update(Module $module) //Fonction de modification d'un module
  {
    $q = $this->_db->prepare('UPDATE module SET titre = :titre, description = :description, image = :image WHERE id = :id');

    $q->bindValue(':titre', $module->titre());
    $q->bindValue(':description', $module->decription());
    $q->bindValue(':id', $module->id());
	  $q->bindValue(':image', $module->image());

    $q->execute();
  }
  public function delete(Module $module) //Fonction de suppression d'un module
  {
    $this->_db->exec('DELETE FROM module WHERE id = '.$module->id());
  }

  public function get($id) //Fonction d'affichage d'un module
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT id, titre, description,image FROM module WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new Module($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['image']);
  }
  

  public function getList()//Fonction d'affichage de toutes les modules
  {
    $modules = array();

    $q = $this->_db->query('SELECT id, titre, description FROM module');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $modules[] = new Module($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['image']);
    }
    return $modules;
  }
  
  public function setDb(PDO $db)//Fonction d'initialisation de la base de données
  {
    $this->_db = $db;
  }
}
?>