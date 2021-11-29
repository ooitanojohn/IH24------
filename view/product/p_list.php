<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dist.css">

    <title>商品一覧画面</title>
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
    margin: 0 auto;
    text-align: center;
}
div{
    padding: 20px;
    display: grid;
    grid-template-columns: 200px 200px 200px 200px;
    grid-template-rows: 150px 150px 150px 150px;
    gap: 80px;
}
section{
    padding: 5px;
    border: 5px solid #000;
}

.example1 li {
            margin: 0 auto;
            display: inline;
            padding:10px 15px;
            border:1px #ccc solid;color:#000053;
            border-radius: 10px / 10px;
}
.example1 .this {
    background-color:#777;color:#fff;
}
h4{
    padding: 20px;
    margin: 0 auto;
    text-align: center;
}
</style>
</head>
<body>
    <header>
        <h1>ヘッダー画面</h1>
    </header>

    <main>
        <h2>商品一覧</h2>
        <div>
            <section>
                <a href="#">商品画像１</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像2</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像3</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像4</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像5</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像6</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像7</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像8</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像9</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像10</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像11</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
            <section>
                <a href="#">商品画像12</a>
                <p>価格</p>
                <p>商品名</p>
            </section>
        </div>

        <ul class="example1">
            <li>前へ</li>
            <li class="this">1</li>
            <li>2</li>
            <li>3</li>
            <li>次へ</li>
        </ul>
    </main>

    <footer>
        <h4>フッダー画面</h4>
    </footer>
</body>
</html>