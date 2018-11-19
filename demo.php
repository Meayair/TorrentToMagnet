<?php
include './SDK/BEncode.php';
include './SDK/BDecode.php';
$path = "";//此处填写种子的地址
$torrent = file_get_contents($path);
$desc = BDecode($torrent);
$info = $desc['info'];
$hash = strtoupper(sha1( BEncode($info) ));
$magnet = sprintf('magnet:?xt=urn:btih:%s&dn=%s', $hash, $info['name']);
echo $magnet;
