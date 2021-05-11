# Changelog for 4.1.2

*Autor : Djoudi Bensid <<djoudi.bensid@lp-digital.fr>>*

This changelog references the relevant changes (bug and additions, modifications and deletions) done in 4.1.2 minor versions.

### Added
- [Page] - Added **backbee/core-php/src/Page/PageContentManager.php** class to which contains methods to retrieve information from a page to be indexed 

### Changed
- [Content] - Added *title_to_be_displayed* parameter to choose the title to display into **backbee/core-php/src/res/ClassContent/Basic/Menu.yml**
- [Toolbar] - Harmonization of "OK" labels
- [Toolbar] - Bring up the language in the title of the page when managing the menu
- [Toolbar] - Change lift label: H1 of the page to Title block

### Bug
- [Tag] - Accés tagMgr depuis PAgeManager in **backbee/core-php/src/Entity/PageManager.php**
- [Seo] - Fix create method into pageManager in **backbee/core-php/src/Entity/PageManager.php**