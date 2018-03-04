<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>chunjb37</title>
    <link href="./style.css" rel="stylesheet" type="text/css">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</head>
<?php
function getAgeFromBirthday($year, $month, $day) {
    $now = new DateTime();
    return $now->diff(new DateTime($year.sprintf('%02d', $month). sprintf('%02d', $day)))->y;
}
?>
<body>
    <div class="haeder card">
        <img class="icon left" src="https://twitter.com/n_ee_t/profile_image?size=original">
        <h1 class="title">chunjb37</h1>
        <div class="crear"></div>
    </div>
        <div class="main">
            <div class="left card">
                <p>プロフィール</p>
                <li>
                    <ul><p>名前: ちゅん</p></ul>
                    <ul><p>年齢: <?php echo(getAgeFromBirthday(2001, 3, 7))."歳";?></p></ul>
                    <ul><p>誕生日: 3月7日</p></ul>
                </li>
                <p>好きなもの</p>
                <li>
                    <ul><p>食べ物:ラーメン、肉</p></ul>
                    <ul><p>アニメ:BanG Dream!</p></ul>
                    <ul><p>ゲーム:音ゲー</p></ul>
                </li>
            </div>
            <div class="right card">
                <label for="menu_bar00">Links</label>
                <input type="checkbox" id="menu_bar00" class="accordion" />
                <ul id="links00">
                    <li>
                        <a href="https://chun37.hatenablog.com" target="_blank">Chun's Diary</a>
                    </li>
                    <li>
                        <a href="http://chun-jb-37.ga" target="_blank">Chun's Diary(livedoor)</a>
                    </li>
                    <li>
                        <a href="https://nijipi.com/author/chunjb37/" target="_blank">NijiPico</a>
                    </li>
                    <li>
                        <a href="http://gadget-life.xyz/archives/author/chunjb37" target="_blank">ガジェットライフ</a>
                    </li>
                    <li>
                        <a href="https://github.com/chunjb37" target="_blank">GitHub</a>
                    </li>
                </ul>
                <label for="menu_bar01">Contacts&amp;SNS</label>
                <input type="checkbox" id="menu_bar01" class="accordion" />
                <ul id="links01">
                    <li>
                        <a href="mailto:chun.jb.37@gmail.com">Mail</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/N_EE_T" target="_blank">Twitter</a>
                    </li>
                    <li>
                        <a href="https://imastodon.net/@chun" target="_blank">Mastodon</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/chunjb37" target="_blank">Instagram</a>
                    </li>
                </ul>
                <label for="menu_bar02">Tweets</label>
                <input type="checkbox" id="menu_bar02" class="accordion" />
                <ul id="links02" class="center">
                    <li>
                        <a class="twitter-timeline" data-width="95%" data-cards="hidden" data-chrome="noheader noscrollbar noborders nofooter" data-lang="ja" href="https://twitter.com/N_EE_T"></a>
                    </li>
                </ul>
            </div>
        </div>
</body>

</html>
          