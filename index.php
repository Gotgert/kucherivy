<?php

class Page
{
    private string $name;
    protected string $template;

    public function __construct()
    {
        $this->name = "page";
        $this->template = "<div><p>Добро пожаловать на главную страницу моего блога</p></div>";
    }

    public function render(): void
    {
        echo $this->template;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class BlogPage extends Page
{
    public function __construct()
    {
        $this->template = '
        <div>
            <div style="border: 1px solid #ccc; padding: 10px; margin: 10px;">
                <h3>Выпуск 1</h3>
                <p>Гуляю по лесу</p>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin: 10px;">
                <h3>Выпуск 2</h3>
                <p>Сижу в ресторане и размышляю</p>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; margin: 10px;">
                <h3>Выпуск 3</h3>
                <p>Играю в теннис</p>
            </div>
        </div>';
    }

    public function getName(): string
    {
        return "blog";
    }
}

echo '<a href="?page=page">Страница Page</a> | ';
echo '<a href="?page=blog">Страница Blog</a><br><br>';

if (isset($_GET['page'])) {
    $pageParam = $_GET['page'];
    
    if ($pageParam === 'page') {
        $page = new Page();
        $page->render();
    } elseif ($pageParam === 'blog') {
        $page = new BlogPage();
        $page->render();
    } else {
        echo "<p>Страница не найдена</p>";
    }
} else {
    $page = new Page();
    $page->render();
}