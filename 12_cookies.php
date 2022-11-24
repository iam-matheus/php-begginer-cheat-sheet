<?php
/* ---------------------------COOKIES------------------------ */
/* 
It's a mechanism for storing users data in the remote browser, and thus 
tracking/identifying return users. I can set specific data to be 
stored in the browser, and then retrieve it when the user returns again.

*/

//set cookie

setcookie('name', 'Winston', time() + 86400 * 30);
/*
 this function takes in the key and value, then the time you want it 
to be valid. '86400' is one day in seconds

unset a ccokie, you simply set it in the past, negative time
*/

setcookie('name', '', time() - 86400 * 30);
