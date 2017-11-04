<?php
// webhook do mgs !
// verifica se a requisição vem do servidor gitlab
//$gitlab_ips = array('172.31.3.8', '127.0.0.1');
//if (!in_array($_SERVER['REMOTE_ADDR'], $gitlab_ips)) {
//    throw new Exception("Isto não parece uma requisição válida do Gitlab.\n");/
//}



if ($payload = file_get_contents('php://input')) {
    try {
        $payload = json_decode($payload);
    } catch (Exception $ex) {
        echo $ex;
        exit(0);
    }
    // put the branch you want here
    if (!\in_array($payload->ref, ['refs/heads/master', 'refs/heads/develop'])) {
        echo 'cabeçalho errado';
        exit(0);
    }
    $branch = \explode('/',$payload->ref)[2];
    //put the branch you want here, as well as the directory your site is in
    echo "teste";
    echo exec("cd /var/www/html/espaco && git fetch origin && git merge origin/$branch");

} else {
    echo 'requisição falhou';
}