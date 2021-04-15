# Sound Crossing
## 環境
- Laravel 6.20.16
- PHP 7.4.12
- MySQL 5.7
- Node v12.18.4
- NPM 6.14.6
## 環境構築手順
- clone
```
$ git clone git@github.com:daiki0730/sound-crossing.git
$ cd sound-crossing
```
- .env.example をコピー
```
$ cp .env.example .env
```
- ビルド
```
$ docker-compose up -d --build
```
- install
```
$ make work  // コンテナに入る
$ composer install
$ npm install
```
## 各種コマンド
- コンテナ立ち上げ、停止、起動一覧
```
$ make up
$ make stop
$ make ps
```
- アプリケーション用のコンテナに入る
```
$ make work
```
- JS、Sass をローカル開発用にビルド・watch
```
$ npm run dev-all
```
