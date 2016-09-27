#Utilities Repository
The WHSuite Utilities Repository is used to store helper and utility functions, generally ones that use third party composer repositories.

Instead of splitting each helper/utility into their own repo, this single repo can be used for minor, or small helpers that don't require much additional functionality, other than loading, and modifying another composer repository.

A good example of this is the email helper. This simply loads up SwiftMailer and configures it, providing an interface for it in WHSuite.

**If you add any new helpers to this repository, please list them below.**

## Current Utilities/Helpers

- Email (Extends the swiftmailer/swiftmailer package)