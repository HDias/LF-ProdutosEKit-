<?php
namespace Produto\Controller;

use Application\Entity\Cliente;

class ClienteController extends CrudController
{
	public function __construct(){
		$this->entity = 'Produto\Entity\ClienteEntity';
	}
}
