<?php
    require './plugins/flight/Flight.php';

    class App{
        public $default_language = 'en';
        public function __construct(){
            $handle = fopen('./.env', 'r');
            
            if($handle){
                while(($line = fgets($handle)) !== false){
                    $line = str_replace("\r\n", "", $line);
                    $line = trim($line);

                    try {
                        putenv($line);
                    } catch (Exception $e) {
                        continue;
                    }
                }

                fclose($handle);
            }else{
                die('No .env file inside engine.');
            }
        }
        public function __init__(){
            global $db;

            $seeds = [
                "CREATE TABLE IF NOT EXISTS categories (id INTEGER NOT NULL AUTO_INCREMENT, unique_name TEXT NOT NULL, PRIMARY KEY (id))",
                "CREATE TABLE IF NOT EXISTS articles (id INTEGER NOT NULL AUTO_INCREMENT, title TEXT NOT NULL, description TEXT NOT NULL, keywords TEXT NOT NULL, category_id INTEGER NOT NULL, photo text NOT NULL, published_at datetime NOT NULL, summary TEXT NOT NULL, PRIMARY KEY (id))"
            ];
            
            $this->migrate($seeds);
            
            $categories = $db->query("SELECT * FROM categories")->fetchAll();
            // if no categories
            if(count($categories) == 0){
                return false;
            }else{
                $articles = $db->query("SELECT * FROM articles")->fetchAll();
                // if no categories
                if(count($articles) == 0){
                    return false;
                }else{
                    return true;
                }
            }
        }
        public function migrate_articles($data){
            global $db;

            $payload = json_encode($data);
            $ch = curl_init('http://'.getenv('API_HOST').'/api/get_articles');

            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type:application/json',
                'x-auth-login:'.getenv('API_USER'),
                'x-auth-password:'.getenv('API_PASS')
            ));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($ch);
            curl_close($ch);

            $json = json_decode($result, true);

            $articles_count = 0;

            if(gettype($json) != 'NULL'){
                foreach($json as $key => $value){
                    $articles_count += count($json[$key]);

                    foreach($json[$key] as $article){
                        $path = str_replace("'", "", $article['path']);
                        $path = str_replace('"', '', $article['path']);

                        $title = $article['title'];
                        $path = $path;
                        $description = $article['description'];
                        $summary = $article['summary'];
                        $keywords = $article['keywords'];
                        $published_at = $article['date'];

                        $category = $db->query("SELECT * FROM categories WHERE unique_name=?", $key)->fetchAll();
                        $category_id = $category[0]['id'];
                        $photo = '/uploads/'.md5($article['media_top_image']);

                        $db->query("INSERT INTO articles(title, description, keywords, category_id, photo, published_at, summary) VALUES(?,?,?,?,?,?,?)", $title, $description, $keywords, $category_id, $photo, $published_at, $summary);

                        if(!file_exists('./assets/uploads')){
                            mkdir('./assets/uploads', 0700);
                        }

                        $image_url = 'http://'.getenv('API_HOST').$article['media_top_image'];
                        
                        file_put_contents('./assets/'.$photo, file_get_contents($image_url));
                    }
                }

                $articles_count_installed = $db->query("SELECT * FROM articles")->fetchAll();

                if($articles_count == count($articles_count_installed)){
                    echo "<script>
                        setTimeout(function(){
                            window.location.href = '/api/install/finish';
                        }, 5000);
                    </script>";
                    echo "<div class=\"alert alert-success\" style=\"margin: auto; display: table; text-align: center\" role=\"alert\">Статьи успешно добавлены, через 5 минут вас перебросит на страницу уникализации статей.</div>";
                }
            }else{
                echo($result);
            }
        }
        public function migrate($quieries){
            global $db;

            for($i = 0; $i < count($quieries); $i++){
                $db->query($quieries[$i]);
            }
        }
        public function route($url, $function){
            Flight::route($url, $function);
        }
        public function run(){
            Flight::start();
        }
        public function getArticleKeywords($str, $len = 5, $min = 2){ 
            $keywords = array();
            $common = array('i','a','about','an','and','are','as','at','be','by','com','de','en','for','from','how','in','is','it','la','of','on','or','that','the','this','to','was','what','when','where','who','will','with','und','the','www', 'they', 'can', 'have', 'do', 'you', 'but', 'she', 'he', 'they', 'theyre', 'so', 'them', 'these', 'if', 'many', 'much', 'only', 'no');
            $str = preg_replace('/[^a-z0-9\s-]+/', '', strtolower(strip_tags($str)));
            $str = preg_split('/\s+-\s+|\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);
            
            while(0 < $len--) for($i = 0; $i<count($str) - $len; $i++){ 
                $word = array_slice($str, $i, $len + 1);
                if(in_array($word[0], $common) || in_array(end($word), $common)) continue;
                $word = implode(' ', $word);
              
                if(!isset($keywords[$len][$word])) $keywords[$len][$word] = 0;
                $keywords[$len][$word]++;
            }
            $return = array();
            
            foreach($keywords as &$keyword){
                $keyword = array_filter($keyword, function($v) use($min){
                    return !!($v > $min);
                });
                
                arsort($keyword);
                $return = array_merge($return, $keyword);
            }

            return $return;
        }
    }

    $app = new App;

    function _translate($params, $content, &$smarty, &$repeat){
        global $app;

        if (isset($content)){
            $lang = isset($params['lang'])? $params['lang'] : $app->default_language;
            $ch = curl_init();

            $data = [
                'lang' => $lang,
                'text' => trim($content),
            ];

            // curl_setopt($ch, CURLOPT_URL, 'http://'.getenv('API_HOST').'/api/v1/translate');
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // $server_output = curl_exec($ch);
            // curl_close ($ch);

            // return $server_output;
            
            return $content;
        }
    }
    require 'libs/vendor/database.php';
?>