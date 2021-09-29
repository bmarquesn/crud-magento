<?php

namespace MaggedIn\CourseExamples\Controller\Examples;

use Magento\Framework\App\ResponseInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        echo 'this test is ok';
        die;
    }
}