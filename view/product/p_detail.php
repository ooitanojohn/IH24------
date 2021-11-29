<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dist.css">
    <title>商品検索画面</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
header{
    border-bottom: 3px solid rgb(126, 126, 126);
}
h1{
    padding: 20px;
    margin: 0 auto;
    text-align:center;
}
main{
    width: 1200px;
    margin: 0 auto;
    padding: 20px;
    border-bottom: 3px solid rgb(126, 126, 126);
}
h2{
    padding: 20px;
    margin: 0 auto;
    text-align: center;
}
form{
    position: relative;
    left: 450px;
}
#sbox1{
    height:50px;
    padding:0 10px;
    border-radius:5px;
    background:#eee;
}
#sbtn1{
    width:70px;
    height:50px;
    border-radius:2px;
    background:#7fbfff;
    color:#fff;
    font-weight:bold;
    font-size:16px;
    border:none;
}
#sbtn1:hover{
    background:#eee;
    color:#7fbfff;
}

h3{
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    padding: 20px;
    border-bottom: 1px solid #000;
}
main nav{
    margin: 0 auto;
    overflow: hidden;
}
.category_menu{
    width: 50%;
    float: left;
}


main nav ul{
    width: 50%;
    list-style: none;
}
main nav li{
    padding: 20px;
}

h4{
    padding: 20px;
    margin: 0 auto;
    text-align: center;
}

</style>
<body>
    <header>
        <h1>ヘッダー画面</h1>
    </header>

    <main>
        <h2>検索画面</h2>
        <form action="" method="post">
            <input id="sbox1" name="s" type="text" placeholder="キーワードを入力">
            <input id="sbtn1" type="submit" value="検索"></form>
        </form>
        <nav>
            <h3>カテゴリーでお探しの方に/人気のタイトルでお探しの方に</h3>
            <ul class="category_menu">
              <li><a href="#">カテゴリー1</a></li>
              <li><a href="#">カテゴリー2</a></li>
              <li><a href="#">カテゴリー3</a></li>
              <li><a href="#">カテゴリー4</a></li>
              <li><a href="#">カテゴリー5</a></li>
              <li><a href="#">カテゴリー6</a></li>
            </ul>
            <ul class="category_menu">
                <li><a href="#">人気タイトル1</a></li>
                <li><a href="#">人気タイトル2</a></li>
                <li><a href="#">人気タイトル3</a></li>
                <li><a href="#">人気タイトル4</a></li>
                <li><a href="#">人気タイトル5</a></li>
                <li><a href="#">人気タイトル6</a></li>
              </ul>
        </nav>

    </main>

    <aside>

    </aside>

    <footer>
        <h4>フッダー画面</h4>
    </footer>
</body>
</html>