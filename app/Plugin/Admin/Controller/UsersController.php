<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AdminAppController {

    /**
     * Components
     *
     * @var array
     */
    var $name = 'Users';
    var $uses = array('User');

    /**
     * Components
     *
     * @var array
     */
    var $helpers = array('Form', 'UploadPack.Upload', 'Lib', 'Html');
    public $components = array('Session', 'Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $projects = $this->User->Project->find('list');
        $this->set(compact('projects'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $projects = $this->User->Project->find('list');
        $this->set(compact('projects'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function beforeFilter() {
        parent::beforeFilter();
        /*
          //create table in database for this exemple
          / * Load Model datasource * /
          App::import('Model', 'ConnectionManager');
          $con = new ConnectionManager;
          $cn = $con->getDataSource('default');
          / * User table schema * /
          $sql = "CREATE TABLE IF NOT EXISTS users (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(50),
          password VARCHAR(50),
          created DATETIME DEFAULT NULL,
          modified DATETIME DEFAULT NULL
          )";
          $cn->query($sql);
         */
        /* allow add action so user can register */
        $this->Auth->allow('register', 'logout');
    }

    public function login() {

        $this->layout = "login";

        if ($this->request->is('post')) {
            /* login and redirect to url set in app controller */
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        /* logout and redirect to url set in app controller */
        $this->Session->setFlash('* Thank you for using our system!');
        $this->Session->delete('Auth');
        $this->Session->destroy();
        $this->redirect($this->Auth->logout($this->data));
    }

    public function register() {

        $this->layout = "login";

        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(__('* O usuário não pôde ser salvo. Por favor, tente novamente.!'));
        }
    }

}
