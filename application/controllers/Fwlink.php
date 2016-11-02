<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fwlink extends CI_Controller
{

    private static $datas = [
        '1' => 'https://www.google.com',
        '2' => 'https://www.github.com',
        '3' => 'https://www.duckduckgo.com',
        '4' => 'https://www.gmail.com',
    ];

    public function _remap($method)
    {
        $this->load->helper('url');

        if ($method === 'index')
        {
            $this->index();
        } else {
            $this->other();
        }
    }

    public function index()
    {
        if (count($_GET) === 0)
        {
            redirect(base_url('/'));
        }

        if (!isset($_GET['linkid']))
        {
            echo "403 param error!";
            return ;
        }

        $this->linkid($_GET['linkid']);
    }

    public function linkid($id)
    {
        if (!isset(Fwlink::$datas[$id]))
        {
            echo '#: id param Error!';
            return ;
        }

        $weburl = Fwlink::$datas[$id];
        echo '[ '.$id.' ] Forward link to <a href="'.$weburl.'">'.$weburl.'</a>';
    }

    public function other()
    {
        redirect(base_url('/'));
    }
}
