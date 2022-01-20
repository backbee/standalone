# Changelog for 4.2.5

*Author : Djoudi Bensid - <d.bensid@obione.eu>*

This changelog references the relevant changes (bug and additions, modifications and deletions) done in 4.2.5 minor versions.

### Added
- [Elasticsearch] - Add indexname into configuration file
- [MultiLang] - Make it possible to configure the activation of multi-languages
- [SEO] - Editable knowledge graph
- [SEO] - Associate the right to modify the knowledge graph with SEO
- [Sitemap] - Add sitemap into redis cache
- [Sitemap] - Add the image title for the images in the sitemap

### Changed
- [Template] - Display by default the page title when the image alt is empty
- [Sitemap] - Improvement of sitemap
- [Sitemap] - Remove noindex pages from the sitemap
- [Toolbar] - No display multi-language field if is not enable

### Removed
- [SEO] - **isKnowledgeGraphEnabled** method into **BackBee\Renderer\Helper\knowledgeGraphHelper.php** class
- [Right] - User right **KNOWLEDGE_GRAPH_FEATURE**

### Bug
- [Bundle] - Bundle rights are not displayed on the front
- [ClassContent] - Entity class abstract content used in the discriminator map of class content does not exist
- [SEO] - Knowledge Graph: remove .html extension in search action
- [SEO] - Description metadata display bug
- [Toolbar] - Tag selection level 3 in auto-completion