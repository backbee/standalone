# Changelog for 4.2.0

*Author : Djoudi Bensid - <djoudi.bensid@lp-digital.fr>*

This changelog references the relevant changes (bug and additions, modifications and deletions) done in 4.2.0 minor versions.

### Added
- [Application] - Optimize and merge the application and the standalone
- [Config] - Add the basic services of the application in the services.yml file
- [Content] - Adding the author block
- [Content] - Adding the accordion block
- [Content] - Adding the quote block
- [Content] - Adding the information block
- [Installer] - Generation of the events.yml file during installation
- [Loader] - **getContainerLoader** function to load all types of configuration files (xml, yaml ...) that will be injected into the container
- [Logger] - Tracking contribution modification logs
- [Logger] - Log the actions performed on the user
- [Logger] - Log the actions performed on the tag
- [Logger] - Log the actions performed on the group
- [Logger] - Log the actions performed on the page
- [Logger] - Log the actions performed on the content
- [Logger] - Disable the logger if the MonologBundle bundle is not activated or is not installed
- [Logger] - Class harmonization
- [Page] - If publication date is earlier than today's date then put the page online
- [Template] - Add raw parameter on download file title

### Changed
- [Assets] - Share social btn alignement
- [Composer] - Use symfony package
- [Config] - Use of the parameter to get informations about the application
- [Config] - Harmonization of yaml files and use of the parameter to get values
- [Config] - Use of parameters to retrieve app configuration
- [Config] - Moving the twig.extension.text and doctrine.metadata.cache.driver services to the core
- [Content] - Reorganization of contribution elements
- [Content] - Autoblock - only bring back online pages
- [EventListener] - Remove the overload and use the default listener to manage the content category
- [File] - Clean formatBytes method
- [File] - Use of the method formatBytes of the class StringUtils and remove ExecutionHelp class
- [Installer] - Display error message if the application has not been installed
- [Installer] - Update of the parameters that will be added in the services.yml during the installation
- [Knowledge Graph] - Remove the .html in the knowledge Graph
- [Namespace] - Change the namespace of the SiteStatusManager class from BackBeeCloud to BackBee\Site
- [Namespace] - Change the namespace of the VideoHelper class from BackBeeCloud\VideoHelper to BackBee\ClassContent\Media\VideoManager
- [Namespace] - Change of namespace from BackBeePlanet\Standalone\StandaloneHelper to App\Helper\StandaloneHelper
- [Page] - Opening a 404 page in the back office
- [Page type] - Delete search type
- [Tag] - Sort child tags alphabetically
- [Template] - Displaying the header and footer on a 404 page

### Removed
- [Application] - Remove bootstrap file
- [Composer] - Remove backbe-php dependency
- [Composer] - Remove symfony/security-csrf and symfony/var-dumper package
- [Composer] - Remove backbee bin and update composer.json
- [Test] - Remove Manual BBApplication mock and update composer

### Bug
- [Container builder] - Remove readfile method
- [Controller] - Notice: Trying to access array offset on value of type bool into **BackBee\Controller\FrontController**
- [Mailer] - Fix mailer method
- [File] - Fix download block
- [Page] - Fixed the image that disappears when duplicating a page
- [Page] - Bringing up the abstract in the SEO description
- [Page manager] - Improve create method on pageManager
- [Page type] - Uncaught TypeError: Return value of BackBeeCloud\PageType\TypeManager::getDefaultType()
- [Page type] - Gallery template does not comply
- [Tag] - Uncaught Error: Class 'RuntimeExeption' not found in **backbee/core-php/src/Tag/TagLang.php**
- [Sitemap] - Warning: Invalid argument supplied for foreach() into **BackBeePlanet\Sitemap\SitemapManager**

