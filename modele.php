<?php

class modele
{
    private $pdo;
    public function __construct($serveur, $bdd, $user, $mdp)
    {
      $this->pdo = null;
      try{
        $this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,"$user","$mdp");
      }
      catch (PDOException $exp)
      {
        echo "Erreur de connexion à la base de donnees";
      }
    }

    public function selectAllPersonne()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from Personne;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

  public function insertPersonne($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Personne values (null, :nom, :prenom, :adresse, :cp, :ville, :email, :mdp, :tel);";
      $donnees = array(
                        ":nom"=>$tab['nom'],
                        ":prenom"=>$tab['prenom'],
                        ":adresse"=>$tab['adresse'],
                        ":cp"=>$tab['cp'],
                        ":ville"=>$tab['ville'],
                        ":email"=>$tab['email'],
                        ":mdp"=>$tab['mdp'],
                        ":tel"=>$tab['tel']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }

public function deletePersonne($idpersonne)
    {
      $requete = "delete from Personne where idpersonne = :idpersonne;";
      $donnees =array(":idpersonne" => $idpersonne);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }


 public function selectAllDevis()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from Devis;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

  public function insertDevis($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Devis values (null, :idD, :devisdate, :etat, :MontantHT, :TVA, :MontantTVA);";
      $donnees = array(
                        ":idD"=>$tab['idD'],
                        ":devisdate"=>$tab['devisdate'],
                        ":etat"=>$tab['etat'],
                        ":MontantHT"=>$tab['MontantHT'],
                        ":TVA"=>$tab['TVA'],
                        ":MontantTVA"=>$tab['MontantTVA']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }


  public function deleteDevis($referenceD)
    {
      $requete = "delete from Devis where referenceD = :referenceD;";
      $donnees =array(":referenceD" => $referenceD);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }
 
 public function selectAllAssure()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from Assure;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

  public function insertAssure($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Assure values (null, :numsecu, :tel, :nom, :prenom, :adresse, :cp, :ville, :email, :mdp);";
      $donnees = array(
                        ":numsecu"=>$tab['numsecu'],
                        ":tel"=>$tab['tel'],
                        ":nom"=>$tab['nom'],
                        ":prenom"=>$tab['prenom'],
                        ":adresse"=>$tab['adresse'],
                        ":cp"=>$tab['cp'],
                        ":ville"=>$tab['ville'],
                        ":email"=>$tab['email'],
                        ":mdp"=>$tab['mdp']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }

public function deleteAssure($idpersonne)
    {
      $requete = "delete from Assure where idpersonne = :idpersonne;";
      $donnees =array(":idpersonne" => $idpersonne);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }


 
 public function selectAllSociete()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from Societe;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

  public function insertSociete($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Societe values (null, :RAISON_SOCIALE, :ADRESSE, :VILLE, :EMAIL, :TEL, :CP);";
      $donnees = array(
                        ":RAISON_SOCIALE"=>$tab['RAISON_SOCIALE'],
                        ":ADRESSE"=>$tab['ADRESSE'],
                        ":VILLE"=>$tab['VILLE'],
                        ":EMAIL"=>$tab['EMAIL'],
                        ":TEL"=>$tab['TEL'],
                        ":CP"=>$tab['CP']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }

  public function deleteSociete($idDO)
    {
      $requete = "delete from Societe where idDO = :idDO;";
      $donnees =array(":idDO" => $idDO);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }

     public function selectAllMetreur()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from Metreur;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

  public function insertMetreur($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Metreur values (null, :competences, :poste, :anciennete, :nom, :prenom, :adresse, :cp, :ville, :email, :mdp);";
      $donnees = array(
                        ":competences"=>$tab['competences'],
                        ":poste"=>$tab['poste'],
                        ":anciennete"=>$tab['anciennete'],
                        ":nom"=>$tab['nom'],
                        ":prenom"=>$tab['prenom'],
                        ":adresse"=>$tab['adresse'],
                        ":cp"=>$tab['cp'],
                        ":ville"=>$tab['ville'],
                        ":email"=>$tab['email'],
                        ":mdp"=>$tab['mdp']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }

  public function deleteMetreur($idpersonne)
    {
      $requete = "delete from Metreur where idpersonne = :idpersonne;";
      $donnees =array(":idpersonne" => $idpersonne);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }

  public function selectAllSuivre()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from Suivre;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

  public function insertSuivre($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Suivre values (null, :idpersonne, :contenu, :dateContact);";
      $donnees = array(
                        ":idpersonne"=>$tab['idpersonne'],
                        ":contenu"=>$tab['contenu'],
                        ":dateContact"=>$tab['dateContact']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }


public function deleteSuivre($idDO)
    {
      $requete = "delete from Suivre where idDO = :idDO;";
      $donnees =array(":idDO" => $idDO);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }

 


public function selectAllFacture()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from Facture;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

public function insertFacture($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Facture values (null, :referenceD, :Designation, :MontantTTC);";
      $donnees = array(
                        ":referenceD"=>$tab['referenceD'],
                        ":Designation"=>$tab['Designation'],
                        ":MontantTTC"=>$tab['MontantTTC']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }


public function deleteFacture($idFact)
    {
      $requete = "delete from Facture where idFact = :idFact;";
      $donnees =array(":idFact" => $idFact);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }


   public function selectAllTravaux()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from travaux;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }

public function insertTravaux($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Travaux values (null, :referenceD, :DateDeb, :DateFin);";
      $donnees = array(
                        ":referenceD"=>$tab['referenceD'],
                        ":DateDeb"=>$tab['DateDeb'],
                        ":DateFin"=>$tab['DateFin']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }

  public function deleteTravaux($referenceD)
    {
      $requete = "delete from Travaux where referenceD = :referenceD;";
      $donnees =array(":referenceD" => $referenceD);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }


 public function selectAllRDV()
    {

      if ($this->pdo != null) // appel de la FANNConnection
      {
        $requete = "select*from RDV;";
        //Preparation de la requete
        $select = $this->pdo->prepare ($requete);
        //execution de la requete
        $select->execute();
        //extraction des enregistrements
        return $select->fetchAll();
      }
      else
      {
        return null;
      }
    }


 public function insertRDV($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into RDV values (null, :referenceD, :idpersonne, :dateRDV, :heureRdv, :LieuRdv, :Rapport);";
      $donnees = array(
                        ":referenceD"=>$tab['referenceD'],
                        ":idpersonne"=>$tab['idpersonne'],
                        ":dateRDV"=>$tab['dateRDV'],
                        ":heureRdv"=>$tab['heureRdv'],
                        ":LieuRdv"=>$tab['LieuRdv'],
                        ":Rapport"=>$tab['Rapport']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }


public function deleteRDV($idRDV)
    {
      $requete = "delete from RDV where idRDV = :idRDV;";
      $donnees =array(":idRDV" => $idRDV);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }


  public function selectAllDossier()
  {

    if ($this->pdo != null) // appel de la FANNConnection
    {
      $requete = "select*from dossier;";
      //Preparation de la requete
      $select = $this->pdo->prepare ($requete);
      //execution de la requete
      $select->execute();
      //extraction des enregistrements
      return $select->fetchAll();
    }
    else
    {
      return null;
    }
  }

   public function insertDossier($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Dossier values (null, :idDo, :idpersonne, :idpersonne_1, :dateDossierDeb, :montantfranchise, :importance);";
      $donnees = array(
                        ":idDo"=>$tab['idDo'],
                        ":idpersonne"=>$tab['idpersonne'],
                        ":idpersonne_1"=>$tab['idpersonne_1'],
                        ":dateDossierDeb"=>$tab['dateDossierDeb'],
                        ":montantfranchise"=>$tab['montantfranchise'],
                        ":importance"=>$tab['importance']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }


  public function deleteDossier($referenceD)
    {
      $requete = "delete from Dossier where referenceD = :referenceD;";
      $donnees =array(":referenceD" => $referenceD);
      $select = $this->pdo->prepare ($requete);
      //execution de la requete avec les donnees des variables PDO
      $select->execute ($donnees);
    }


 public function selectAllUtilisateur()
  {

    if ($this->pdo != null) // appel de la FANNConnection
    {
      $requete = "select*from Utilisateur;";
      //Preparation de la requete
      $select = $this->pdo->prepare ($requete);
      //execution de la requete
      $select->execute();
      //extraction des enregistrements
      return $select->fetchAll();
    }
    else
    {
      return null;
    }
  }

  public function insertUtilisateur($tab)
  {
    if ($this->pdo != null) // appel de la FANNConnection
    {

      $requete = "insert into Utilisateur values (null, :poste, :anciennete, :nom, :prenom, :adresse, :cp, :ville, :email, :mdp);";
      $donnees = array(
                        ":poste"=>$tab['poste'],
                        ":anciennete"=>$tab['anciennete'],
                        ":nom"=>$tab['nom'],
                        ":prenom"=>$tab['prenom'],
                        ":adresse"=>$tab['adresse'],
                        ":cp"=>$tab['cp'],
                        ":ville"=>$tab['ville'],
                        ":email"=>$tab['email'],
                        ":mdp"=>$tab['mdp']);

      $select = $this->pdo->prepare($requete);
      //execution de la $requete avec les donnees des variables PDO
      $select->execute($donnees);
    }
  }

public function selectViewAss()
  {

    if ($this->pdo != null) // appel de la FANNConnection
    {
      $requete = "select * from vstat4;";
      //Preparation de la requete
      $select = $this->pdo->prepare ($requete);
      //execution de la requete
      $select->execute();
      //extraction des enregistrements
      return $select->fetchAll();
    }
    else
    {
      return null;
    }
  }


  public function selectViewUti()
  {

    if ($this->pdo != null) // appel de la FANNConnection
    {
      $requete = "select * from vstat3;";
      //Preparation de la requete
      $select = $this->pdo->prepare ($requete);
      //execution de la requete
      $select->execute();
      //extraction des enregistrements
      return $select->fetchAll();
    }
    else
    {
      return null;
    }
  }

   public function selectViewMetr()
  {

    if ($this->pdo != null) // appel de la FANNConnection
    {
      $requete = "select * from vstat2;";
      //Preparation de la requete
      $select = $this->pdo->prepare ($requete);
      //execution de la requete
      $select->execute();
      //extraction des enregistrements
      return $select->fetchAll();
    }
    else
    {
      return null;
    }
  }

   public function selectViewSoc()
  {

    if ($this->pdo != null) // appel de la FANNConnection
    {
      $requete = "select * from vstat;";
      //Preparation de la requete
      $select = $this->pdo->prepare ($requete);
      //execution de la requete
      $select->execute();
      //extraction des enregistrements
      return $select->fetchAll();
    }
    else
    {
      return null;
    }
  }
}
?>



