<?php

namespace Modules\Blog\Controllers;

use App\Controllers\BaseController;
use Modules\Blog\Models\BlogModel;

class Blog extends BaseController
{
	var $data = [];

	public function index()
	{
        $this->data['string'] = 'Blog page';

		return view("\Modules\Blog\Views\index", $this->data);
	}
  
    public function post()
	{
        $this->data['string'] = 'Post page';

		return view("\Modules\Blog\Views\index", $this->data);
	}
}