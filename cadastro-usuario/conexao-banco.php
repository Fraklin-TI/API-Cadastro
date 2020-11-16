<?

$hostname = "localhost";

$database = "api-cadastro-pessoa";

$porta = "5432";

$user = "postgres";

$senha = "290912";

$conn = pg_connect("host=".$hostname." dbname=".$database." port=".$porta." user=".$user." password=".$senha);

if(!$conn){
    echo"Falha na conexão com o banco. Veja detalhes técnicos:".pg_last_error($conn);
}

?>