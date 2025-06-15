<?php
require_once __DIR__ . "/../../core/Database.php";
class PostsModel
{
  protected $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getPosts()
  {
    $stmt = $this->db->query("SELECT * FROM posts");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getPost($id)
  {
    $stmt = $this->db->query("SELECT * FROM posts WHERE id = :id", ['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
