<?php

use Phalcon\Mvc\Model\Criteria;

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function viewAction()
    {
        $user = User::find();
        $this->view->data=$user;
    }

    public function createAction()
    {
        $user = new User();
        $user->nama_user = $this->request->getPost("txt_nama");
        $user->email_user = $this->request->getPost("txt_email");
        if (!$user->save()) {
            echo "Gagal Disimpan";
        }
        else
        {
            echo "Data Berhasil Disimpan";
        }

        $this->view->disable();
    }

    public function editAction($id)
    {
        $user = User::findFirstByidUser($id);
        $this->view->id = $user->id_user;
        $this->view->email = $user->email_user;
        $this->view->nama = $user->nama_user;
    }

    public function updateAction()
    {
        $id = $this->request->getPost("txt_id");
        $user = User::findFirstByidUser($id);
        $user->nama_user = $this->request->getPost("txt_nama");
        $user->email_user = $this->request->getPost("txt_email");
        if (!$user->save()) {
            echo "Update Gagal";
        }
        else
        {
            echo "Update Data Berhasil <br> <a href='/user/view'>lihat data</a>";
        }
    }

    public function hapusAction($id)
    {
        $user = User::findFirstByidUser($id);

        if (!$user->delete()) {
            echo "Gagal Hapus Data";
        }
        else
        {
            echo "Berhasil Hapus Data";
        }
    }

    public function cariAction()
    {
        $parameters = array();

        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "User", $this->request->getPost());
            $this->persistent->searchParams = $query->getParams();
        }

        if ($this->persistent->searchParams) {
            $parameters = $this->persistent->searchParams;
        }

        $user = User::find($parameters);
        $this->view->datacari=$user;
    }
}

