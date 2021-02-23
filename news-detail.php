<?php //▼▼ 既存ページヘ埋め込み時はまるっとコピペ下さい （この行も含みページ最上部に）※.phpでかつUTF-8のページのみ可▼▼
//※逆にこのページに対して既存のページのhtmlを記述する形でももちろんOKです。
//----------------------------------------------------------------------
// 詳細ページ（ポップアップと兼用）
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
include_once("./pkobo_news/admin/include/config.php");//（必要に応じてパスは適宜変更下さい）
$img_updir = './pkobo_news/upload';//画像保存パス（必要に応じてパスは適宜変更下さい）

$id = (!empty($_GET['id'])) ? h($_GET['id']) : exit('パラメータがありません');
$getFormatDataArr = getLines2DspData($file_path,$img_updir,$config,$id);
$dataArr = (!empty($getFormatDataArr)) ? $getFormatDataArr : exit('データが存在しません');
//----------------------------------------------------------------------
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
//▲▲ コピペここまで ▲▲（この行も含む）?>

<!doctype html>
<html lang="ja">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="format-detection" content="telephone=no">
      <title>新着情報 | 厨房サービス</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="./img/fav-ico.png" type="image/x-icon" />
      <!-- End favicon -->
      <!-- Css reset -->
      <link rel="stylesheet" type="text/css" href="./css/nomalize.css">
      <link rel="stylesheet" type="text/css" href="./css/library.css">
      <link rel="stylesheet" type="text/css" href="./css/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="./css/slick.css">
      <link rel="stylesheet" type="text/css" href="./css/aos.css">
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <link rel="stylesheet" type="text/css" href="./css/reponsive.css">
      <!-- End css reset -->
    
   </head>
   <body>
     <!-- Header -->
    <header>
        <div class="hd_all">
            <div class="hd_logo">
                <h1>
                    <a href="./" class="hv-o"><img src="./img/hd_logo.png" alt="厨房サービス"></a>
                </h1>
            </div>
            <!-- End .hd_logo -->
            <div class="hd_menu_all">
                <div class="menu_main">
                    <ul>
                        <li><a href="./business.html">事業内容</a></li>
                        <li><a href="./about.html">会社案内</a></li>
                        <li><a href="./recruit.html">採用情報</a></li>
                        <li class="menu_contact"><a href="./contact.html">お問い合わせ</a></li>
                    </ul>
                </div>
                <!-- End .menu_main -->
                <div class="menu_sub">
                    <div class="all_contentsub">
                        <ul class="sub_business">
                            <li><a href="./business01.html">業務用厨房機器</a></li>
                            <li><a href="./business04.html">メンテナンス</a></li>
                            <li><a href="./business02.html">冷凍・冷蔵設備</a></li>
                            <li><a href="./business05.html">厨房室リフォーム</a></li>
                            <li><a href="./business03.html">空調換気設備</a></li>
                        </ul>
                        <!-- End .sub_business -->
                        <ul class="sub_about">
                            <li><a href="./outline.html">会社概要</a></li>
                            <li><a href="./history.html">会社沿革</a></li>
                        </ul>
                        <!-- End .sub_about -->
                        <ul class="sub_recruit">
                            <li><a href="./interview.html">先輩メッセージ</a></li>
                        </ul>
                        <!-- End .sub_recruit -->
                    </div>
                </div>
                <!-- End .menu_sub -->
            </div>
            <!-- End .hd_menu_all -->
            <div class="menu_sp">
                <div class="btn_menu">
                    <div id="menu_hambur">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="div_menu">
                    <ul>
                        <li>
                            <a href="./business.html">事業内容</a>
                            <div class="btn_sub_menu"></div>
                            <ul class="sub_menu">
                                <li><a href="./business01.html">業務用厨房機器</a></li>
                                <li><a href="./business02.html">冷凍・冷蔵設備</a></li>
                                <li><a href="./business03.html">空調換気設備</a></li>
                                <li><a href="./business04.html">メンテナンス</a></li>
                                <li><a href="./business05.html">厨房室リフォーム</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="./about.html">会社案内</a>
                            <div class="btn_sub_menu"></div>
                            <ul class="sub_menu">
                                <li><a href="./outline.html">会社概要</a></li>
                                <li><a href="./history.html">会社沿革</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="./recruit.html">採用情報</a>
                            <div class="btn_sub_menu"></div>
                            <ul class="sub_menu">
                                <li><a href="./interview.html">先輩メッセージ</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="./contact.html">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->
    <section id="page_banner">
        <div class="all_banners">
            <div class="img_banner" style="background-image: url(./img/page_banner1.jpeg)"></div>
            <div class="all_content">
                <div class="div_circle"></div>
                <div class="banner_content">
                    <h3 class="title_style01 cl02">
                        <span class="title01">
                           NEWS
                        </span>
                        <span class="title02">
                           新着情報
                        </span>
                    </h3>
                    <div class="img">
                        <img src="./img/page_icon.png" alt="BUSINESS">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End #page_banner -->

    <!-- Content -->

         <!-- End Banner -->
        <section id="newsList">
            <div class="cont">
            <div class="bg-lend-top"></div>
            
                <div class="div_detail">

                    <!--▼▼埋め込み時はここから以下をコピーして任意の場所に貼り付けてください（html部は自由に編集可）▼▼-->

                    <?php if(!$copyright){echo $warningMesse;exit;}else{ ?>

                    <?php if($config['popupFlag'] == 0){ //ポップアップ表示の場合は表示しない?>
                 <!-- パンくずナビ（必要に応じて変更、削除下さい） -->
                    <?php } ?>
                    <h2><?php echo h(strip_tags($dataArr['title']));?></h2>
                    <div id="up_ymd"><?php echo h($dataArr['up_ymd']);?></div>
                    <div id="detail">
                        <?php
for($i=0;$i<=$maxCommentCount;$i++){
	if(!empty($dataArr['comment'][$i]) || !empty($dataArr['upfile_path'][$i])){
		
		//アップファイル表示用のタグをセット。 画像の場合はimgタグ、その他の場合はファイルにリンクする（タグ部分は自由に変更可）
		$upfileTag = '';//初期化
		if(!empty($dataArr['upfile_path'][$i])){
			if($dataArr['file_type'][$i] == 'img'){
				$upfileTag = '<img src="'.$dataArr['upfile_path'][$i].'?'.uniqid().'" />';//画像の場合のタグ
			}else{
				$linkText = (isset($extensionListText[$dataArr['extension'][$i]])) ? $extensionListText[$dataArr['extension'][$i]] : 'アップファイル（'.$dataArr['extension'][$i].'）';//リンクテキストをセット
				$upfileTag = '<a href="'.$dataArr['upfile_path'][$i].'" target="_blank">'.$linkText.'</a>';//画像以外の場合のタグ
			}
			$upfileTag = '<div class="detailUpfile">'.$upfileTag.'</div>';
		}
?>
                        <div class="detailText">
                            <?php echo (!empty($dataArr['comment'][$i])) ? $dataArr['comment'][$i] : '';?></div>
                        <?php echo $upfileTag;?>
                        <?php 
	}
}
?>
                    </div>
                    <div class="detail_back">
                        <a href="javascript:history.back()" class="hv-o">&lt;&lt;戻る</a>
                    </div>
                    <?php }//著作権表記削除不可?>

                    <!--▲▲埋め込み時　コピーここまで▲▲-->

                </div>
            
            </div>
     
        </section>
       <!-- Footer -->
       <footer>
        <div class="div_backtop"></div>
        <div class="ft_all">
            <div class="ft_bg">
                <div class="ft_content">
                    <div class="ft_logo">
                        <a href="./" class="hv-o">
                            <img src="./img/ft_logo.png" alt="厨房サービス">
                        </a>
                        <div class="txt">
                            〒478-0053<br>愛知県知多市清水が丘1丁目1407番地
                        </div>
                    </div>
                    <!-- End .ft_logo -->
                    <div class="ft_contact">
                        <div class="bg">
                            <h3 class="title_style01">
                                <span class="title01">
                                    CONTACT US
                                </span>
                                <span class="title02">
                                    お問い合わせ
                                </span>
                            </h3>
                            <div class="txt01">
                                お気軽にお問い合わせ下さい
                            </div>
                            <a class="txt_tel" href="tel:0562575400">
                                ☎ 0562-57-5400
                            </a>
                            <div class="txt02">
                                平日9：00～18：00　土日祝休
                            </div>
                            <a href="./contact.html" class="hv-o btn_contact">
                                <img src="./img/ft_contact.png" alt="Contact">
                            </a>
                            <div class="txt_fax">
                                FAX 0562-57-5420
                            </div>
                        </div>
                    </div>
                    <!-- End .ft_contact -->
                    <div class="ft_link">
                        <a href="./privacy.html" class="link_privacy">
                            プライバシーポリシー
                        </a>
                        <div class="div_linklogo">
                            <a href="#" class="hv-o">
                                <img src="./img/ft_logo01.png" alt="健康経営優良法人">
                            </a>
                            <a href="#" class="hv-o">
                                <img src="./img/ft_logo02.png" alt="SUSTAINABLE DEVELOPMENT GOALS"></a>
                        </div>
                    </div>
                    <!-- End .ft_link -->
                </div>
            </div>
            <div class="ft_copyright">
                <div class="cont">
                    Copyright （C） 2021　株式会社厨房サービス　 <br class="show_sp">All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- Jquery pagetop -->
    <script src="./js/jquery-2.0.0b1.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/script_page.js"></script>
    <script src="./js/check_browser.js"></script>
</body>
</html>