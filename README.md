
# Laravel 10 プロジェクト導入手順

## 1. 前提条件

* **Docker Desktop** がインストールされていること
* **PHP 8.2** 以上が動作するコンテナ環境（Dockerを利用）
* **Composer** がインストールされていること
* **Git** がインストールされていること

## 2. プロジェクトのセットアップ

### 2.1 プロジェクト作成

まず、作業ディレクトリに移動します。

```
cd /path/to/your/project-directory
```

次に、Laravel 10のプロジェクトを作成します（この手順ではコンテナ内で実行します）。

```bash
docker-compose exec php bash
composer create-project "laravel/laravel=10.*" . --prefer-dist
```

これで、Laravel 10のベースとなるファイル一式がプロジェクトディレクトリにインストールされます。

### 2.2 アプリケーションキーの生成

プロジェクトが正常にインストールされたら、アプリケーションキーを生成します。

```bash
php artisan key:generate
```

これで、`.env` ファイルにアプリケーションキーが設定されます。

### 2.3 必要なディレクトリのパーミッション変更

`storage` と `bootstrap/cache` ディレクトリに書き込み権限を与えます。

```bash
chmod -R 777 storage bootstrap/cache
```

（注意：本番環境では `777` のパーミッションは使用しないことを推奨します。開発環境でのみ使用）

### 2.4 DB接続の設定

`.env` ファイルを開き、以下の項目を修正します（必要に応じて）。

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

DB設定を完了したら、マイグレーションを実行します。

```bash
php artisan migrate
```

## 3. 開発サーバーの起動

開発サーバーを起動して、アプリケーションが正常に動作しているか確認します。

```bash
php artisan serve
```

これで、[http://127.0.0.1:8000](http://127.0.0.1:8000) にアクセスして、Laravelの初期画面が表示されることを確認します。

## 4. Gitの初期化（オプション）

プロジェクトにGitを初期化して、コードのバージョン管理を始めます。

```bash
git init
git add .
git commit -m "Initial commit"
```

## 5. その他の設定（オプション）

### 5.1 認証機能の追加（Laravel Breezeの場合）

認証機能を追加する場合、Laravel Breezeをインストールします。

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```

これで、認証機能が設定され、ログイン・登録ページが利用可能になります。

---

## 6. まとめ

これで、Laravel 10の環境が構築されました。
今後はアプリケーションの機能追加や、設定の調整を行いながら開発を進めていきます。

---

この手順をREADMEに書いておけば、誰でも同じ環境を再現できるので便利です。
必要に応じて、追加の設定やカスタマイズ手順も加えていってくださいね！
