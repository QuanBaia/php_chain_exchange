<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>
            <?php echo $article_type == 1 ? lang('view_article_list_2') : '' ?>
            <?php echo $article_type == 2 ? lang('view_article_list_3') : '' ?>
            <?php echo $article_type == 3 ? lang('view_article_list_4') : '' ?>
            <?php echo $article_type == 4 ? lang('view_article_list_5') : '' ?>
            <?php echo $article_type == 5 ? lang('view_article_list_6') : '' ?>
             - <?php echo $_SESSION['SYSCONFIG']['sysconfig_site_name']; ?></title>
        </title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="icon" href="/favicon.ico" type="image/x-ico" />

        <link rel="stylesheet" href="<?php echo base_url('static/layui/css'); ?>/layui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("static/front"); ?>/style/style.css" />

        <!--[if lt IE 9]>
        <script src="<?php echo base_url("static/front"); ?>/js/css3.js"></script>
        <script src="<?php echo base_url("static/front"); ?>/js/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php $this->load->view("front/header"); ?>

        <style type="text/css">
            .article_box{ width: 1200px; margin: 30px auto 100px auto; }
            .article_box .page_title{ background: #191a1f; padding-left: 50px; line-height: 60px; font-size: 16px; color: #d5def2; }
            .article_box .page_title .back_link{ float: right; margin-right: 50px; }
            .article_box .page_title .back_link:hover{ color: #FFF; }
            .article_box .right_box{  background: #1f2126; margin-top: 10px; min-height: 600px; }
            .article_box .right_box .article_detail_box .article_title{ padding: 30px 50px; line-height: 30px; font-size: 20px; color: #d5def2; border-bottom: #34363f solid 1px; }
            .article_box .right_box .article_detail_box .article_content{ padding: 30px 50px; }

            .article_box .right_box .article_detail_box .article_content *{ color: #a7b7c7 !important; background: none !important; font-size: 16px !important; line-height: 30px !important; max-width: 100% !important; }
            .article_box .right_box .article_detail_box .article_content a{ color: #357ce1 !important; }
            .article_box .left_box .article_left{ padding: 10px; }
            .article_box .left_box .article_left .article_left_item{ display: block; line-height: 20px; text-align: left; font-size: 12px; padding: 10px; }
            .article_box .left_box .article_left .article_left_item.active{ background: #357ce1; color: #FFF; }
            .article_box .left_box .article_left .article_left_item:hover{ color: #FFF; }
        </style>

        <div class="article_box">
            <div class="page_title">
                <a class="back_link" href="/article/<?php echo $type_symbol; ?>">&lt;&lt;<?php echo lang('view_article_detail_1'); ?></a>
                <?php echo $article_type == 1 ? lang('view_article_list_2') : '' ?>
                <?php echo $article_type == 2 ? lang('view_article_list_3') : '' ?>
                <?php echo $article_type == 3 ? lang('view_article_list_4') : '' ?>
                <?php echo $article_type == 4 ? lang('view_article_list_5') : '' ?>
                <?php echo $article_type == 5 ? lang('view_article_list_6') : '' ?>
                / <?php echo lang('view_article_detail_2'); ?>
            </div>
            <div class="right_box">
                
                <div class="article_detail_box">
                    <div class="article_title"><?php echo $article['article_title']; ?></div>
                    <div class="article_content"><?php echo $article['article_content']; ?></div>
                </div>

            </div>
            <div class="clear"></div>
        </div>

        <?php $this->load->view("front/footer"); ?>

        <script src="<?php echo base_url("static"); ?>/layui/layui.js"></script>

        <script type="text/javascript">

            //当前栏目
            $('header .left_box .nav_box .nav_item.article').addClass('active');

            layui.use(['element', 'jquery', 'form', 'layer', 'upload', 'laydate'], function () {
                
                
            });
        </script>
    </body>
</html>
