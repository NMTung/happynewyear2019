﻿<!DOCTYPE html>
<html>
  <head><link rel="icon" href="https://cdn4.iconfinder.com/data/icons/celebration-and-party-bold-2/96/75-Fireworks-512.png" type="image/x-icon" />
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta property="og:image" content="https://dantricdn.com/thumb_w/640/2016/kieu-trinh4-1482859504773.jpg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="author" content="NguyenDangNhat"/>
    <meta name="copyright" content="NguyenDangNhat"/>
    <title>Đếm Ngược Tết</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/cir.css">
  </head>
  <!-- NguyenDangNhat
  _    _                         _   _             __     __             
 | |  | |                       | \ | |            \ \   / /             
 | |__| | __ _ _ __  _ __  _   _|  \| | _____      _\ \_/ /__  __ _ _ __ 
 |  __  |/ _` | '_ \| '_ \| | | | . ` |/ _ \ \ /\ / /\   / _ \/ _` | '__|
 | |  | | (_| | |_) | |_) | |_| | |\  |  __/\ V  V /  | |  __/ (_| | |   
 |_|  |_|\__,_| .__/| .__/ \__, |_| \_|\___| \_/\_/   |_|\___|\__,_|_|   
              | |   | |     __/ |                                        
              |_|   |_|    |___/                                         
 
 Chúc mừng năm mới Kỷ hợi 2019. Chúc năm mới sức khỏe dẻo dai, công việc thuận lợi thăng tiến dài dài, phi những nước đại tiến tới thành công. -->
  <body>
  <main>
  <div style="position: fixed; top: 0px; left: 0px;"> 
<embed src="swf/banner-left.swf" type="application/x-shockwave-flash" allowscriptaccess="always" menu="false" wmode="transparent" flashvars="username=BQTC" width="130" height="400"> 
</div>
<div style="position: fixed; top: 0px; right: 0px;"> 
<embed src="swf/banner-right.swf" type="application/x-shockwave-flash" allowscriptaccess="always" menu="false" wmode="transparent" flashvars="username=BQTC" width="130" height="400"> 
</div>
        <h1>Chúc Mừng Năm Mới 2019</h1>
        <p>
            Gửi mọi điều tốt đẹp nhất đến với bạn và gia đình...
        </p>
        <div id="countdown">
            <div class="countdown-item days circleBase rd neon">0</div>
            <div class="countdown-item hours circleBase gr">0</div>
            <div class="countdown-item minutes circleBase yl">0</div>
            <div class="countdown-item seconds circleBase bl">0</div>
        </div>
  <br>
<img src="img/hoamai-right.png" style="position: fixed; background:none; padding: 0; border: none; -webkit-border-radius: 0; bottom: 0; right:0;\">
<img src="img/hoamai-left.png" style="position: fixed; background:none; padding: 0; border: none; -webkit-border-radius: 0; bottom: 0; left:0;\">
</main>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='js/main.js'></script>
<script type='text/javascript'>
//<![CDATA[
!function(t){var e={};function s(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,s),o.l=!0,o.exports}s.m=t,s.c=e,s.d=function(t,e,n){s.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},s.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},s.t=function(t,e){if(1&e&&(t=s(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)s.d(n,o,function(e){return t[e]}.bind(null,o));return n},s.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return s.d(e,"a",e),e},s.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},s.p="",s(s.s=2)}([function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.default=class{constructor({days:t="0",hours:e="0",minutes:s="0",seconds:n="0"}){this.days=t,this.hours=e,this.minutes=s,this.seconds=n}}},function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.default=class{constructor({days:t="d",hours:e="h",minutes:s="m",seconds:n="s"}){this.days=t,this.hours=e,this.minutes=s,this.seconds=n}}},function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});const n=s(3);e.LsCountdown=n.default;const o=s(4);e.LsCountdownOptions=o.default;const i=s(1);e.LsCountdownSufixes=i.default;const r=s(0);e.LsCountdownTick=r.default,(t=>{t.LsCountdown=n.default,t.LsCountdownOptions=o.default,t.LsCountdownSufixes=i.default,t.LsCountdownTick=r.default})("undefined"!=typeof window?window:{})},function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});const n=s(0);e.default=class{constructor(t){this.validateTargetDate(t.targetDate),this.targetDate=t.targetDate,this.onStart=t.onStart,this.onStop=t.onStop,this.onTick=t.onTick,this.sufixes=t.sufixes,this.CURRENT_TIME=new n.default({})}validateTargetDate(t){if(t<=new Date)throw new Error("The target date must be a foward date")}doTick(t){let e,s,o,i,r=(new Date).getTime(),u=(this.targetDate.getTime()-r)/1e3;e=u/86400,s=(u%=86400)/3600,o=(u%=3600)/60,i=u%60,e=parseInt(e>0?e>9?e:`0${e}`:"00").toString()+this.sufixes.days,s=parseInt(s>0?s>9?s:`0${s}`:"00").toString()+this.sufixes.hours,o=parseInt(o>0?o>9?o:`0${o}`:"00").toString()+this.sufixes.minutes,i=parseInt(i>0?i>9?i:`0${i}`:"00").toString()+this.sufixes.seconds,this.CURRENT_TIME=new n.default({days:e,hours:s,minutes:o,seconds:i}),"function"==typeof t&&t(this.CURRENT_TIME)}stop(){this.COUNTDOWN_INTERVAL&&(clearInterval(this.COUNTDOWN_INTERVAL),"function"==typeof this.onStop&&this.onStop(Object.assign({},this.CURRENT_TIME)))}start(){this.doTick(this.onStart),this.COUNTDOWN_INTERVAL=setInterval(()=>{this.doTick(this.onTick)},1e3)}changeTargetDate(t=new Date){this.validateTargetDate(t),this.stop.bind(this).call(),this.targetDate=t,this.start.bind(this).call()}}},function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});const n=s(1);e.default=class{constructor({targetDate:t=new Date,onStart:e=(()=>{}),onStop:s=(()=>{}),onTick:o=(()=>{}),sufixes:i=new n.default({})}={}){this.targetDate=t,this.onStart=e,this.onStop=s,this.onTick=o,this.sufixes=i}}}]);
//]]>
</script>
<script src='js/changebg.js'></script>
<script src='js/fw.js'></script>
<iframe allow='accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture' allowfullscreen='' frameborder='' height='1' src=' https://www.youtube.com/embed/bJjQxO5mYK0?autoplay=1&playlist=GfJCAZIbx5A&loop=1&cc_load_policy=1&rel=0&controls=1&showinfo=0' style='position:absolute;display:block;float:left;width:auto;bottom:999999999px' width='1'>
</iframe>
</body>
</html>