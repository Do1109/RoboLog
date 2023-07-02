use scraper::{Html,Selector};
use std::env;
use tokio::time;


#[tokio::main]
async fn main() {
//コマンドライン引数からURLを取得
let input_url = env::args().nth(1).expect("Missing input title");
//スクレイピング実行
download_element(&input_url).await;
}

//スクレイピングの関数
async fn download_element(title: &str) {    
    //文字列型からString型に変換
    let url = title.to_string(); 
        //HTMLを取得
        println!("get: {}", url);
        let html = reqwest::get(&url)
        .await
        .expect("Failed to get HTML")
        .text()
        .await
        .expect("Failed to parse HTML");
    //HTMLをパース
    let doc = Html::parse_document(&html);
    //divタグを取り出す
    let sel = Selector::parse("body").unwrap();
    let utf_sel = sel.to_string();
    
    for element in doc.select(&utf_sel) {
        let text = element.text().collect::<String>();
        //指定要素を取り出す
        println!("{}", text);
        //待機時間を入れる（重要）
        time::sleep(time::Duration::from_millis(1000)).await;
    }
}