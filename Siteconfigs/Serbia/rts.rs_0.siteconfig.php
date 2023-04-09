<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'rts.rs',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-27',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Belgrade',
  'culture' => 'sr',
  'max_day' => '5',
  'rating_system' => 'RS',
  'url1' => 'https://www.rts.rs/##channel##/broadcast.html?t=&y=##urldate1##||#calc#\\&m=(\\d+)||-1',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.rts.rs',
  'urldate_format1' => 'Y&\\m=n&\\d=j',
  'show' => '<div class="programRow rowOdd">\\s*(.*?)<\\/div>\\s*<\\/div>',
  'start' => '<div class="time.*?">(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '<h2>(.*?)<\\/h2>|>|<div class="name">(.*?)(?:<\\/div>|$)',
  'desc' => '<p>(.*?)<\\/p>',
  'showicon' => '<img src="(.*?)"||#addstart#https://www.rts.rs',
  'rating' => '"age">(\\d+)',
  'pagekey1' => '<a href="(.*?)"',
  'detail_url1' => 'https://www.rts.rs##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'detail_host_header1' => 'www.rts.rs',
  'detail_subtitle' => '<p class="lead.*?>(.*?)<\\/p>',
  'detail_desc' => '<p><span lang="sr-RS">(.*)<\\/span><\\/p>||#replace#(<a href.*?<\\/a>|-->)||\\n',
  'detail_showicon' => '<meta property="og:image" content="(.*?)"',
  'ccurl1' => 'https://www.rts.rs/tv/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'www.rts.rs',
  'ccchannel_block' => '<p>\\s*<strong>\\s*<a\\shref="\\/(?:tv|radio)\\.html">.*?<\\/p>||#split#(\\|)',
  'ccchannel_id' => '<a href="\\/(?!(?:tv|radio).html)(.*?)\\.html',
  'ccchannel_name' => '<a href=.*?">(?!(?:ТВ|Радио)<\\/a>)(.*?)<\\/a>',
);
?>