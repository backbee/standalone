# Standalone version

## 1) Requirements

- PHP 7.4
- MySQL 5.7 OR MariaDB 10.1
- Nginx or Apache with mod_rewrite module 
- HTTPS support
- Elasticsearch 7.14
- Redis 6.0 or greater
- ImageMagick 6.9 or greater (Images optimization)
- npm 8 or greater (Assets compilation)

## 2) Preparation

#### Install libraries for image optimizer:

RPM like flavor (use yum or dnf depending on your environment):
```shell
yum install -y ImageMagick
```
Debian like flavor:
```shell
apt-get install -y imagemagick
```

#### Install libraries for assets compilation

Note: setup_current.x refers to node current active release, can be modified (ex: https://deb.nodesource.com/setup_16.x for release 16.x) according your requirements.

RPM like flavor (yum or dnf depending on your environment):
```shell
curl -sL https://rpm.nodesource.com/setup_current.x | sudo -E bash - & sudo yum install -y nodejs
```
Debian like flavor:
```shell
curl -sL https://deb.nodesource.com/setup_current.x | sudo -E bash - && sudo apt-get install -y nodejs
```

## 3) Project installation

1. ##### Backbee standalone repository clone
```shell
git clone "standalone_repositories"
```

2. ##### Dependencies installation
```shell
composer up
```

3. ##### Site installation
```shell
bin/console backbee:install
```

4. ##### BO's assets installation
```shell
bin/console backbee:ia
```

5. ##### Libraries installation for assets compilation
```shell
cd assets
npm install
```

6. ##### Assets compilation (must be done once and then every time assets are modified or updated in the assets folder)
```shell
gulp
```

## 4) App

Place your project PHP code under `App\` namespace (`src/App/`).

If you want to add:

- Templates, do it under `res/templates/`
- ClassContent, do it under `res/classcontents/`
- Layout templates files, do it under `res/layouts/`
- Helper, do it under `res/helpers`

## 5) Apache & Nginx Configuration 

Configuration files for Apache vhost or Nginx server can be found in:
- **res/dist/apache.conf.dist** for Apache
- **res/dist/nginx.conf.dist** for Nginx
