# WordPressテーマを1から創る。

##F181_WPThema
外観  
![top](https://github.com/Fendo181/Git_repos/blob/master/WPThema_pic/WPthema.png)

##環境
|環境構築|[VCCW](http://vccw.cc/)|
|WordPress|ver 4.5.1|
|:------:|:-------:|
|PHP|ver 5.6.9|
|MySQL|ver 5.5.47|

##導入方法  
- step1  
`www/wordpress/wp-content/themes`に移動する。

- step2  
`git clone git clone https://github.com/Fendo181/F181_WPThema.git
`
でthemsディレクトにf181_WPthemesフォルダがあるのを確認する。

- step3  
WordPressの管理者画面から外観のテーマより[Endo Futoshi]が有効になっている事を確認後、適用して下さい。


##各ファイルの説明
```
├── footer.php 
├── functions.php // 管理者画面に機能を追加する為の設定を記述している。&shortcodeの設定。
├── header.php //
├── img 
│   └── noimage.png
├── index.php //
├── page.php //固定ページの設定
├── sidebar.php //カテゴリーなどのwidgetの設定
├── single.php //記事の設定。
└── style.css //CSSの設定


```

##更新履歴
- ver 1.00 2016_5_01
  - 基本的な投稿とウィジェットとカテゴリを追加。  
  - [TODO] Homeを押した際に記事が表示されないエラーがある。  
  
##今後の追加機能
- もう少し見た目をなんとかする。
- Twitterの機能を追加する。

