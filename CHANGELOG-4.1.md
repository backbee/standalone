# Changelog for 4.1

*Autor : Djoudi Bensid <<djoudi.bensid@lp-digital.fr>>*

This changelog references the relevant changes (bug and additions, modifications and deletions) done in 4.1 minor versions.

### Added
- [Application] - Adding **getAppParameter** method to retrieve values defined in **app** key into *res/repository/Config/config.yml*
- [Assets] - Adding a condition to align the text to the right for the Arabic language into **backbee/core-php/assets/css/components/_reset.scss**
- [Config] - *elasticsearch.dist.yml*, *mailchimp.dist.yml*, *mailer.dist.yml*, *redis.dist.yml*, *recaptcha.yml*, *optimize_image.yml* into **res/dist/**
- [Config] - **res/dist/** folder into **backbee/core-php/res/dist**
- [Config] - Adding **whitelist** key to reference the IPs of users who have access to the backoffice into **res/repository/Config/config.yml**
- [Config] - Adding Arabic language in the available languages
- [Console] - **parseYaml** method to parse yaml file and **askFor** to ask the user a question into **BackBee\Command\AbstractCommand** 
- [Console] - Adding the options (app_name, server_name, db_host, db_name, db_username, db_password, elasticsearch_host, redis_host, mailer_host, mailer_port, mailer_from, admin_username, admin_password) to install the site into **BackBee\Command\InstallCommand** 
- [Console] - Call **install** with *core.installer.assets* service to install assets into **BackBee\Command\InstallCommand**
- [Console] - **getAppName** method to retrieve or request the name of the application into **BackBee\Command\InstallCommand** 
- [Composer] - **moveConfigDistResources** method moves config dist resources from vendor/backbee/core-php/res/dist to res/ into **BackBee\Installer\Composer\ScriptHandler**
- [Elasticsearch] - **getIndexName** method witch generate a clean unique index name to be used by elasticsearch into **BackBeeCloud\Elasticsearch\ElasticsearchManager**
- [Helper] - To get the label of current language into the twig, you must use **this.getCurrentLang.getLabel()**
- [Helper] - **BackBee\Renderer\Helper\checkUserIP** class to check if an IP is valid in the case of IPs listed in the *whitelist* parameter located in *res/repository/Config/config.yml*
- [Installer] - **BackBee\Installer\AbstractInstaller** class allowing child classes to retrieve **entityManager** and **application** service
- [Installer] - **BackBee\Installer\AssetsInstaller** class contains **install** method for install assets
- [Installer] - **BackBee\Installer\DatabaseInstaller** class contains **createDatabase** method to create database (either in parameter or by input) and **updateDatabaseSchema** to update database schema
- [Installer] - **BackBee\Installer\ElasticsearchInstaller** class contains **index** method to index site
- [Installer] - **BackBee\Installer\KeywordInstaller** class contains **createRootKeyword** method to create a new root keyword instance
- [Installer] - **BackBee\Installer\LayoutInstaller** class contains **createCleanLayout** method to create a new layout instance
- [Installer] - **BackBee\Installer\PageInstaller** class contains **createRootPage** method to create a new root page instance
- [Installer] - **BackBee\Installer\RepositoryInstaller** class allows to generate generate the configuration files from the dist sources (either in parameter or by input)
- [Installer] - **BackBee\Installer\SiteInstaller** class contains **createSite** method to create a new site instance (either in parameter or by input)
- [Installer] - **BackBee\Installer\SudoerInstaller** class contains **createSudoer** method to create the user admin (either in parameter or by input)
- [Installer] - **BackBee\Installer\UserRightsInstaller** class contains **install** method for install user rights
- [Service] - **core.listener** into **services.yml** to load **BackBeeCloud\Listener\CoreListener** class
- [Service] - **core.cache.listener** into **services.yml** to load **BackBeeCloud\Listener\CacheListener** class
- [Service] - **core.installer.page** into **services.yml** to load **BackBee\Installer\PageInstaller** class
- [Service] - **core.installer.keyword** into **services.yml** to load **BackBee\Installer\PageInstaller** class
- [Service] - **core.installer.site** into **services.yml** to load **BackBee\Installer\SiteInstaller** class
- [Service] - **core.installer.layout** into **services.yml** to load **BackBee\Installer\LayoutInstaller** class
- [Service] - **core.installer.sudoer** into **services.yml** to load **BackBee\Installer\SudoerInstaller** class
- [Service] - **core.installer.database** into **services.yml** to load **BackBee\Installer\DatabaseInstaller** class
- [Service] - **core.installer.repository** into **services.yml** to load **BackBee\Installer\RepositoryInstaller** class
- [Service] - **core.installer.assets** into **services.yml** to load **BackBee\Installer\AssetsInstaller** class
- [Service] - **core.installer.user_rights** into **services.yml** to load **BackBee\Installer\UserRightsInstaller** class
- [Service] - **core.installer.elasticsearch** into **services.yml** to load **BackBee\Installer\ElasticsearchInstaller** class
- [Service] - **core.standalone.abstract_standalone.helper** into **services.yml** to load **BackBeePlanet\Standalone\AbstractStandaloneHelper** class
- [Service] - **core.redis.manager** into **services.yml** to load **BackBee\Cache\RedisManager** class
- [Template] - Adding the **dir** attribute to the **main** html tag to respect the reading direction
- [Toolbar] - **isValidTitle** method to checks if the title contains only Latin characters

### Changed
- [Bundle] - Merge **res/repository/Config/optimize_image.yml** with default configuration of core bundle into **backbee/core-php/src/EntryPoint.php**
- [Config] - Upgrade CKEditor version *4.7.0* to *4.16.0* and added the Arabic language into **backbee/core-php/res/dist/config.yml.dist**
- [Config] - In *app/src/Standalone/Config/services.yml* change **BackBeePlanet\Standalone\ElasticsearchManager** to **BackBeeCloud\Elasticsearch\ElasticsearchManager**
- [Console] - Use **core.redis.manager** service to remove page cache into **BackBee\Command\ClearAllCacheCommand**
- [Console] - Use **core.installer.elasticsearch** service to index pages into **BackBee\Command\IndexElasticsearchCommand**
- [Console] - Use **core.installer.assets** service to install assets into **BackBee\Command\InstallAssetsCommand**
- [Console] - Use **core.installer.user_rights** service to install user rights into **BackBee\Command\InstallAssetsCommand**
- [Console] - Use **RepositoryInstaller::buildRepository** in place of  **buildRepository** method into **BackBee\Command\InstallCommand**
- [Console] - Use **DatabaseInstaller::createDatabase** in place of  **createDatabase** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **updateDatabaseSchema** method (with *core.installer.database* service) in place of  **updateDatabaseSchema** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **createSuoder** method (with *core.installer.sudoer* service) in place of  **createSuoder** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **createSite** method (with *core.installer.site* service) in place of  **createSite** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **createCleanLayout** method (with *core.installer.layout* service) in place of  **createCleanLayout** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **createRootPage** method (with *core.installer.page* service) in place of  **createRootPage** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **createRootKeyword** method (with *core.installer.keyword* service) in place of  **createRootKeyword** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **install** method (with *core.installer.user_rights* service) in place of  **installUserRights** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **index** method (with *core.installer.elasticsearch* service) in place of  **indexElasticsearch** method into **BackBee\Command\InstallCommand** 
- [Console] - Use **updateDatabaseSchema** method (with *core.installer.database* service) in place of  **updateDatabaseSchema** method into **BackBee\Command\UpdateDatabaseSchemaCommand** 
- [Console] - Use **core.redis.manager** service to remove page cache and  as a parameter for **JobManager** class into **BackBee\Command\RunJobCommand**
- [Controller] - Use *res/repository/Config/mailchimp.yml* into **BackBeeCloud\Api\Controller\MailchimpController**
- [Controller] - Use *res/repository/Config/mailchimp.yml* into **BackBeeCloud\Controller\NewsletterController**
- [Controller] - Use *res/repository/Config/redis.yml* into **BackBee\Cache\RedisManager**
- [Controller] - Use *redisManager* service in place of **BackBeePlanet\Redis\RedisManager::getClient()** to retrieve redis client and use **BackBee\HttpClient\UserAgent** in place of **BackBeeCloud\UserAgentHelper** into **BackBeeCloud\Controller\ColorPanelController**
- [Controller] - Use *res/repository/Config/mailer.yml* into **BackBeeCloud\Controller\ContactController**
- [Composer] - Use filesystem in **moveDistResources** method to create dest directory into **BackBee\Installer\Composer\ScriptHandler**
- [Elasticsearch] - Use *res/repository/Config/elasticsearch.yml* to retrive elasticsearch configuration and change **ELASTICSEARCH_INDEX_NAME** value, *backbee_planet* to *backbee* into **BackBeeCloud\Elasticsearch\ElasticsearchClient**
- [Events] - Replace **BackBeeCloud\Listener\CoreListener** namespace with **@core.listener** service
- [Events] - Replace **BackBeeCloud\Listener\CacheListener** namespace with **@core.cache.listener** service
- [Helper] - To get the code of current language into the twig, you must use **this.getCurrentLang.getCode()** 
- [Helper] - Use *res/repository/Config/config.yml* into **BackBee\Renderer\Helper\bbtoolbar** to retrieve configuration about the cdn
- [Helper] - Use *res/repository/Config/config.yml* into **BackBee\Renderer\Helper\getCdnUri** to retrieve configuration about the cdn
- [Helper] - Use *res/repository/Config/config.yml* into **BackBee\Renderer\Helper\isPrivacyPolicyEnabled** to check if privacy policy is enabled
- [Helper] - Use *res/repository/Config/config.yml* into **BackBee\Renderer\Helper\knowledgeGraphHelper** to check if knowledge graph is enabled
- [Helper] - Use **BackBee\HttpClient\UserAgent** in place of **BackBeeCloud\UserAgentHelper** into **BackBee\Renderer\Helper\userAgentHelper** 
- [Job] - Use *res/repository/Config/redis.yml* into **BackBeePlanet\Job\JobManager**
- [Listener] - Use *res/repository/Config/recaptcha.yml* into **BackBeeCloud\ReCaptcha\ReCaptchaListener**
- [Listener] - Use **core.redis.manager** to retrieve redis client and remove page cache into **BackBeeCloud\Listener\CacheListener**
- [Listener] - Use **BackBee\HttpClient\UserAgent** in place of **BackBeeCloud\UserAgentHelper** into **BackBeeCloud\Listener\ClassContent\ContentListener**
- [Listener] - Use *res/repository/Config/config.yml* into **BackBeeCloud\Listener\CoreListener** to check if debug mode is enabled in **onKernelException** method
- [Listener] - Use *res/repository/Config/config.yml* into **BackBeeCloud\Listener\PageListener** to check if privacy policy is enabled in **onPageRender** method
- [Listener] - Use *res/repository/Config/config.yml* into **BackBeeCloud\Listener\PrivacyPolicyListener** to check if privacy policy is enabled in **onKernelResponse** method
- [Namespace] - **BackBeePlanet\Redis\RedisManager** to **BackBee\Cache\RedisManager**
- [Namespace] - **BackBeePlanet\Standalone\ElasticsearchManager** to **BackBeeCloud\Elasticsearch\ElasticsearchManager**
- [Namespace] - **BackBeeCloud\UserAgentHelper** to **BackBee\HttpClient\UserAgent**
- [Namespace] - **BackBeePlanet\Standalone\Composer\ScriptHandler** to **BackBee\Installer\Composer\ScriptHandler**
- [MultiLang] - Use *res/repository/Config/config.yml* into **BackBeeCloud\MultiLang\MultiLangManager** to retrieve available languages list and use **core.redis.manager** service to remove page cache and  as a parameter for **JobManager**
- [OptimizeImage] - Use *res/repository/Config/optimize_image.yml*  into **BackBeePlanet\OptimizeImage\OptimizeImageManager** to retrieve options related to image optimization and use **BackBee\HttpClient\UserAgent** in place of **BackBeeCloud\UserAgentHelper**
- [Security] - Use *res/repository/Config/config.yml* into **BackBeeCloud\Security\UserRightManager** to check if knowledge graph is enabled in **getSuperAdminRights** method
- [SiteOption] - Use *res/repository/Config/site_options.yml* into **BackBeeCloud\SiteOption\OptionManager** to retrieve site options
- [Standalone] - Use *res/repository/Config/config.yml* into **BackBeePlanet\Standalone\AbstractStandaloneHelper** to retrieve application name, redis configuration and use **core.redis.manager** service to remove page cache. Moreover use of **BackBee\HttpClient\UserAgent** class in place of **BackBeeCloud\UserAgentHelper**
- [Template] - The addition of scripts to launch the toolbar is conditioned by the validation of the user's IP if the whitelist has been filled in into **backbee/core-php/res/views/common/toolbar.html.twig**
- [Toolbar] - Adaptation of the CKEditor according to the language of the page (language + text direction)
- [Toolbar] - Checking the title at creation and at edition to avoid titles not using Latin characters
- [Web] - Adding **$app** parameter in **getCachedResponse** into **web/index.php**

### Removed
- [Config] - global_settings.yml file into **res/repository/Config** folder
- [Controller] - backbee/core-php/src/Controller/NewsletterController.php
- [Listener] - **getImageCdnHost** method into **BackBeeCloud\Listener\ClassContent\ContentListener**
- [Listener] - **onApplicationInit** method into **BackBeePlanet\Listener\OptimizeImageListener**
- [Not used] - backbee/core-php/src/CacheLayer.php
- [Not used] - backbee/core-php/src/GlobalSettings.php
- [Not used] - backbee/core-php/src/Standalone/UpdateDatabaseSchemaTrait.php replaced by **backbee/core-php/src/Installer/DatabaseInstaller** with method **updateDatabaseSchema**
- [Not used] - backbee/core-php/src/Standalone/ManageUserRightsTrait.php replaced by **backbee/core-php/src/Installer/UserRightsInstaller** with method **install**
- [Not used] - backbee/core-php/src/Elasticsearch/IndexElasticsearchTrait.php replaced by **backbee/core-php/src/Installer/ElasticsearchInstaller** with method **index**
- [Not used] - backbee/core-php/src/Standalone/ElasticsearchManager.php replaced by **backbee/core-php/src/Elasticsearch/ElasticsearchManager**
- [Not used] - backbee/core-php/src/Template/TemplateManager.php replaced by **backbee/core-php/src/Installer/AssetsInstaller**
- [Route] - **cloud.hauth.authenticate** route into **backbee/core-php/src/Config/route.yml**
- [Service] - **core.template.manager** into **services.yml**
- [Template] - backbee/core-php/res/views/HAuth/hook.js.twig
- [Template] - backbee/core-php/res/views/HAuth/rest_api_area.html.twig

### Bug
- [Multilang] - Fix of the default language when multilang is not activated