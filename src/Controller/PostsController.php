<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
	{

		private $posts;

		public function initialize()
		{
			$this->loadComponent('Blog');
			$this->posts =  $this->Blog->getPosts();
		}

		public function index()
		{
			//$this->set('person', 'Luciano');
			//$people = ['Mike', 'Paul', 'Jeremy', 'Michelle'];
			//$this->set('people', $people);
			
			$this->set('posts', $this->posts);
		}

		public function create()
		{
			die('Creating post..');
		}

		public function view($id)
		{
			$post = 
			[
				'id' => $id,
				'title' => 'First Post',
				'body' => 'This is my first post'
			];

			$this->set('posts', $this->posts);
			$this->set('post', $post);
		}

		public function Edit($id)
		{
			die('Editing post ' . $id);
		}
		
	
	}