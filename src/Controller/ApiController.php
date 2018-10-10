<?php

namespace About\Controller;

use About\Controller\AppController;
use Cake\Event\Event;

/**
 * Api Controller
 *
 *
 * @method \About\Model\Entity\Api[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApiController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->loadmodel('About');
        $about = $this->About->find()->first();

        $this->set(compact('about'));
        $this->set('_serialize', ['about']);
    }

}
