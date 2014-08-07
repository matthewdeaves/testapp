<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property App\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Users']
		];
		$this->set('posts', $this->paginate($this->Posts));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function view($id = null) {
		$post = $this->Posts->get($id, [
			'contain' => ['Users']
		]);
		$this->set('post', $post);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$post = $this->Posts->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Posts->save($post)) {
				$this->Flash->success('The post has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The post could not be saved. Please, try again.');
			}
		}
		$users = $this->Posts->Users->find('list');
		$this->set(compact('post', 'users'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function edit($id = null) {
		$post = $this->Posts->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['post', 'put'])) {
			$post = $this->Posts->patchEntity($post, $this->request->data);
			if ($this->Posts->save($post)) {
				$this->Flash->success('The post has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The post could not be saved. Please, try again.');
			}
		}
		$users = $this->Posts->Users->find('list');
		$this->set(compact('post', 'users'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function delete($id = null) {
		$post = $this->Posts->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Posts->delete($post)) {
			$this->Flash->success('The post has been deleted.');
		} else {
			$this->Flash->error('The post could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
