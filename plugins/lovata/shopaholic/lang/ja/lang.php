<?php return [
    'plugin'      => [
        'name'        => 'Shopaholic',
        'description' => 'ðï¸ Free eCommerce plugin with a large set of extensions.',
    ],
    'field'       => [
        'vendor_code'         => 'ãã³ãã¼ã³ã¼ã',
        'price'               => 'ä¾¡æ ¼',
        'old_price'           => 'éå¸¸ä¾¡æ ¼',
        'quantity'            => 'æ°é',
        'brand'               => 'ãã©ã³ã',
        'offer'               => 'ãªãã¡ã¼',
        'currency'            => 'éè²¨',
        'check_offer_active'  => 'æå¹ãªè£½åã®ãªã¹ããåå¾ããéãæå¹ãªãªãã¡ã¼ãæã¤ãã®ã«éå®ãã',
        'additional_category' => 'è¿½å ã®ã«ãã´ãª',
        'promo_block_type'    => 'è£½åãªã¹ããå«ãè²©ä¿ãã­ãã¯',
        'promo_block'         => 'è²©ä¿ãã­ãã¯',
        'category_parent_id'  => 'è¦ªã«ãã´ãªID',
        'category_parent'     => 'è¦ªã«ãã´ãª',
        'product_id'          => 'è£½åID',
    ],
    'menu'        => [
        'main'                => 'ã«ã¿ã­ã°',
        'categories'          => 'ã«ãã´ãª',
        'product'             => 'è£½å',
        'brands'              => 'ãã©ã³ã',
        'shop_catalog'        => 'è£½åã«ã¿ã­ã°',
        'shop_category'       => 'è£½åã«ãã´ãª',
        'all_shop_categories' => 'å¨ã¦ã®è£½åã«ãã´ãª',
        'promo_block'         => 'è²©ä¿ãã­ãã¯',
        'promo'               => 'è²©ä¿',
    ],
    'tab'         => [
        'offer'       => 'ãªãã¡ã¼',
        'price'       => 'ä¾¡æ ¼',
        'permissions' => 'Shopaholic',
    ],
    'category'    => [
        'name'       => 'ã«ãã´ãª',
        'list_title' => 'ã«ãã´ãªãªã¹ã',
        'import_title' => 'ã«ãã´ãªãã¼ã¿ã®ã¤ã³ãã¼ã',
        'export_title' => 'ã«ãã´ãªãã¼ã¿ã®ã¨ã¯ã¹ãã¼ã',
    ],
    'brand'       => [
        'name'       => 'ãã©ã³ã',
        'list_title' => 'ãã©ã³ããªã¹ã',
        'import_title' => 'ãã©ã³ããã¼ã¿ã®ã¤ã³ãã¼ã',
        'export_title' => 'ãã©ã³ããã¼ã¿ã®ã¨ã¯ã¹ãã¼ã',
    ],
    'product'     => [
        'name'       => 'è£½å',
        'list_title' => 'è£½åãªã¹ã',
        'import_title' => 'è£½åãã¼ã¿ã®ã¤ã³ãã¼ã',
        'export_title' => 'è£½åãã¼ã¿ã®ã¨ã¯ã¹ãã¼ã',
    ],
    'offer'       => [
        'name'       => 'ãªãã¡ã¼',
        'list_title' => 'ãªãã¡ã¼ãªã¹ã',
        'import_title' => 'ãªãã¡ã¼ãã¼ã¿ã®ã¤ã³ãã¼ã',
        'export_title' => 'ãªãã¡ã¼ãã¼ã¿ã®ã¨ã¯ã¹ãã¼ã',
    ],
    'promo_block' => [
        'name'       => 'è²©ä¿ãã­ãã¯',
        'list_title' => 'è²©ä¿ãã­ãã¯ãªã¹ã',
    ],
    'component'   => [

        //Product components
        'product_page_name'            => 'è£½åãã¼ã¸',
        'product_page_description'     => 'è£½åãã¼ã¿ãURL slugã§åå¾ãã¾ã',
        'product_data_name'            => 'è£½åãã¼ã¿',
        'product_data_description'     => 'è£½åãã¼ã¿ãIDã§åå¾ãã¾ã',
        'product_list_name'            => 'è£½åãªã¹ã',
        'product_list_description'     => 'è£½åãªã¹ããåå¾ãã¾ã',

        //Brand components
        'brand_page_name'              => 'ãã©ã³ããã¼ã¸',
        'brand_page_description'       => 'ãã©ã³ããã¼ã¿ãURL slugã§åå¾ãã¾ã',
        'brand_data_name'              => 'ãã©ã³ããã¼ã¿',
        'brand_data_description'       => 'ãã©ã³ããã¼ã¿ãIDã§åå¾ãã¾ã',
        'brand_list_name'              => 'ãã©ã³ããªã¹ã',
        'brand_list_description'       => 'ãã©ã³ããªã¹ããåå¾ãã¾ã',

        //Promo block components
        'promo_block_page_name'        => 'è²©ä¿ãã­ãã¯ãã¼ã¸',
        'promo_block_page_description' => 'è²©ä¿ãã­ãã¯ãã¼ã¿ãURL slugã§åå¾ãã¾ã',
        'promo_block_data_name'        => 'è²©ä¿ãã­ãã¯ãã¼ã¿',
        'promo_block_data_description' => 'è²©ä¿ãã­ãã¯ãã¼ã¿ãIDã§åå¾ãã¾ã',
        'promo_block_list_name'        => 'è²©ä¿ãã­ãã¯ãªã¹ã',
        'promo_block_list_description' => 'è²©ä¿ãã­ãã¯ãªã¹ããåå¾ãã¾ã',

        //Category components
        'category_page_name'           => 'ã«ãã´ãªãã¼ã¸',
        'category_page_description'    => 'ã«ãã´ãªãã¼ã¿ãURL slugã§åå¾ãã¾ã',
        'category_data_name'           => 'ã«ãã´ãªãã¼ã¿',
        'category_data_description'    => 'ã«ãã´ãªãã¼ã¿ãIDã§åå¾ãã¾ã',
        'category_list_name'           => 'ã«ãã´ãªãªã¹ã',
        'category_list_description'    => 'ã«ãã´ãªãªã¹ããåå¾ãã¾ã',

        //Common components
        'breadcrumbs_name'             => 'ãã³ãããªã¹ã',
        'breadcrumbs_description'      => 'ã«ã¿ã­ã°ãã³ãããªã¹ãã®ããã®ãã¼ã¿ãåå¾ãã¾ã',

        //Components settings
        'product_list_sorting'         => 'ããã©ã«ãã½ã¼ãæ¹æ³',
        'sorting_no'                   => 'ã½ã¼ãããªã',
        'sorting_price_desc'           => 'ä¾¡æ ¼é«ãé ',
        'sorting_price_asc'            => 'ä¾¡æ ¼å®ãé ',
        'sorting_new'                  => 'æ°ããé ',
        'sorting_popularity_desc'      => 'äººæ°é ',
        'sorting_rating_desc'          => 'è©ä¾¡ã®é«ãé ',
        'sorting_rating_asc'           => 'è©ä¾¡ã®ä½ãé ',
        'sorting_date_begin_asc'       => 'éå§æ¥æ©ãé ',
        'sorting_date_begin_desc'      => 'éå§æ¥éãé ',
        'sorting_date_end_asc'         => 'çµäºæ¥æ©ãé ',
        'sorting_date_end_desc'        => 'çµäºæ¥éãé ',
    ],
    'permission'  => [
        'category'    => 'ã«ãã´ãªç®¡ç',
        'brand'       => 'ãã©ã³ãç®¡ç',
        'product'     => 'è£½åç®¡ç',
        'settings'    => 'è¨­å®ç®¡ç',
        'promo_block' => 'è²©ä¿ãã­ãã¯ç®¡ç',
    ],
    'message'     => [
        'import_additional_category_info' => 'è¿½å ã®è£½åã«ãã´ãªã¯ã«ã³ãåºåãã§å¥åãã¦ãã ãã',
    ],
    'button'      => [
        'import_offer_button' => 'ãªãã¡ã¼ãCSVããèª­ã¿è¾¼ã',
    ],
];
