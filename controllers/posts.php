<?php
	require APP_FILEPATH.'/controller_baseclass.php';
class posts extends controller_baseclass{
		public function index(){
			$this->overview();
		}
		public function overview(){
			$selectpostsquery = "select * from posts limit 10";
			$results = $this->db_query_assoc($selectpostsquery);
			$this->loadview('overview', $results);
		}
		public function new_post(){
			$this->loadview('new_post', []);
		}
		public function process_post(){
			$text = $this->sql_escape_string($_POST['text']);
			$title = $this->sql_escape_string($_POST['title']);
			$query = "INSERT INTO `posts` (`id`, `title`, `text`) VALUES (NULL, '$title', '$text')";
			$this->db_query($query);
			$this->new_post();
		}
		public function post($id){
			$cleaned_id = mysql_escape_string($id);
			$selectpostsquery = "select * from posts where id=`$cleaned_id`";
			$results = mysql_fetch_assoc($selectpostsquery);
			$selectcommentsquery = "select * from comments where post_id=`$cleaned_id`";
			$comments = mysql_fetch_assoc($selectcommentssquery);
			$this->loadview('post', ['post' => $results[0], 'comments' => $comments]);
		}
	}
?>
