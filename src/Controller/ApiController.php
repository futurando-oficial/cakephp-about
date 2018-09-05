<?php
namespace About\Controller;

use About\Controller\AppController;

/**
 * Api Controller
 *
 *
 * @method \About\Model\Entity\Api[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApiController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadmodel('About');
        $about = $this->About->find()->first();

        $this->set(compact('about'));
        $this->set('_serialize', ['about']);
    }

}
