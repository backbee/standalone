# Changelog for 4.1.1

*Author : Djoudi Bensid - <djoudi.bensid@lp-digital.fr>*

This changelog references the relevant changes (bug and additions, modifications and deletions) done in 4.1.1 minor versions.

### Added
- [Assets] - Reducing the line spacing and font size of the title on a smartphone into **backbee/core-php/assets/css/components/_type.scss**
- [Command] - Added *mailer_username*, *mailer_password* and *mailer_encryption* to set up SMTP during the installation in **BackBee\Installer\RepositoryInstaller** class
- [Config] - Added *encryption*, *username* and *password* parameters into **backbee/core-php/res/dist/mailer.yml.dist**
- [Installer] - During an installation, **recaptcha.yml** file will be generated into **BackBee\Installer\RepositoryInstaller** class
- [Page] - When creating a page, set index and follow to ON by default in **BackBeeCloud\Entity\PageManager** class
- [Revision] - Added **getUniqToken** method into **BackBee\Security\Token\BBUserToken** to generate a unique token for revisions

### Changed
- [Composer] - Upgrade **doctrine/orm** version, *v2.4.8.1* to *v2.5.14* in **backbee/backbee-php/composer.json**
- [Config] - Change default value of parameter **authorized_hosts**, `~` to `[]` into *backbee/core-php/res/dist/recaptcha.yml.dist* class
- [Installer] - In **moveConfigDistResources** method, when copying the files will not be overwritten into **BackBee\Installer\Composer\ScriptHandler**  class
- [Multilang] - Fix of the default language if multi-language is not activated into **BackBee\Renderer\Helper\getCurrentLang** class. By default is french language.

### Removed
- [Config] - Remove **entity_custom_repository** parameter into **backbee/core-php/res/dist/doctrine.yml.dist**
- [Not used] - **backbee/core-php/src/Entity/RevisionRepository.php** replaced by **backbee/backbee-php/ClassContent/Repository/RevisionRepository.php**
- [Not used] - **backbee/backbee-php/Doctrine/RepositoryFactory.php**

### Bug
- [Command] - Uncaught Error: Call to a member function text() in **backbee/core-php/src/Command/OptimizeImageConvertCommand.php**
- [Multilang] - Object of class BackBee\Renderer\Helper\getCurrentLang could not be converted to string in **backbee/core-php/res/helpers/trans.php**
- [KnowledgeGraph] - Fix namespace in **getExtraMappingTypes** method (*BackBeePlanet\KnowledgeGraph\Schema\Schema* to *BackBee\KnowledgeGraph\Schema\Schema*) into **BackBee\KnowledgeGraph\KnowledgeGraphManager** class
- [Sitemap] - Warning: Invalid argument supplied for foreach() into **BackBeePlanet\Sitemap\SitemapManager** class
- [Tag] - Uncaught Error: Class 'RuntimeExeption' not found in **backbee/core-php/src/Tag/TagLang.php**