<?php

namespace app\Controllers;

class PaysController extends \Kernel\Controller
{
    //afficher la liste des pays

    public function index(){
         $pays = \app\Models\Pays::all();
         return new \Kernel\View ('pays/index.php', ['pays'=>$pays]);
    }

    //edition
    public function edit() 
    {
     $pays = \app\Models\Pays::find($_GET['pays']);
        return new \Kernel\View('pays/form.php', ['pays' => $pays]);
  
    }

    //pour l update
    public function update()
    {
        $pays = \app\Models\Pays::find($_POST['pays']);
        $pays->name=$_POST['name'];
        $pays->save();

        header('Location:.?controller=Pays&action=index');
    }

    //suppression

    public function delete()
    {
        $pays = \app\Models\Pays::find($_GET['pays']);
        return new \Kernel\View('pays/confirmDelete.php', ['pays' => $pays]);
    }

    public function deleteConfirm()
    {
        $pays = \app\Models\Pays::find($_POST['pays']);
        $pays->delete();

        header('Location:.?controller=Pays&action=index');
    }
}
