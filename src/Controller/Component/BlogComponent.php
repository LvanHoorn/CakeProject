<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class BlogComponent extends Component
{
	
	public function sayHelloTest()
	{
		return 'Hello'; 
	}

	public function getPosts()
	{
		$posts = [
				['id' => 1, 'title' => 'First Post', 'body' => 'This is my first post'],
				['id' => 2, 'title' => 'Post Two', 'body' => 'This is my second post'],
				['id' => 3, 'title' => 'Post Three', 'body' => 'This is my third post']
		]; 

		return $posts;
	}
}