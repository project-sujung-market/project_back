<?php

namespace Art\Controller;

class UploadController extends MainController
{
    public function uploadPage() {
        $this->view("/upload", []);
    }
}