# Oripa Ranking Manager

WordPress 6.x / PHP 8.2+ 対応のオンラインオリパ比較ランキング用プラグイン＋テーマです。

## インストール

1. oripa-ranking を wp-content/plugins/ へ配置。
2. oripa-ranking-theme を wp-content/themes/ へ配置。
3. 管理画面でプラグインとテーマを有効化。
4. パーマリンク設定を一度保存。
5. 有効化時にサンプル5サービスとサンプルLPが作成されます。

## 順位変更

ランキングLP編集画面の「掲載サービスID（順位順・カンマ区切り）」へ、サービス投稿IDを順位順に入力します。例: 101,102,103,104,105。順位はTOP3、カード、比較表、構造化データへ反映されます。

## LP別上書き

「LP別上書き(JSON)」に {"101":{"catch":"ポケカのラインナップが豊富","cta":"ポケカを確認する","overall":"4.8"}} の形式で入力します。未入力項目はサービス共通情報を使用します。

## 広告URLと計測

URLに ?traffic=google / yahoo / meta / adnetwork / asp / seo を付けて媒体別URLを切り替えます。全CTAクリックで affiliate_click、lp_id、service_id、rank、cta_position、traffic_source、click_datetime を dataLayer に送信します。GTMで affiliate_click をカスタムイベントに設定してください。

## FAQ・SEO

LPメタに faq_json を保存するとFAQ構造化データを出力します。例: [{"question":"初心者でも利用できますか？","answer":"利用規約をご確認ください。"}]。noindexメタ値を1にすると noindex,follow を出力します。根拠のないReview/AggregateRatingは出力しません。

## ACF Proとの比較

独自メタボックス方式は追加ライセンス不要でデータをプラグインに保持できます。ACF ProはリピーターUIに優れますがライセンス依存があります。現構成は移行しやすいメタキーを採用しています。


## 管理画面のSEO設定

ランキングLP編集画面のFAQ JSONへFAQを入力し、noindex設定へ1を入力するとnoindex,followになります。sectionsへ表示したいセクション名をカンマ区切りで指定できます。
