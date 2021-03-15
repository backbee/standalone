# BackBee - Standalone version

## 1) Install project

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

## 2) Install the libraries for the image optimizer:

**Fedora:**
```yaml
yum install ImageMagick -y
yum -y install libwebp-devel
yum install libwebp-tools
```
**Ubuntu:**
```yaml
apt-get install imagemagick
apt-get install libwebp-dev
apt-get install webp
```