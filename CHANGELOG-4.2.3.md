# Changelog for 4.2.3

*Author : Djoudi Bensid - <djoudi.bensid@lp-digital.fr>*

This changelog references the relevant changes (bug and additions, modifications and deletions) done in 4.2.3 minor versions.

### Added
- [Content] - Add a protocol to enter a URL
- [Content] - Add protocol into imageLink element.
- [Mailer] - Add getMailer method
- [Search Engine] - Display number of results
- [Search Engine] - Add pages_to_exclude on elasticsearch

### Changed
- [About] - About page
- [Asset] - Update of core-php assets
- [Content] - Auto-completion in manual lists
- [Cookie] - Make PHP session cookie secure + httponly
- [Cookie] - Make the cookie accepted_cookies_policies secure + httponly
- [Search Engine] - Remove the fuziness parameter during the search
- [Search Engine] - Improving the relevance of the search engine
- [Tag] - Tags stored in ElasticSearch

### Bug
- [CKEditor] - Adding and deleting a break line in the CKEditor keeps the save button in orange
- [Content] - Vimeo upload in the video block
- [Mailer] - Error sending mail with ContactController
- [Rights] - Editing rights
- [Session] - Session not deleted after a logout
- [Session] - Display of the session expired message on a first connection
- [Tag] - Editing an existing tag