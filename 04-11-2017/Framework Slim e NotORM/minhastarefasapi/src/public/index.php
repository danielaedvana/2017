<?php 
    use \Psr\Http\Message\ServerRequestInterface as Request; 
    use \Psr\Http\Message\ResponseInterface as Response;
    
    require '../vendor/autoload.php';

    $config['displayErrorDetails'] = true; 
    $config['addContentLengthHeader'] = false;
    $config['db']['host'] = "localhost"; 
    $config['db']['user'] = "systarefas"; 
    $config['db']['pass'] = "systarefas"; 
    $config['db']['dbname'] = "minhastarefas";

    $app = new \Slim\App(["config" => $config]);
    $container = $app->getContainer();

    $container['db'] = function ($c) 
    { 
        $dbConfig = $c['config']['db']; 
        $pdo = new PDO("mysql:host=" . $dbConfig['host'] . ";dbname=" . $dbConfig['dbname'], $dbConfig['user'], $dbConfig['pass']); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
        $db = new NotORM($pdo); 
        return $db; 
    };

    $app->get('/api/tarefas/{id}', function (Request $request, Response $response) 
    {
        $idTarefa = $request->getAttribute("id");
        $tarefa = $this->db->tarefas("id = ?", $idTarefa)->fetch();
        return $response->withJson($tarefa);
    
    });
	
	$app->post('/api/tarefa', function (Request $request, Response $response) 
    {  
        $body = $request->getParsedBody();
			$tarefa = array(
			"titulo"  =>  $body["titulo"],
			"descricao" => $body["descricao"],
			"concluida" =>  $body["concluida"]
		);
		$result = $this->db->tarefas()->insert($tarefa);
		return $result;
    });

	
	$app->put('/api/tarefa/{id}', function(Request $request, Response $response){ 
		$idTarefa = $request->getAttribute("id");
		$tarefa = $this->db->tarefas[$idTarefa];
		$body = json_decode($request->getBody(), true);
		$data = array(
            "titulo" => $body["titulo"],
            "descricao" => $body["descricao"],
            "concluida" => $body["concluida"]
        );
		$result = $tarefa->update($data);
		 return $result;
    
	});
	
	$app->delete('/api/tarefa/{id}', function (Request $request, Response $response) {
    $idTarefa = $request->getAttribute('id');
    $tarefa = $this->db->tarefas[$idTarefa];
	$tarefa->delete();
});


    $app->run(); 
?>

