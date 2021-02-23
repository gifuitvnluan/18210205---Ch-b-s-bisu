<?php //▼▼ 既存ページヘ埋め込み時はまるっとコピペ下さい （この行も含みページ最上部に）※.phpでかつUTF-8のページのみ可▼▼
//※逆にこのページに対して既存のページのhtmlを記述する形でももちろんOKです。
//----------------------------------------------------------------------
// ページング付き一覧ページ（投稿がどんなに増えても自動でページングを調整します）
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
include_once("./pkobo_news/admin/include/config.php");//（必要に応じてパスは適宜変更下さい）
$img_updir = './pkobo_news/upload';//画像保存パス（必要に応じてパスは適宜変更下さい）

/* ▽オプション設定▽ */
//※1ページあたりの表示件数などは設定ファイルで指定できます（デフォルトは20件）

//本文の抜粋を表示するかどうか（0=しない、1=する）
$commentDsp = 1;

//本文を抜粋表示する場合の表示文字数 （単位はバイト。全角文字は「2バイト」で1文字となります。また末尾の文字「...」も含みます）
//※htmlタグは削除されます「0」にすれば全文をhtmlもそのままで表示します。（レイアウトに問題が出る可能性があるのでオススメしません）
$commentNum = 200;

//サムネイルを表示するか（0=しない、1=する）※アップファイルの1枚目が画像の場合のみ有効
$dspThumbNail = 1;

//表示するカテゴリを指定（指定なし（空）の場合は全件表示 ※デフォルト）
//このページで特定カテゴリのみ表示したい場合、0からの番号を指定下さい。 （1番目が0，2番目が1になるので注意）
//要するに複数のカテゴリがある場合でそれぞれ別々のファイルで表示したい場合用です
//このファイルを複製すればOKです（カテゴリごとにデザインを変えたい場合など）
//例　$category = '1'; ※この場合カテゴリ番号「1」（設定ファイルでの2番目）の記事のみが表示されます
$category = '';
//またはURLのパラメータでも指定可能です。番号ルールは↑と同じです。例 news.php?cat=0 や news.php?cat=1 とするだけです
//1ファイルでパラメータを変えるだけでそれぞれのカテゴリを表示できるので便利です。（全カテゴリでデザインは共通で良い場合）
$pagelength = 8;

//----------------------------------------------------------------------
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
$getFormatDataArr = getLines2DspData($file_path,$img_updir,$config,'',$category);//（変更不可）
$pagerRes = pager_dsp($getFormatDataArr,$pagelength,$pagerDispLength,$config['encodingType']);//ページャー生成（変更不可）
$pagerDsp = (count($getFormatDataArr) > $pagelength) ? '<p class="pager">'.$pagerRes['dsp'].'</p>' : '';//ページャー用タグセット（変更不可）

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
                        <li>
                            <a href="./contact.html">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->

    <!-- Content -->
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
        <section id="newsList">
         <div class="cont">
            <div class="bg-lend-top"></div>
                <div class="hoNewsRows dl-flex ow">
                    <?php if(!$copyright){echo $warningMesse;exit;}else{for($i = $pagerRes['index']; ($i-$pagerRes['index']) < $pagelength; $i++){if(!empty($getFormatDataArr[$i])){$data=$getFormatDataArr[$i];?>
                        <div class="hoNItem" id="postID_<?php echo $data['id'];?>">
                            <?php if(dspThumb($data)) : ?>
                                <span class="hoNImg" style="background-image: url(<?php echo (dspThumb($data)) ? dspThumb($data,100) : '　';?>);"></span>
                            <?php else : ?>
                                <span class="hoNImg" style="background-image: url(./img/ho-img01.jpg);"></span>
                            <?php endif; ?>
                            <ul>
                                <li><?php echo $data['up_ymd']; ?></li>
                                <li><a href="news-list.php?cat=<?php echo $data['categoryNum'];?>" class="hoCat cl0<?php echo $data['categoryNum'];?>"><?php echo $data['category'];?></a></li>
                            </ul>
                            <h3><?php echo $data['title'];//タイトル表示?></h3>
                        </div>
                    <?php } } ?>
                </div>
                <?php echo $pagerDsp;//ページャー表示?>
     
            <?php }//著作権表記削除不可?>
            </div>
        </section>
        <!-- End #sec_spe02 -->
    <!-- End content -->

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