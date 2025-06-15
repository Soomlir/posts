  <?php
  require_once __DIR__ . "/../../init.php";
  require_once BASE_DIR . "/src/Model/PostsModel.php";
  class PostsController
  {
    protected $model;

    public function __construct()
    {
      $this->model = new PostsModel();
    }

    public function index()
    {
      $posts = $this->model->getPosts();
      require_once BASE_DIR . "/src/Views/posts/index.php";
    }

    public function post() {
      session_start();
      $id = $_GET['id'];
      $post = $this->model->getPost($id);
      require_once BASE_DIR . "/src/Views/posts/post.php";
    }

    public function create() {
      require_once BASE_DIR . "/src/Views/posts/create.php";
    }
  }
