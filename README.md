# BackBee - Standalone version

## 1) Requirements
- PHP 7.1 or greater 
- MySQL 5.6 OR MariaDB 10.1
- Nginx or Apache with mod_rewrite module 
- HTTPS support
- Elasticsearch 7.5
- Redis 6.0 or greater
- ImageMagick 6.9 or greater (Images optimization)
- npm 7 or greater (Assets compilation)

## 2) Preparation

#### Install libraries for image optimizer:

RPM like flavor (use yum or dnf depending on your environement):
```shell
yum install -y ImageMagick
```
Debian like flavor:
```shell
apt-get install -y imagemagick
```

#### Install librairies for assets compilation

Note: setup_current.x refers to node current active release, can be modified (ex: https://deb.nodesource.com/setup_11.x for release 11.x) according your requirements.

RPM like flavor (yum or dnf depending on your environement):
```shell
curl -sL https://rpm.nodesource.com/setup_current.x | sudo -E bash - & sudo yum install -y nodejs
```
Debian like flavor:
```shell
curl -sL https://deb.nodesource.com/setup_current.x | sudo -E bash - && sudo apt-get install -y nodejs
```

## 3) Project installation

1. ##### Backbee standalone repository clonage
```shell
git clone <standalone_repositorie>
```

2. ##### Dependencies installation
```shell
composer up
```

3. ##### Settings
Edit the res/repository/Config/global_settings.yml file and set the correct values for project. The main value to set are :
```yaml
        - appname
        - database.host
        - database.dbname
        - database.user
        - database.password
        - elasticsearch.host (including port)
        - redis.host
```
Other values can be modified according current project environment/requirements (see below part 4 for setup & configuration details)

4. ##### Site installation
```shell
bin/console backbee:install
```
5. ##### BO assets installation
```shell
bin/console backbee:ia
```
6. ##### Librairies installation for assets compilation
```shell
cd assets
npm install
```

7. ##### Assets compilation (must be done once and then every time assets are modified or updated in the assets folder)
```shell
gulp
```

## 4) Configuration

Place your project PHP code under `App\` namespace (`src/App/`).

If you want to add:

- Templates, do it under `templates/`
- ClassContent, do it under `classcontents/`
- Layout templates files, do it under `layouts/`

Below, all configurations of `global_settings.yml` with its default values.

```yaml
appname: null # if null, your project root folder name will be used
dev_mode: false
database:
    driver: pdo_mysql
    host: 127.0.0.1
    port: 3306
    dbname: null
    user: root
    password: null
    charset: utf8
    collation: utf8_general_ci
    defaultTableOptions:
        collate: utf8_general_ci
        engine: InnoDB
        charset: utf8
cdn:
    app_js_url: /static/back/js/app.js    # this value will be updated automatically on each `composer update`
    app_css_url: /static/back/css/app.css # this value will be updated automatically on each `composer update`
    image_domain: null
    static_domain: null
elasticsearch:
    host: 'localhost:9200'
    index:
        number_of_shards: 5
        number_of_replicas: 0
    supported_analyzer:
        - english
        - french
        - german
redis:
    scheme: tcp
    host: 127.0.0.1
    port: 6379
    password: null
    disable_page_cache: true # comment this line to enable page cache
    page_cache_db: 8
    jobs_db: 10
langs:
    cn: 中文
    de: Deutsch
    en: English
    es: Español
    fr: Français
    it: Italiano
    nl: Nederlands
    pt: Português
    ru: русский
optimizeimage:
    original:
        quality: 60
        resize: 1920
    formats:
        lg:
            options:
                resize: 1140
            colsizes: [ 12 ]
        md:
            options:
                resize: 768
            colsizes: [ 8,6 ]
        sm:
            options:
                resize: 576
            colsizes: [ 4,3,2,1 ]
```

