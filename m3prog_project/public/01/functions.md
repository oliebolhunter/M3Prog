wat doet een strtoupper?
een strtoupper returnd een string met ascii alphabetische letters die worden omgezet in hoofdletter.

waarvoor heb je een strtoupper nodig?
This can be used to convert ASCII characters within strings encoded with UTF-8, since multibyte UTF-8 characters will be ignored. To convert multibyte non-ASCII characters, use mb_strtoupper().

welke parameter heeft een strtoupper?
string
The input string.

Welk type gegeven geeft een strtoupperterug als return waarde?

Returns the uppercased string.

-------------------------------------------

wat doet een strpos?
strpos — Find the position of the first occurrence of a substring in a string

waarvoor heb je het nodig?
Find the numeric position of the first occurrence of needle in the haystack string.

welke parameter heeft een strpos?
haystack
The string to search in.

needle
The string to search for.

Prior to PHP 8.0.0, if needle is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the needle should either be explicitly cast to string, or an explicit call to chr() should be performed.

offset
If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string.

Welk type gegeven geeft een strpos terug als return waarde?

Returns the position of where the needle exists relative to the beginning of the haystack string (independent of offset). Also note that string positions start at 0, and not 1.

Returns false if the needle was not found.

Warning
This function may return Boolean false, but may also return a non-Boolean value which evaluates to false. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.

--------------------------------------------

wat doet een file_exists?
ile_exists — Checks whether a file or directory exists

waarvoor heb je heyt nodig?
als je wilt weten of een file of directory nog bestaat.

parameter
Path to the file or directory.

On windows, use //computername/share/filename or \\computername\share\filename to check files on network shares.

return
Returns true if the file or directory specified by filename exists; false otherwise.

Note:

This function will return false for symlinks pointing to non-existing files.

Note:

The check is done using the real UID/GID instead of the effective one.

Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB.