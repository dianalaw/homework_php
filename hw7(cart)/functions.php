<?php

function getProducts() {
    $ch = curl_init();

    $options = [
        CURLOPT_URL => "https://makeup.p.rapidapi.com/products.json?product_category=lipstick&brand=colourpop", 
        CURLOPT_RETURNTRANSFER => true, 
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: makeup.p.rapidapi.com",
            "x-rapidapi-key: f0b20142c2msh8ffb7486fd73139p1c40d6jsn9d4906f37e38"
        ]
    ];

    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);

    $errors = curl_errno($ch);
    if ($errors) {
        echo 'Errors (' . $errors . '):' . curl_error($ch); 
    } else {
        return json_decode($result, true);
    }
}

$data = getProducts();
if(empty($data)) return;

function showProducts() {
    global $data; 
    //$data = getProducts();
    //if(empty($data)) return;

    $html = '';
    foreach($data as $product) {
        $html .= '
            <li id="product_'. $product['id'] .'"> 

                <div class="product_image">
                    <img src="'. $product['image_link'] . '" alt="'. $product['name'] .'" />
                </div>

                <div class="product_name">
                    '. $product['name'] .'
                </div>

                <div class="product_category">
                    '. $product['category'] .'
                </div>

                <div class="description">
                    '. $product['description'] .' 
                </div>

                <div class="button"><a href="./index.php?product_add='. $product['id'] .'" >
                    '. $product['price']. ' '. $product['price_sign'] .''. $product['currency'] .'
                </a><div>

            </li>
        ';
    }

    if(!empty($html)) echo '<ul>'. $html .'</ul>';
}

function recursive_array_search($needle,$haystack) {
    foreach($haystack as $key=>$value) {
        $current_key=$key;
        if($needle===$value OR (is_array($value) && recursive_array_search($needle,$value) !== false)) {
            return $current_key;
        }
    }
    return false;
}

function addCart($id) {
   global $data;

   $id = (int)$id;

   $result_search = recursive_array_search($id, $data);
   if($result_search === false) return; 

   $cart =[];

   if(!empty($_COOKIE['cart'])) {
       $cart = explode(',', $_COOKIE['cart']);
   }

   if (array_search($id, $cart) === false) array_push($cart, $id);

   setcookie('cart',  implode(',', $cart), time() + 86400);

   $current_url= explode("?", $_SERVER['REQUEST_URI']);
   header('Location:' . $current_url[0]);
   exit;
}

function getCart($view = 'widget') {
    $count = 0;

    if(!empty($_COOKIE['cart'])) {
        $cart = explode(',', $_COOKIE['cart']);
        $count = count($cart);
    }

    if ($view == 'widget') {
        echo $count;
    } elseif ($view == 'page') {

        global $data;
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';

        echo '<pre>';
        print_r($_COOKIE);
        echo '</pre>';

        if (empty($_COOKIE['cart'])) return;
        foreach (explode(',', $_COOKIE['cart']) as $id) {
            $result_name = recursive_array_search('name', $data);
        
            echo $data[$id][$result_name];
        }

    }
}
