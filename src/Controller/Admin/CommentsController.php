<?php namespace Streams\Addon\Module\Comments\Controller\Admin;

use Streams\Core\Controller\AdminController;

class CommentsController extends AdminController
{
    public function index()
    {
        return \View::make('module.comments::index');
    }
}