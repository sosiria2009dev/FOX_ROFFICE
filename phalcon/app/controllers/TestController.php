<?php

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        // phpinfo();
        $debug = TestTable::find();
        foreach ($debug as $val) {
            echo '[id]'.$val->id.' [val]'.$val->val."<br />";
        }        
    }

}

