
# Filter:-


=> PHP filters are used to validate and sanitize external input.
<br><br>
=> filter_list() :- function can be used to list what the PHP filter extension offers.
<br><br>
=> filter_var() :- function both validate and sanitize data

-    FILTER_SANITIZE_STRING :- remove all HTML tags from a string.

-    FILTER_VALIDATE_INT :-  check if the variable $int is an integer.

-    FILTER_VALIDATE_IP :- check if the variable $ip is a valid IP address.

-    FILTER_VALIDATE_EMAIL :- first remove all illegal characters from the $email variable, then check if it is a valid email address.

-    FILTER_VALIDATE_URL :- irst remove all illegal characters from a URL, then check if $url is a valid URL.

-    FILTER_FLAG_IPV6 :- function to check if the variable $ip is a valid IPv6 address.

-    FILTER_FLAG_QUERY_REQUIRED :- function to check if the variable $url is a URL with a querystring.

-    FILTER_FLAG_STRIP_HIGH :- It will both remove all HTML tags, and all characters with ASCII value > 127, from the string.<br><br>

=> filter_has_var() :- Check if the input variable "email" is sent to the PHP page, through the which method.

- Required. The input type to check for. Can be one of the following.

  - INPUT_GET 
  - INPUT_POST
  - INPUT_COOKIE
  - INPUT_SERVER
  - INPUT_ENV

<br>=> filter_input():- Check if the external variable "email" is sent to the PHP page, through the "get" method, and also check if it is a valid email address.




