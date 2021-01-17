  <h1>Профиль</h1>

<?php
		class Profile 
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    //page profile of registered user- output data from database 'mysite' 
	public function get_post()
	{	
	
		$id = file_get_contents('application/views/content2_view.php');
		$this->db->getRow("SELECT * FROM user  WHERE `id_user` = ?", [$id]);
		$user= $this->db->getRow("SELECT * FROM user  WHERE `id_user` = ?", [$id]);
		
		echo 'Имя:'.' '.$user['name'].'<br/>';
		echo 'Фамилия:'.' '.$user['surname'].'<br/>';
		echo 'Город:'.' '.$user['city'].'<br/>';
		echo 'Е-мейл:'.' '.$user['email'].'<br/>';
		echo 'Фотография:'.' <img src="application/foto/'.$user['avatar'].'"width=30%>'.'<br/>';
	}
}
$db = new DB();
$test = new Profile($db);
$data = $test->get_post();
		
?>

