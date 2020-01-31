Problem 1:

When searching database inventory for files sent to the Production Department storage drive, search results only display/return files which have been manually labelled as "2PRODUCTION ONLY" by the user. (See images "1A" and "1B").

Research:

Upon reviewing the custom filters (SQL functions), I discovered that the "2PRODUCTION ONLY" function is set only to see which files are labelled '2PROD' (see image "1C" and "1D"); while files are OFTEN labelled, they are not ALWAYS labelled by the user, as it is an optional choice when manipulating inventory files.

Solution:

Sending files to the Production Department storage drive is an automated process carried out by the inventory system.  The system is set to carry this process out when it detects a file ending in the characters "2PROD".  Therefore, ALL files sent to the Production Department storage drive are REQUIRED to end in these characters.  Therefore, I modified the existing "2PRODUCTION ONLY" function to include files which end in the characters "2PROD" (see image "1E").

Result:

Calling on the "2PRODUCTION ONLY" function now returns both files manually labelled '2PROD' as well as files ending in the characters "2PROD" (see image "1F").  This new function now returns ALL files that have been sent to the Production Department storage drive.