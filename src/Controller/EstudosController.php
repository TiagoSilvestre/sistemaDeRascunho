<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class EstudosController extends AppController {

    public function index() {
        $this->set('result', $this->Estudos->find()->all());
    }

    public function add() {
        $addestudo = $this->Estudos->newEntity();

        if ($this->request->is('post')) {
            $name = $this->request->data['imagem']['name'];
            $tmpName = $this->request->data['imagem']['tmp_name'];

            try {
                $this->uploadImg($tmpName, $name);
                $this->request->data['imagem'] = $name;
                $data = $this->Estudos->newEntity($this->request->data);
                $this->redirectSave($data);
            } catch (\Exception $e) {
                $this->set("erro", $e->getMessage());
                return;
            }
        }
        $this->set('addestudo', $addestudo);
    }

    public function uploadImg($tmpName, $name) {
        $imgPath = WWW_ROOT . 'img' . DS;
        if (!file_exists($imgPath)) {
            throw new Exception('Ops, existem problemas no caminho da pasta.');
        }
        if (move_uploaded_file($tmpName, $imgPath . $name)) {
            return;
        } else {
            throw new \Exception('Ops, não deu de mover o arquivo para a pasta.');
        }
    }

    public function redirectSave($data) {
        if ($this->Estudos->save($data)) {
            return $this->redirect('/estudos');
        } else {
            throw new \Exception('Arquivo não pode ser salvo, tente mais tarde =(');
        }
    }

    public function edit($id = null) {
        $data = $this->Estudos->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Estudos->patchEntity($data, $this->request->data);
            if ($this->Estudos->save($data)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'edit/'.$id]);
            }else{
                echo "Nao foi possivel salvar!!";
            }
            
        }

        $this->set('resultView', $data);
    }

}
