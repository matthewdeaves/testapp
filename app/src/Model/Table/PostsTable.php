<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 */
class PostsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('posts');
		$this->displayField('title');
		$this->primaryKey('id');

		$this->belongsTo('Users', [
			'foreignKey' => 'user_id',
		]);
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'uuid'])
			->allowEmpty('id', 'create')
			->validatePresence('title', 'create')
			->notEmpty('title')
			->allowEmpty('content')
			->add('user_id', 'valid', ['rule' => 'uuid'])
			->validatePresence('user_id', 'create')
			->notEmpty('user_id');

		return $validator;
	}

}
