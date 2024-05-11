<?php
    class VoitureController extends CI_Controller{
        function index(){
            echo 'index';
        }
        function afficherListeVoiture(){
            $data=['voitures'=>$this->Voiture->getVoitures()];
            $dataHeader['titre'] = 'Liste des voitures';
            $this->load->view('template/header.php',$dataHeader);
            $this->load->view('listVoitures',$data);
            $this->load->view('template/footer.php');
        }
        function afficherAjout(){
            $dataHeader['titre'] = 'Ajout voiture';
            $this->load->view('template/header.php',$dataHeader);
            $this->load->view('ajoutVoiture');
            $this->load->view('template/footer.php');
        }
        function saveVoiture(){
           $voiture =[
                'marque'=> $this->input->post('marque'),
                'numero'=> $this->input->post('numero'),
                'couleur'=>$this->input->post('couleur'),
                'img'=>$this->input->post('image')
           ];
           $this->Voiture->insertVoiture( $voiture);
           redirect(base_url());
        }
    }