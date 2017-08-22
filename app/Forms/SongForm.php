<?php

namespace App\Forms;

use App\Models\Admin\QuestionModel;
use Kris\LaravelFormBuilder\Form;

class SongForm extends Form
{
	
    public function buildForm()
    {
        $this->add('publish', 'checkbox')
    		 ->add('submit', 'submit', ['label' => 'Save form', 'attr' => ['class' => 'btn btn-success']]);
	}
}
