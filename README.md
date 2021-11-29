# 3 課題3 サムネイル作成
# tailwindcss

# tailwind 環境

# 作り方

自分のPCにあったver. inst winでok
https://nodejs.org/ja/download/

<!-- 1 postcss tailwind npm -->

npm install -D tailwindcss@latest postcss@latest autoprefixer@latest

<!-- 2 config-->

npx tailwindcss init -p

<!-- 3 styles.css  create--> 今回は既済
@tailwind base etc...

<!-- 4 postcsscli install -->

npm uninstall postcss
npm i -D postcss-cli

<!-- 5 cssnano install -->

npm i -D cssnano

<!-- 6 tailwindForm install -->
npm install @tailwindcss/forms

<!-- 7 tailwind実行 -->
開発用: こっちをターミナルに
npm run dev
本番:
npm run build

<!-- ここから class名つける事で css適応-->
https://tailwindcss.com/docs/installation