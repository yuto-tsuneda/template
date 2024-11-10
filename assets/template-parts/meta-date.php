<?php
  $title = get_the_title() .'|'. get_bloginfo('name');
  $description = '';

  if(is_front_page()){
    $title = 'タイトル';
    $description = 'これはテストです';
  }elseif(is_page()){
    $title = '';
    $description = '';
  }elseif(is_archive()){
    $title = '';
    $description = '';
  }elseif(is_404()){
    $title = '';
    $description = 'お探しのページは存在しません。';
  }
?>

<title><?php echo $title; ?></title>
<meta name="descroption" content="<?php echo $description; ?>">

<link rel="canonical" href="<?php
    if (is_single()) {
      echo get_permalink();
    }elseif(is_page()) {
      echo get_permalink();
    }elseif (is_archive()) {
      echo home_url('news');
    }elseif (is_category()) {
      echo get_category_link(get_queried_object_id());
    }else{
      echo home_url();
    }
    ?>">

<meta property="og:url" content="<?php
    if(is_single()) {
      echo get_permalink();
    }elseif(is_page()) {
      echo get_permalink();
    }elseif(is_archive()) {
      echo home_url('news');
    }elseif(is_category()) {
      echo get_category_link(get_queried_object_id());
    }else {
      echo home_url();
    }
    ?>"/>

<meta property="og:type" content="<?php 
  if(is_front_page()){
    echo 'website';
  }elseif(is_archive()){
    echo 'blog';
  }elseif(is_category()){
    echo 'blog';
  }else{
    echo 'article';
  }
?>">

<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/.webp" />