<?php
    session_start();
    // template lib
    require 'libs/Smarty.class.php';
    require 'libs/vendor/functions.php';
    require 'libs/vendor/configuration.php';

    $smarty = new Smarty;
    $smarty->caching = false;
    $smarty->cache_lifetime = 120;

    // config
    $smarty->assign('config', $configuration);
    $smarty->assign('app_name', getenv('APP_NAME'));

    // plugins
    $smarty->registerPlugin('block', 'translate', '_translate');

    // navigation
    $categories_list = $db->query("SELECT * FROM categories")->fetchAll();
    $smarty->assign('navtabs', $categories_list);

    // default language
    $app->default_language = (isset($_SESSION['language'])) ? $_SESSION['language'] : getenv('APP_DEFAULT_LANGUAGE');

    if($app->__init__()){
        // categories names
        $categories = [];
        $categories_ = $db->query("SELECT * FROM categories")->fetchAll();

        for($x = 0; $x < count($categories_); $x++){
            $categories[$categories_[$x]['id']] = $categories_[$x]['unique_name'];
        }

        // articles
        $recent = $db->query("SELECT * FROM articles ORDER BY published_at ASC LIMIT 3")->fetchAll();
        $articles = [];
        $popular = [];

        // articles
        for($a = 0; $a < count($categories_); $a++){
            $art = $db->query("SELECT * FROM articles WHERE category_id=? ORDER BY category_id ASC LIMIT 3", $categories_[$a]['id'])->fetchAll();
            $articles[$categories_[$a]['unique_name']]['articles'] = $art;
            $articles[$categories_[$a]['unique_name']]['name'] = $categories_[$a]['unique_name'];
        }

        $articles_ = $db->query("SELECT * FROM articles")->fetchAll();

        // popular
        for($p = 0; $p < 3; $p++){
            array_push($popular, $articles_[array_rand($articles_)]);
        }

        // categories names
        $categories = [];
        $categories_ = $db->query("SELECT * FROM categories")->fetchAll();

        for($x = 0; $x < count($categories_); $x++){
            $categories[$categories_[$x]['id']] = $categories_[$x]['unique_name'];
        }

        // articles
        $recent = $db->query("SELECT * FROM articles ORDER BY published_at ASC LIMIT 3")->fetchAll();
        $articles = [];
        $popular = [];

        // articles
        for($a = 0; $a < count($categories_); $a++){
            $art = $db->query("SELECT * FROM articles WHERE category_id=? ORDER BY category_id ASC LIMIT 3", $categories_[$a]['id'])->fetchAll();
            $articles[$categories_[$a]['unique_name']]['articles'] = $art;
            $articles[$categories_[$a]['unique_name']]['name'] = $categories_[$a]['unique_name'];
        }

        $articles_ = $db->query("SELECT * FROM articles")->fetchAll();

        // popular
        for($p = 0; $p < 3; $p++){
            array_push($popular, $articles_[array_rand($articles_)]);
        }

        // carousel
        $carousel = $db->query("SELECT * FROM articles WHERE summary NOT LIKE '%Rewriter error%' ")->fetchAll();
        $carousel_items = [];

        for($i = 0; $i < getenv('APP_CAROUSEL_LIMIT'); $i++){
            array_push($carousel_items, $carousel[array_rand($carousel)]);
        }


        $app->route('/', function(){
            global $smarty, $db, $carousel_items, $categories, $articles, $recent, $popular;            

            $smarty->assign('title', "Health treatment journal");
            $smarty->assign('description', 'Health is the most important thing in our life. Read and take care of your health with us.');
            $smarty->assign('keywords', 'men health, women health, scin care, nails, covid');
            $smarty->assign('carousel_items', $carousel_items);
            $smarty->assign('categories', $categories);
            $smarty->assign('articles', $articles);
            $smarty->assign('recent', $recent);
            $smarty->assign('popular', $popular);

            $smarty->display('main/index.tpl');
        });

        $app->route('/category/@id', function($id){
            global $smarty, $db, $categories, $articles, $recent, $popular;

            $c_ = $db->query("SELECT * FROM categories WHERE id=?", $id)->fetchAll();

            if($id == 'popular'){
                $category_name = 'Popular';

                $category_articles = $db->query("SELECT * FROM articles")->fetchAll();

                $smarty->assign('title', "Popular articles");
                $smarty->assign('description', 'Top articles about heath');
                $smarty->assign('keywords', 'health, top, articles, articles about health');
                $smarty->assign('categories', $categories);
                $smarty->assign('articles', $articles);
                $smarty->assign('recent', $recent);
                $smarty->assign('popular', $popular);
                $smarty->assign('category_name', $category_name);
                $smarty->assign('category_articles', $category_articles);

                $smarty->display('category/index.tpl');
            }else{
                if(count($c_) == 0){
                    $smarty->display('error/404.tpl');
                }else{
                    $category_name = $c_[0]['unique_name'];
    
                    $category_articles = $db->query("SELECT * FROM articles WHERE category_id=?", $id)->fetchAll();
    
                    $smarty->assign('title', "Articles in ".$category_name);
                    $smarty->assign('description', 'Top articles from '.$category_name);
                    $smarty->assign('keywords', 'articles, health articles, top articles, treat your health');
                    $smarty->assign('categories', $categories);
                    $smarty->assign('articles', $articles);
                    $smarty->assign('recent', $recent);
                    $smarty->assign('popular', $popular);
                    $smarty->assign('category_name', $category_name);
                    $smarty->assign('category_articles', $category_articles);
    
                    $smarty->display('category/index.tpl');
                }
            }
        });

        $app->route('/search', function(){
            global $smarty, $db, $categories, $articles, $recent, $popular;

            $query = $_POST['q'];
            if(isset($query)){
                $category_articles = $db->query("SELECT * FROM articles WHERE summary LIKE ? OR title LIKE ?", '%'.$query.'%', '%'.$query.'%')->fetchAll();
                $search_query = $query;

                $smarty->assign('title', "Search results on query: ".$query);
                $smarty->assign('description', "Search results on query: ".$query);
                $smarty->assign('keywords', 'articles, categories, articles by categories');
                $smarty->assign('categories', $categories);
                $smarty->assign('articles', $articles);
                $smarty->assign('recent', $recent);
                $smarty->assign('popular', $popular);
                $smarty->assign('search_query', $search_query);
                $smarty->assign('category_articles', $category_articles);

                $smarty->display('search/index.tpl');
            }else{
                header('Location: /404');
            }
        });

        $app->route('/read/@id', function($id){
            global $smarty, $db, $categories, $articles, $recent, $popular, $app;

            $c_ = $db->query("SELECT * FROM articles WHERE id=?", $id)->fetchAll();

            if(count($c_) == 0){
                $smarty->display('error/404.tpl');
            }else{
                $category_articles = $db->query("SELECT * FROM articles WHERE id=?", (int)$id)->fetchAll();

                $p = preg_split('#(\r\n?|\n)+#', $category_articles[0]['summary']);
                $summary = '';

                for($x = 0; $x < count($p); $x++){
                    $summary .= '<p>'.$p[$x].'</p>';
                }

                $keys = $app->getArticleKeywords($category_articles[0]['summary']);
                $meta_keywords = '';

                foreach($keys as $key => $value){
                    $meta_keywords .= $key.', ';
                }

                $smarty->assign('title', $category_articles[0]['title']);
                $smarty->assign('description', $category_articles[0]['description']);
                $smarty->assign('keywords', $category_articles[0]['keywords'].$meta_keywords);
                $smarty->assign('categories', $categories);
                $smarty->assign('articles', $articles);
                $smarty->assign('recent', $recent);
                $smarty->assign('popular', $popular);
                $smarty->assign('article_data', $category_articles[0]);
                $smarty->assign('summary', $summary);
                $smarty->assign('article_url', 'https://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                $smarty->assign('addons_keywords', $app->getArticleKeywords($category_articles[0]['summary']));
                $string = $category_articles[0]['summary'];

                $smarty->display('article/index.tpl');
            }
        });

        $app->route('/subscribe', function(){
            $email = $_POST['email'];

            // anything to do
            echo $email;
        });

        // assets
        $app->route('/assets/@folder/@file', function($folder, $file){
            echo file_get_contents("/assets/{$folder}/{$file}");
        });

        // finish instalation
        $app->route('/api/install/finish', function(){
            global $smarty;

            $smarty->assign('wsapi', getenv('API_HOST'));
            $smarty->display('main/install_finish.tpl');
        });

        // get articles
        $app->route('/api/data/get_articles', function(){
            global $db;
            
            // fetch articles
            $articles = $db->query("SELECT * FROM articles")->fetchAll();
            // return as json
            echo(json_encode($articles));
        });

        $app->route('POST /api/data/update_article', function(){
            global $db;
            
            // article data
            $article = file_get_contents('php://input');
            $article_array = json_decode($article, true);

            $article_id = $article_array['id'];
            $summary = $article_array['summary'];
            $description = $article_array['description'];
            $title = $article_array['title'];

            // fetch articles
            $articles = $db->query("UPDATE articles SET summary=?, description=?, title=? WHERE id=?", $summary, $description, $title, $article_id);
            // return as json
            echo(json_encode($articles));
        });

        $app->run();
    }else{
        $smarty->assign('categories', getenv('APP_CATEGORIES'));
        $smarty->display('main/install.tpl');
        
        $app->route('POST /api/install', function(){
            global $app, $db;

            $categories = $_POST['categories'];
            $categories_list = explode(',', $categories);

            for($i = 0; $i < count($categories_list); $i++){
                $category_exists = $db->query("SELECT * FROM categories WHERE unique_name=?", $categories_list[$i])->fetchAll();
                
                if(count($category_exists) == 0){
                    $insert = $db->query("INSERT INTO categories(unique_name) VALUES(?)", $categories_list[$i]);
                }  
            }

            $data = [];
            $data['categories'] = [];
            $data['language'] = $_POST['language'];
            $data['attach_media'] = true;
            $data['limit_each_category'] = $_POST['limit'];

            for($i = 0; $i < count($categories_list); $i++){
                array_push($data['categories'], $categories_list[$i]);
            }            

            $app->migrate_articles($data);
        });

        // ignore requests
        $app->route('*', function(){});

        $app->run();
    }
?>