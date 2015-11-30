<?=preg_filter('/(?<=\s|^)\w/e','chr(ord($0)-32)',STR);
