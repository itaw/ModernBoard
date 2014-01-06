<?php

namespace ModernBoard\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ModernBoard\Component\Controller;

class PageController extends Controller
{

    public function indexAction(Request $request)
    {
        return new Response(sprintf($this->generateUrl('board_homepage')));
    }

}
