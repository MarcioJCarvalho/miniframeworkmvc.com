<?php

$this->get('/', function(){
    (new \app\controller\TesteController)->index();
});

$this->get('/about/test', function(){
    echo 'Estou na about teste';
});

$this->get('/categoria', 'TesteController@method');
